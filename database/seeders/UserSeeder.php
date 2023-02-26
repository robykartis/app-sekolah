<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@email.com',
            'role' => 'super_admin',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Kepala Sekolah',
            'email' => 'kepalasekolah@email.com',
            'role' => 'kepala_sekolah',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Guru Sekolah',
            'email' => 'gurusekolah@email.com',
            'role' => 'guru_sekolah',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Murid Sekolah',
            'email' => 'muridsekolah@email.com',
            'role' => 'murid_sekolah',
            'password' => Hash::make('password')
        ]);
    }
}
