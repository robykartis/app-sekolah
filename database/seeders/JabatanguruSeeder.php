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
            'nama' => 'Walikelas',
            'keterangan' => 'Ini Jabatan Walikelas'
        ]);
        Jabatanguru::create([
            'nama' => 'Pengganti',
            'keterangan' => 'Ini Jabatan Pengganti'
        ]);
    }
}
