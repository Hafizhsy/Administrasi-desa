<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin',  
            'nik' => '1234567890',
            'alamat' => 'Jl. Admin No. 1',
            'password' => Hash::make('Kopandakan123!'),
            'role' => 'admin',
        ]);
    }
}
