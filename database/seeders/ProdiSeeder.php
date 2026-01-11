<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::create([
            'kode_prodi' => "PR-001",
            'nama_prodi' => 'Teknik Informatika',
            'nama_kaprodi' => "Adul",
        ]);

        Prodi::create([
            'kode_prodi' => "PR-002",
            'nama_prodi' => 'Sistem Informasi',
            'nama_kaprodi' => "Bejo",
        ]);
    }
}
