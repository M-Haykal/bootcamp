<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Haykal', 'role_status' => 'admin', 'email' => 'hayzee@gmail.com', 'password' => Hash::make('Haykal23')]
        ];

        foreach ($data as $val ){
            User::insert([
                'name' => $val['name'],
                'role_status' => $val['role_status'],
                'email' => $val['email'],
                'password' => $val['password']
            ]);
        }
    }
}
