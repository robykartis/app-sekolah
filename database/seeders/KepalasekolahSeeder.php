<?php

namespace Database\Seeders;

use App\Models\Kepalasekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepalasekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kepalasekolah::create([
            'nama' => 'Roby Karti S, SKOM',
            'jenis_kelamin' => 'laki-laki',
            'nip' => '123456',
            'umur' => '30',
            'telpon' => '3045645654645',
            'poto' => '123.jpg'
        ]);
    }
}
