<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'nama' => 'Kelas A',
            'keterangan' => 'Ini Kelas A'
        ]);
        Kelas::create([
            'nama' => 'Kelas B',
            'keterangan' => 'Ini Kelas B'
        ]);
        Kelas::create([
            'nama' => 'Kelas C',
            'keterangan' => 'Ini Kelas C'
        ]);
    }
}
