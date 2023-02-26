<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'nama_app' => 'SDN 05 Tiram',
            'email_app' => 'sdn05tiram@email.com',
            'telpon_app' => '082386825834',
            'alamat_app' => 'Korong Tiram,Kec. Ulakan Tapakis',
            'logo_app' => '123.jpg'
        ]);
    }
}
