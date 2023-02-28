<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $data = Kelas::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('nama', 'LIKE', '%' . $search . '%');
            })
            ->paginate(2)->fragment('kelas');
        return view('admin.kelas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kelas.create');
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
        Kelas::create($request->post());
        return redirect()->route('kelas.index')
            ->with('success', 'Kelas Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Kelas::findOrFail($id);
        return view('admin.kelas.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Kelas::findOrFail($id);
        return view('admin.kelas.edit', compact('data'));
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
        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('kelas.index')
            ->with('success', 'Kelas Berhasil di Rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Kelas::findOrFail($id);
        $data->delete();
        return redirect()->route('kelas.index')
            ->with('success', 'Kelas Berhasil di Hapus');
    }
}
