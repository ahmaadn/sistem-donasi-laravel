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

        $users = [
            [
                "name" => "admin",
                "email" => 'admin@gmail.com',
                "password" => Hash::make("admin123"),
                "role" => "admin",
            ],
            [
                "name" => "Ahmad Nur Sahid",
                "email" => 'ahmad@gmail.com',
                "password" => Hash::make("ahmad12345"),
                "role" => "admin",
            ],
            [
                "name" => "Nur hapianti",
                "email" => 'user@gmail.com',
                "password" => Hash::make("nur12345"),
                "role" => "admin",
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
