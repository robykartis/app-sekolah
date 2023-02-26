<?php

namespace App\Http\Controllers\com_guru;

use App\Http\Controllers\Controller;
use App\Models\Statusguru;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Statusguru::paginate(2);
        return view('admin.component_guru.status.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.component_guru.status.create');
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
        Statusguru::create($request->post());
        return redirect()->route('status_pegawai.index')
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
        $data = Statusguru::findOrFail($id);
        return view('admin.component_guru.status.edit', compact('data'));
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
        $kelas = Statusguru::findOrFail($id);
        $kelas->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('status_pegawai.index')
            ->with('success', 'Status Berhasil di Rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Statusguru::findOrFail($id);
        $data->delete();
        return redirect()->route('status_pegawai.index')
            ->with('success', 'Status Berhasil di Hapus');
    }
}
