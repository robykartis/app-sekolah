<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profils';
    protected $fillable = [
        'nama_app',
        'email_app',
        'telpon_app',
        'alamat_app',
        'logo_app'
    ];
}
