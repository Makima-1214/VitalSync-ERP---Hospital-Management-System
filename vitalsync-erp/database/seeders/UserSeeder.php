<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@vitalsync.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
                'full_name' => 'Administrator',
            ],
            [
                'name' => 'dr.sarah',
                'email' => 'sarah@vitalsync.com',
                'password' => Hash::make('password'),
                'role_id' => 3,
                'full_name' => 'dr. Sarah Wijaya, Sp.PD',
            ],
            [
                'name' => 'dr.michael',
                'email' => 'michael@vitalsync.com',
                'password' => Hash::make('password'),
                'role_id' => 3,
                'full_name' => 'dr. Michael Chen, Sp.A',
            ],
            [
                'name' => 'apoteker1',
                'email' => 'apoteker@vitalsync.com',
                'password' => Hash::make('password'),
                'role_id' => 5,
                'full_name' => 'Apt. Rina Kusuma',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
