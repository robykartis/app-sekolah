<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $guru = Guru::with('get_kelas');

        $search = $request->input('search');
        $data = Guru::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('nama', 'LIKE', '%' . $search . '%');
            })
            ->paginate(2)->fragment('gurus');
        return view('admin.guru.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'id_kelas' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'status' => 'required|string|max:255',
            'umur' => 'required|string|max:255',
            'telpon' => 'required|string|max:12',
            'pengalaman' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'date' => 'required',
        ]);
        Guru::create($request->post());
        return redirect()->route('kelas.index')
            ->with('success', 'Kelas Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        //
    }
}
