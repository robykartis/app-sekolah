<?php

namespace App\Http\Controllers\com_guru;

use App\Http\Controllers\Controller;
use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Agama::paginate(2);
        return view('admin.component_guru.agama.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.component_guru.agama.create');
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
        Agama::create($request->post());
        return redirect()->route('agama_pegawai.index')
            ->with('success', 'Agama Berhasil di Tambah');
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
    public function edit($id)
    {
        $data = Agama::findOrFail($id);
        return view('admin.component_guru.agama.edit', compact('data'));
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
        $kelas = Agama::findOrFail($id);
        $kelas->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('agama_pegawai.index')
            ->with('success', 'Agama Berhasil di Rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Agama::findOrFail($id);
        $data->delete();
        return redirect()->route('agama_pegawai.index')
            ->with('success', 'Agama Berhasil di Hapus');
    }
}
