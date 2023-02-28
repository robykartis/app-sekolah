@extends('master.layouts')
@section('title')
    Tambah | Pengguna
@endsection
@section('breadcrumbs')
    Pengguna
@endsection
@section('content')
    <!-- Content Row -->

    <div class="row">

        <div class="col-lg-8 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('user_app.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-lg-12">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control  @error('name') is-invalid @enderror"
                                            placeholder="Masukan Nama Pengguna">

                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control  @error('email') is-invalid @enderror"
                                            placeholder="Masukan Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="kelas">Role Pengguna</label>
                                        <select name="role" class="form-control  @error('role') is-invalid @enderror">
                                            <option selected>Pilih Role Pengguna</option>
                                            @foreach ($role as $item)
                                                <option value="{{ $item['nama'] }}">{{ $item['nama'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="nama">Password</label>
                                        <input type="password" name="password" value="{{ old('password') }}"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            placeholder="Masukan Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="nama">Password</label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control {{ $errors->has('password') ? ' text-red' : '' }}"
                                            placeholder="Masukan Ulang Password">

                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="logo">Poto</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="poto" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                                    </div>
                                    @if ($errors->has('poto'))
                                        <small id="emailHelp"
                                            class="form-text text-danger">{{ $errors->first('poto') }}.</small>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <div class="d-sm-flex align-items-center justify-content-between pt-3">
                            <a href="{{ route('guru.index') }}" class="btn btn-warning">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data LOGO</h6>
                </div>
                <div class="card-body">
                    <img src="/images/kepala_sekolah/" alt="logo " width="300">
                </div>
            </div>

        </div>
    </div>
@endsection
