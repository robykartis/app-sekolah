<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingAppController extends Controller
{

    public function index()
    {
        $data = Setting::all();
        return view('admin.setting_app.index', compact('data'));
    }


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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Setting::findOrFail($id);
        // dd($profil);
        return view('admin.setting_app.edit', compact('data'));
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
            'logo_app' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mencari profil yang ingin diupdate berdasarkan ID
        $setting = Setting::find($id);

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
        $setting->update($input);
        return redirect()->route('setting_app.index')
            ->with('success', 'Profil Berhasil di Rubah');
    }
}
