<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelamin extends Model
{
    use HasFactory;
    protected $table = 'kelamins';
    protected $fillable = ['nama', 'keterangan'];
}
