<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        $patients = [
            [
                'nik' => '3201234567890001',
                'medical_record_number' => 'RM-2024-001',
                'name' => 'Budi Santoso',
                'date_of_birth' => '1985-05-15',
                'gender' => 'male',
                'phone' => '081234567890',
                'email' => 'budi@example.com',
                'address' => 'Jl. Merdeka No. 123, Jakarta Pusat',
                'blood_type' => 'O',
                'allergies' => null,
            ],
            [
                'nik' => '3201234567890002',
                'medical_record_number' => 'RM-2024-002',
                'name' => 'Siti Nurhaliza',
                'date_of_birth' => '1990-08-22',
                'gender' => 'female',
                'phone' => '081234567891',
                'email' => 'siti@example.com',
                'address' => 'Jl. Sudirman No. 45, Bandung',
                'blood_type' => 'A',
                'allergies' => 'Penisilin',
            ],
            [
                'nik' => '3201234567890003',
                'medical_record_number' => 'RM-2024-003',
                'name' => 'Ahmad Fauzi',
                'date_of_birth' => '1978-03-10',
                'gender' => 'male',
                'phone' => '081234567892',
                'address' => 'Jl. Gatot Subroto No. 78, Jakarta Selatan',
                'blood_type' => 'B',
            ],
            [
                'nik' => '3201234567890004',
                'medical_record_number' => 'RM-2024-004',
                'name' => 'Rina Kusuma',
                'date_of_birth' => '1995-11-05',
                'gender' => 'female',
                'phone' => '081234567893',
                'address' => 'Jl. Thamrin No. 12, Jakarta Pusat',
                'blood_type' => 'AB',
            ],
            [
                'nik' => '3201234567890005',
                'medical_record_number' => 'RM-2024-005',
                'name' => 'Dewi Lestari',
                'date_of_birth' => '1988-07-18',
                'gender' => 'female',
                'phone' => '081234567894',
                'address' => 'Jl. Asia Afrika No. 90, Bandung',
                'blood_type' => 'O',
                'allergies' => 'Seafood',
            ],
        ];

        foreach ($patients as $patient) {
            Patient::create($patient);
        }
    }
}
