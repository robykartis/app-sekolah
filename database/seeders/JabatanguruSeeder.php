<?php

namespace Database\Seeders;

use App\Models\Jabatanguru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanguruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatanguru::create([
            'nama' => 'PNS',
            'keterangan' => 'Ini Jabatan PNS'
        ]);
        Jabatanguru::create([
            'nama' => 'HONORER',
            'keterangan' => 'Ini Jabatan HONORER'
        ]);
    }
}
