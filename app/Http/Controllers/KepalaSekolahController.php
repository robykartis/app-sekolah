<?php

namespace App\Http\Controllers;

use App\Models\Kepalasekolah;
use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{
    public function index()
    {
        $data = Kepalasekolah::all();
        return view('admin.kepala_sekolah.index', compact('data'));
    }
    public function edit($id)
    {
        $data = Kepalasekolah::findOrFail($id);
        $kelamin_options = ['laki-laki', 'perempuan'];
        return view('admin.kepala_sekolah.edit', compact('data', 'kelamin_options'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input yang diterima dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'telpon' => 'required',
            'poto' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'umur.required' => 'Umur tidak boleh kosong',
            'telpon.required' => 'Telpon tidak boleh kosong',
            'poto.image' => 'File harus berupa gambar',
            'poto.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg',
            'poto.max' => 'Ukuran gambar tidak boleh lebih dari 2048 KB',
        ]);

        // Mencari profil yang ingin diupdate berdasarkan ID
        $data = Kepalasekolah::find($id);

        // Update field yang diterima dari form
        $input = $request->all();

        // Jika ada gambar yang diupload, update gambar
        if ($image = $request->file('poto')) {
            $destinationPath = 'images/kepala_sekolah/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['poto'] = "$profileImage";
        } else {
            unset($input['logo_app']);
        }
        $data->update($input);
        return redirect()->route('kepala_sekolah.index')
            ->with('success', 'Kepala Sekolah Berhasil di Rubah');
    }
    // public function update(Request $request, $id)
    // {
    //     // Validasi input yang diterima dari form
    //     $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'jenis_kelamin' => 'required',
    //         'nip' => 'required|string|max:20',
    //         'umur' => 'required|string|max:255',
    //         'telpon' => 'required|string|max:13',
    //         'poto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ], [
    //         'nama.required' => 'Nama tidak boleh kosong',
    //         'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
    //         'nip.required' => 'NIP tidak boleh kosong',
    //         'umur.required' => 'Umur tidak boleh kosong',
    //         'telpon.required' => 'Nomor telepon tidak boleh kosong',
    //         'poto.image' => 'File harus berupa gambar',
    //         'poto.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg',
    //         'poto.max' => 'Ukuran gambar tidak boleh lebih dari 2048 KB',
    //     ]);

    //     // Mencari profil yang ingin diupdate berdasarkan ID
    //     $data = Kepalasekolah::find($id);

    //     // Update field yang diterima dari form
    //     $input = $request->all();
    //     dd($input);
    //     // Jika ada gambar yang diupload, update gambar
    //     if ($image = $request->file('poto')) {
    //         $destinationPath = 'images/kepala_sekolah/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['poto'] = "$profileImage";
    //     } else {
    //         unset($input['poto']);
    //     }

    //     if ($data->update($input)) {
    //         return redirect()->route('kepala_sekolah.index')
    //             ->with('success', 'Kepala Sekolah Berhasil di Rubah');
    //     } else {
    //         return redirect()->route('kepala_sekolah.edit', $id)
    //             ->with('error', 'Terjadi kesalahan saat memperbarui data kepala sekolah.');
    //     }
    // }
}
