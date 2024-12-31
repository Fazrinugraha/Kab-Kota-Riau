<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test',
            'email' => 'st@example.com',
        ]);

          // Optionally, you can create a specific admin
          Admin::factory()->create([
            'nama' => 'Fazri Nugraha',
            'email' => 'fazri123@gmail.com',
            'no_hp' => '081277037017',
            'alamat' => 'Jl. Perjuangan',
            'kelas' => 'KSI 5A',
            'prodi' => 'D4 Keamanan Sistem Informasi',
            'jurusan' => 'Teknik Informatika',
        ]);
    }
}
