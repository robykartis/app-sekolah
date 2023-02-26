<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adm_Kepala_sekolah extends Controller
{
    public function index()
    {
        return view('kepala_sekolah.dashboard');
    }
    public function edit()
    {
        return view('kepala_sekolah.edit');
    }
}
