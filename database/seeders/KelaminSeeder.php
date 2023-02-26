<?php

namespace Database\Seeders;

use App\Models\Kelamin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelamin::create([
            'nama' => 'Laki-laki',
            'keterangan' => 'Ini Kelamin Laki-laki'
        ]);
        Kelamin::create([
            'nama' => 'Perempuan',
            'keterangan' => 'Ini Kelamin Perempuan'
        ]);
    }
}
