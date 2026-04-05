<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    public function run(): void
    {
        $medicines = [
            ['code' => 'MED-001', 'name' => 'Amoxicillin 500mg', 'category' => 'Antibiotik', 'stock' => 1250, 'price' => 5000, 'critical_limit' => 100],
            ['code' => 'MED-002', 'name' => 'Paracetamol 500mg', 'category' => 'Analgesik', 'stock' => 45, 'price' => 2500, 'critical_limit' => 50],
            ['code' => 'MED-003', 'name' => 'Ibuprofen 400mg', 'category' => 'Analgesik', 'stock' => 800, 'price' => 3500, 'critical_limit' => 100],
            ['code' => 'MED-004', 'name' => 'OBH Syrup 100ml', 'category' => 'Batuk & Flu', 'stock' => 150, 'price' => 15000, 'critical_limit' => 20],
            ['code' => 'MED-005', 'name' => 'Vitamin C 500mg', 'category' => 'Vitamin', 'stock' => 500, 'price' => 8000, 'critical_limit' => 50],
            ['code' => 'MED-006', 'name' => 'Antasida Tablet', 'category' => 'Pencernaan', 'stock' => 300, 'price' => 4000, 'critical_limit' => 50],
            ['code' => 'MED-007', 'name' => 'Cetirizine 10mg', 'category' => 'Antihistamin', 'stock' => 8, 'price' => 6000, 'critical_limit' => 50],
            ['code' => 'MED-008', 'name' => 'Metformin 500mg', 'category' => 'Diabetes', 'stock' => 600, 'price' => 7500, 'critical_limit' => 100],
            ['code' => 'MED-009', 'name' => 'Amlodipine 5mg', 'category' => 'Hipertensi', 'stock' => 450, 'price' => 9000, 'critical_limit' => 100],
            ['code' => 'MED-010', 'name' => 'Omeprazole 20mg', 'category' => 'Pencernaan', 'stock' => 5, 'price' => 12000, 'critical_limit' => 50],
        ];

        foreach ($medicines as $medicine) {
            Medicine::create($medicine);
        }
    }
}
