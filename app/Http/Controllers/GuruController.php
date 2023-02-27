<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Guru;
use App\Models\Jabatanguru;
use App\Models\Kelamin;
use App\Models\Kelas;
use App\Models\Statusguru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                return $query->where('nama as nama_guru', 'LIKE', '%' . $search . '%');
            })
            ->paginate(2)->fragment('gurus');
        return view('admin.guru.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $kelamin = Kelamin::all();
        $status = Statusguru::all();
        $jabatan = Jabatanguru::all();
        $agama = Agama::all();
        return view('admin.guru.create', compact([
            'kelas',
            'kelamin',
            'status',
            'jabatan',
            'agama'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'id_kelas' => 'required',
                'nama' => 'required',
                'nip' => 'required',
                'id_kelamin' => 'required',
                'id_status' => 'required',
                'id_agama' => 'required',
                'umur' => 'required',
                'telpon' => 'required',
                'pengalaman' => 'required',
                'id_jabatan' => 'required',
                'date' => 'required',
                'alamat' => 'required',
                'poto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],

        );
        // dd($validator);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->all(),);
        }

        try {
            $data = new Guru;
            $data->id_kelas = $request->id_kelas;
            $data->nama = $request->nama;
            $data->nip = $request->nip;
            $data->id_kelamin = $request->id_kelamin;
            $data->id_status = $request->id_status;
            $data->id_agama = $request->id_agama;
            $data->umur = $request->umur;
            $data->telpon = $request->telpon;
            $data->pengalaman = $request->pengalaman;
            $data->id_jabatan = $request->id_jabatan;
            $data->date = $request->date;
            $data->alamat = $request->alamat;
            if ($image = $request->file('poto')) {
                $destinationPath = 'images/guru_sekolah';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['poto'] = "$profileImage";
            }
            $data->save();

            return redirect()->route('guru.index')
                ->with('success', 'Guru Berhasil di Tambah');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Guru::findOrFail($id);
        return view('admin.guru.show', compact([
            'data'
        ]));
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
    public function destroy($id)
    {
        $data = Guru::findOrFail($id);
        $data->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Guru Berhasil di Hapus');
    }
}
