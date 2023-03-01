<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {

        $data_guru = Guru::paginate(3);
        $guru = $data_guru->count();

        $data_kelas = Kelas::paginate(2);
        $kelas = $data_kelas->count();
        return view('admin.dashboard', compact([
            'data_guru',
            'guru',
            'data_kelas',
            'kelas'

        ]));
    }
}
