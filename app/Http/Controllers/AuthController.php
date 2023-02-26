<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'super_admin') {
                return redirect()->route('super_admin.index');
            } elseif ($user->role == 'admin') {
                return redirect()->route('adm_admin.index');
            } elseif ($user->role == 'kepala_sekolah') {
                return redirect()->route('adm_kepala_sekolah.index');
            } elseif ($user->role == 'guru_sekolah') {
                return redirect()->route('adm_guru_sekolah.index');
            } elseif ($user->role == 'murid') {
                return redirect()->route('adm_murid.index');
            }
        }
        return view('auth.login');
    }
    public function proses_login(Request $request)
    {
        $messages = [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!'
        ];
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'super_admin') {
                return redirect()->route('super_admin.index');
            } elseif (auth()->user()->role == 'admin') {
                return redirect()->route('adm_admin.index');
            } elseif (auth()->user()->role == 'kepala_sekolah') {
                return redirect()->route('adm_kepala_sekolah.index');
            } elseif (auth()->user()->role == 'guru_sekolah') {
                return redirect()->route('adm_guru_sekolah.index');
            } elseif (auth()->user()->role == 'murid') {
                return redirect()->route('adm_murid.index');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
