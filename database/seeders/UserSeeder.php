<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'email' => 'admin@inventoryapp.com',
                'role' => 'superadmin',
                'password' => Hash::make('admininventoryapp')
            ],
            [
                'email' => 'purchasing@inventoryapp.com',
                'role' => 'purchasing',
                'password' => Hash::make('purchasinginventoryapp')
            ],
            [
                'email' => 'qc@inventoryapp.com',
                'role' => 'qc',
                'password' => Hash::make('qcinventoryapp')
            ]
        ]);
    }
}
