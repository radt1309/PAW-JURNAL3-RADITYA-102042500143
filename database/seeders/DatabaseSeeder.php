<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        User::updateOrCreate(
            ['email' => 'budi.santoso@telkomuniversity.ac.id'],
            [
                'name' => 'Dr. Ir. Budi Santoso, M.T.',
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'nomor_induk' => '197001011995121001',
            ]
        );

        // Akun awal untuk Mahasiswa (sesuai contoh di soal modul/output)
        User::updateOrCreate(
            ['email' => 'raihan.arifinza@student.telkomuniversity.ac.id'],
            [
                'name' => 'Ahmad Raihan Arifinza',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'nomor_induk' => '102042500143',
            ]
        );
    }
}