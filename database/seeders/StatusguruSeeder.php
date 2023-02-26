<?php

namespace Database\Seeders;

use App\Models\Statusguru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusguruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statusguru::create([
            'nama' => 'PNS',
            'keterangan' => 'Keterangan PNS'
        ]);
        Statusguru::create([
            'nama' => 'HONORER',
            'keterangan' => 'Keterangan HONORER'
        ]);
    }
}
