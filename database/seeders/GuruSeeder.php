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
            'jenis_kelamin' => 'Laki-laki',
            'status' => 'PNS',
            'umur' => '30',
            'telpon' => '3453453453443',
            'pengalaman' => '2',
            'jabatan' => 'Pengajar',
            'date' => now(),
            'alamat' => 'Korong Tiram',
            'poto' => '123.jpg',
        ]);
        Guru::create([
            'id_kelas' => '2',
            'nama' => 'Guru 2',
            'nip' => '123',
            'jenis_kelamin' => 'Laki-laki',
            'status' => 'HONORER',
            'umur' => '35',
            'telpon' => '3453453453443',
            'pengalaman' => '2',
            'jabatan' => 'Pengganti',
            'date' => now(),
            'alamat' => 'Korong Batanggadang',
            'poto' => '123.jpg',
        ]);
        Guru::create([
            'id_kelas' => '3',
            'nama' => 'Guru 3',
            'nip' => '123',
            'jenis_kelamin' => 'Perempuan',
            'status' => 'PNS',
            'umur' => '29',
            'telpon' => '3453453453443',
            'pengalaman' => '1',
            'jabatan' => 'Pengajar',
            'date' => now(),
            'alamat' => 'Korong Kasai',
            'poto' => '123.jpg',
        ]);
    }
}
