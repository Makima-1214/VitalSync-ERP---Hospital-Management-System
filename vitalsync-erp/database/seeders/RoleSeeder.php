<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'Superadmin'],
            ['name' => 'Admin'],
            ['name' => 'Dokter'],
            ['name' => 'Perawat'],
            ['name' => 'Apoteker'],
            ['name' => 'Kasir'],
            ['name' => 'Laboratorium'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
