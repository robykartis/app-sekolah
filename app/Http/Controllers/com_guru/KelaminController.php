<?php

namespace App\Http\Controllers\com_guru;

use App\Http\Controllers\Controller;
use App\Models\Kelamin;
use Illuminate\Http\Request;

class KelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kelamin::paginate(2);
        return view('admin.component_guru.kelamin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.component_guru.kelamin.create');
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
        Kelamin::create($request->post());
        return redirect()->route('jenis_kelamin.index')
            ->with('success', 'Jenis Kelamin Berhasil di Tambah');
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
        $data = Kelamin::findOrFail($id);
        return view('admin.component_guru.kelamin.edit', compact('data'));
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
        $kelas = Kelamin::findOrFail($id);
        $kelas->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('jenis_kelamin.index')
            ->with('success', 'Jenis Kelamin Berhasil di Rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Kelamin::findOrFail($id);
        $data->delete();
        return redirect()->route('jenis_kelamin.index')
            ->with('success', 'Jenis Kelamin Berhasil di Hapus');
    }
}
