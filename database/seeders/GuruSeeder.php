<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Guru::create([
            'id_kelas' => '1',
            'nama' => 'Guru 1',
            'nip' => '123',
            'id_kelamin' => '1',
            'id_status' => '1',
            'id_agama' => '1',
            'umur' => '30',
            'telpon' => '3453453453443',
            'pengalaman' => '2',
            'id_jabatan' => '1',
            'date' => now(),
            'alamat' => 'Korong Tiram',
            'poto' => '123.jpg',
        ]);
        Guru::create([
            'id_kelas' => '2',
            'nama' => 'Guru 1',
            'nip' => '123',
            'id_kelamin' => '2',
            'id_status' => '2',
            'id_agama' => '2',
            'umur' => '30',
            'telpon' => '3453453453443',
            'pengalaman' => '2',
            'id_jabatan' => '2',
            'date' => now(),
            'alamat' => 'Korong Tiram',
            'poto' => '123.jpg',
        ]);
    }
}
