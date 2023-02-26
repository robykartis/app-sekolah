<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatanguru extends Model
{
    use HasFactory;
    protected $table = 'jabatangurus';
    protected $fillable = ['nama', 'keterangan'];
}
