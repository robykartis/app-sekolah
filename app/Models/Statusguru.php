<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusguru extends Model
{
    use HasFactory;
    protected $table = 'statusgurus';
    protected $fillable = ['nama', 'keterangan'];
}
