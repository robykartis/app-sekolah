<?php

namespace App\Http\Controllers\com_guru;

use App\Http\Controllers\Controller;
use App\Models\Jabatanguru;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jabatanguru::paginate(2);
        return view('admin.component_guru.jabatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.component_guru.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
        ]);
        Jabatanguru::create($request->post());
        return redirect()->route('jabatan_pegawai.index')
            ->with('success', 'Jabatan Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Jabatanguru::findOrFail($id);
        return view('admin.component_guru.jabatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
        ]);
        $kelas = Jabatanguru::findOrFail($id);
        $kelas->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jabatan_pegawai.index')
            ->with('success', 'Jabatan Berhasil di Rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Jabatanguru::findOrFail($id);
        $data->delete();
        return redirect()->route('jabatan_pegawai.index')
            ->with('success', 'Jabatan Berhasil di Hapus');
    }
}
