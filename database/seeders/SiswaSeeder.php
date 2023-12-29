<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Haykal', 'kelas' => 'XI PPLG 1', 'role_status' => 'siswa', 'email' => 'hayzees@gmail.com', 'password' => Hash::make('haykal07')]
        ];

        foreach ($data as $val){
            Siswa::insert([
                'nama' => $val['nama'],
                'kelas' => $val['kelas'],
                'role_status' => $val['role_status'],
                'email' => $val['email'],
                'password' => $val['password']
            ]);
        }
    }
}
