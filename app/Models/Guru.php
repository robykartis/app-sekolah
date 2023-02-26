<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'id_kelas',
        'nama',
        'nip',
        'jenis_kelamin',
        'status',
        'umur',
        'telpon',
        'pengalaman',
        'jabatan',
        'date',
        'alamat',
        'poto',
    ];
    function get_kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
