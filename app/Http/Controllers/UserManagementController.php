<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::paginate(2);
        return view('admin.user_management.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = [
            [
                'nama' => 'Admin'
            ],
            [
                'nama' => 'Guru'
            ],
            [
                'nama' => 'Murid'
            ],
        ];
        return view('admin.user_management.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|string|confirmed|min:8',
            'poto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Nama user tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'role.required' => 'Pilih salah satu role akun',
            'password.required' => 'Password harap diisi'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->role = $request->role;
            $data->password = Hash::make($request->password);
            if ($image = $request->file('poto')) {
                $destinationPath = 'images/user_app';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['poto'] = "$profileImage";
            }
            $data->save();
            return redirect()->route('user_app.index')
                ->with('success', 'User Berhasil di Tambah');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user_management.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        return view('admin.user_management.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
