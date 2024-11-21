<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
            'password' => bcrypt('P@55word'),

        ]);

        // Data nama
        $users = [

            ['nama' => 'Abi Mutholib', 'email' => 'abi@gmail.com'],
            ['nama' => 'Aji Zuhair', 'email' => 'aji@gmail.com'],
            ['nama' => 'Faris Maulana', 'email' => 'faris@gmail.com'],
            ['nama' => 'Yudha Ramadhan', 'email' => 'yudha@gmail.com'],
        ];

        foreach ($users as $user) {
            User::create([
                'nama' => $user['nama'],
                'email' => $user['email'],
                'role' => 1, // Sesuaikan dengan role Anda
                'status' => 1,
                'hp' => '08' . rand(1000000000, 9999999999), // Nomor telepon acak
                'password' => bcrypt('P@55word'), // Password acak terenkripsi
            ]);
        }
    }
}
