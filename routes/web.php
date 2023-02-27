<?php

use App\Http\Controllers\Adm_AdminController;
use App\Http\Controllers\Adm_GuruSekolahController;
use App\Http\Controllers\Adm_Kepala_sekolah;
use App\Http\Controllers\Adm_MuridController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\com_guru\JabatanController;
use App\Http\Controllers\com_guru\KelaminController;
use App\Http\Controllers\com_guru\StatusController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Auth::routes();

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'usper_admin:admin'])->group(function () {
    Route::group(['prefix' => 'super-admin'], function () {
        Route::get('/dashboard', [SuperadminController::class, 'index'])->name('super_admin.index');

        Route::group(['prefix' => '/profil'], function () {
            Route::get('/', [ProfilController::class, 'index'])->name('profil.index');
            Route::get('/edit/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
            Route::put('/update/{id}', [ProfilController::class, 'update'])->name('profil.update');
            Route::get('/detail/{id}', [ProfilController::class, 'show'])->name('profil.detail');
        });

        Route::group(['prefix' => '/kepala-sekolah'], function () {
            Route::get('/', [KepalaSekolahController::class, 'index'])->name('kepala_sekolah.index');
            Route::get('/edit/{id}', [KepalaSekolahController::class, 'edit'])->name('kepala_sekolah.edit');
            Route::put('/update/{id}', [KepalaSekolahController::class, 'update'])->name('kepala_sekolah.update');
        });

        Route::group(['prefix' => '/kelas'], function () {
            Route::get('/', [KelasController::class, 'index'])->name('kelas.index');
            Route::get('/create', [KelasController::class, 'create'])->name('kelas.create');
            Route::post('/store', [KelasController::class, 'store'])->name('kelas.store');
            Route::get('/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
            Route::put('/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
            Route::delete('/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
        });

        Route::group(['prefix' => '/guru'], function () {
            Route::group(['prefix' => '/jabatan'], function () {
                Route::get('/', [JabatanController::class, 'index'])->name('jabatan_pegawai.index');
                Route::get('/tambah', [JabatanController::class, 'create'])->name('jabatan_pegawai.create');
                Route::post('/simpan', [JabatanController::class, 'store'])->name('jabatan_pegawai.store');
                Route::get('/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan_pegawai.edit');
                Route::put('/perbaharui/{id}', [JabatanController::class, 'update'])->name('jabatan_pegawai.update');
                Route::delete('/hapus/{id}', [JabatanController::class, 'destroy'])->name('jabatan_pegawai.destroy');
            });
            Route::group(['prefix' => '/status'], function () {
                Route::get('/', [StatusController::class, 'index'])->name('status_pegawai.index');
                Route::get('/tambah', [StatusController::class, 'create'])->name('status_pegawai.create');
                Route::post('/simpan', [StatusController::class, 'store'])->name('status_pegawai.store');
                Route::get('/edit/{id}', [StatusController::class, 'edit'])->name('status_pegawai.edit');
                Route::put('/perbaharui/{id}', [StatusController::class, 'update'])->name('status_pegawai.update');
                Route::delete('/hapus/{id}', [StatusController::class, 'destroy'])->name('status_pegawai.destroy');
            });
            Route::group(['prefix' => '/jenis-kelamin'], function () {
                Route::get('/', [KelaminController::class, 'index'])->name('jenis_kelamin.index');
                Route::get('/tambah', [KelaminController::class, 'create'])->name('jenis_kelamin.create');
                Route::post('/simpan', [KelaminController::class, 'store'])->name('jenis_kelamin.store');
                Route::get('/edit/{id}', [KelaminController::class, 'edit'])->name('jenis_kelamin.edit');
                Route::put('/perbaharui/{id}', [KelaminController::class, 'update'])->name('jenis_kelamin.update');
                Route::delete('/hapus/{id}', [KelaminController::class, 'destroy'])->name('jenis_kelamin.destroy');
            });
            Route::get('/', [GuruController::class, 'index'])->name('guru.index');
            Route::get('/create', [GuruController::class, 'create'])->name('guru.create');
            Route::post('/store', [GuruController::class, 'store'])->name('guru.store');
        });
    });
});

Route::middleware(['auth', 'admin:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [Adm_AdminController::class, 'index'])->name('adm_admin.index');
    });
});
Route::middleware(['auth', 'kepala_sekolah:admin'])->group(function () {
    Route::group(['prefix' => 'kepala-sekolah'], function () {
        Route::get('/dashboard', [Adm_Kepala_sekolah::class, 'index'])->name('adm_kepala_sekolah.index');
    });
});
Route::middleware(['auth', 'guru_sekolah:admin'])->group(function () {
    Route::group(['prefix' => 'guru-sekolah'], function () {
        Route::get('/dashboard', [Adm_GuruSekolahController::class, 'index'])->name('adm_guru_sekolah.index');
    });
});
Route::middleware(['auth', 'murid:admin'])->group(function () {
    Route::group(['prefix' => 'murid'], function () {
        Route::get('/dashboard', [Adm_MuridController::class, 'index'])->name('adm_murid.index');
    });
});
