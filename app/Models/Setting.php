<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'nama_app',
        'email_app',
        'telpon_app',
        'alamat_app',
        'logo_app'
    ];
}
