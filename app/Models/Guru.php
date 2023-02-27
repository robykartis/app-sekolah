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
        'id_kelamin',
        'id_status',
        'id_agama',
        'umur',
        'telpon',
        'pengalaman',
        'id_jabatan',
        'date',
        'alamat',
        'poto'
    ];
    function get_kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas')->select('nama as nama_kelas');
    }
    function get_kelamin()
    {
        return $this->belongsTo(Kelamin::class, 'id_kelamin')->select('nama as nama_kelamin');
    }
    function get_status()
    {
        return $this->belongsTo(Statusguru::class, 'id_status')->select('nama as nama_status');
    }
    function get_agama()
    {
        return $this->belongsTo(Agama::class, 'id_agama')->select('nama as nama_agama');
    }
    function get_jabatan()
    {
        return $this->belongsTo(Jabatanguru::class, 'id_jabatan')->select('nama as nama_jabatan');
    }
}
