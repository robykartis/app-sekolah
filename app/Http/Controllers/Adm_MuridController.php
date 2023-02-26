<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adm_MuridController extends Controller
{
    public function index()
    {
        return view('murid.dashboard');
    }
}
