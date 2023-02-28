<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'nama_app' => 'SDN 05 Tiram',
            'email_app' => 'sdn05tiram@email.com',
            'telpon_app' => '082386825834',
            'alamat_app' => 'Jl. Syehburhanudin',
            'logo_app' => '123.jpg'
        ]);
    }
}
