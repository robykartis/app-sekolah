<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adm_AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
