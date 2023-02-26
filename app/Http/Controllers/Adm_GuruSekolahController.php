<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adm_GuruSekolahController extends Controller
{
    public function index()
    {
        return view('guru_sekolah.dashboard');
    }
}
