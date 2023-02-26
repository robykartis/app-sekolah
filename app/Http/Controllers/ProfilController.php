<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Profil::all();
        return view('admin.profil_app.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        // dd($profil);
        return view('admin.profil_app.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input yang diterima dari form
        $request->validate([
            'nama_app' => 'required|string|max:255',
            'email_app' => 'required|string|email|max:255',
            'telpon_app' => 'required|string|max:20',
            'alamat_app' => 'required|string|max:255',
            'logo_app' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mencari profil yang ingin diupdate berdasarkan ID
        $profil = Profil::find($id);

        // Update field yang diterima dari form
        $input = $request->all();

        // Jika ada gambar yang diupload, update gambar
        if ($image = $request->file('logo_app')) {
            $destinationPath = 'logo_app/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['logo_app'] = "$profileImage";
        } else {
            unset($input['logo_app']);
        }
        $profil->update($input);
        return redirect()->route('profil.index')
            ->with('success', 'Profil Berhasil di Rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
