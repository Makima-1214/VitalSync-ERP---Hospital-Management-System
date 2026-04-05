<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class HospitalWorkflowService
{
    public function generateFinalBill($medicalRecordId)
    {
        return DB::transaction(function () use ($medicalRecordId) {
            $record = DB::table('medical_records')->where('id', $medicalRecordId)->first();
            if (!$record) return null;
            
            $prescription = DB::table('prescriptions')->where('medical_record_id', $medicalRecordId)->first();
            $medicineCost = 0;
            if ($prescription) {
                $details = json_decode($prescription->medicine_details, true);
                foreach ($details as $item) {
                    $medicine = DB::table('medicines')->where('id', $item['item_id'])->first();
                    if ($medicine) {
                        $medicineCost += ($medicine->price * $item['qty']);
                    }
                }
            }

            $labCost = DB::table('lab_orders')->where('medical_record_id', $medicalRecordId)->sum('cost');
            $consultationFee = 150000;
            $total = $medicineCost + $labCost + $consultationFee;

            $invoiceId = DB::table('invoices')->insertGetId([
                'invoice_number' => 'INV-' . time(),
                'patient_id' => $record->patient_id,
                'medical_record_id' => $medicalRecordId,
                'total_amount' => $total,
                'status' => 'unpaid',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return $invoiceId;
        });
    }

    public function dispenseMedication($prescriptionId)
    {
        DB::transaction(function () use ($prescriptionId) {
            $prescription = DB::table('prescriptions')->where('id', $prescriptionId)->first();
            if (!$prescription) return;
            
            $items = json_decode($prescription->medicine_details, true);

            foreach ($items as $item) {
                $medicineId = $item['item_id'];
                $qty = $item['qty'];
                DB::table('medicines')->where('id', $medicineId)->decrement('stock', $qty);
            }
            
            DB::table('prescriptions')->where('id', $prescriptionId)->update(['status' => 'dispensed']);
        });
    }
}