<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepalasekolah extends Model
{

    use HasFactory;
    protected $table = 'kepalasekolahs';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'nip',
        'umur',
        'telpon',
        'poto'
    ];
}
