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
        User::create([
            'email' => 'admin@inventoryapp.com',
            'role' => 'superadmin',
            'password' => Hash::make('admininventoryapp')
        ]);

        User::factory()->count(3)->create();
    }
}
