@extends('master.layouts')
@section('breadcrumbs')
    Profil APP
@endsection
@section('content')
    <!-- Content Row -->

    <div class="row">
        <div class="col-lg-8 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data APP</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="{{ $profil->id }}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama_app" value="{{ old('nama_app', $profil->nama_app) }}"
                                class="form-control" placeholder="Masukan Nama Sekolah">

                            @if ($errors->has('nama_app'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('nama_app') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email_app" value="{{ old('email_app', $profil->email_app) }}"
                                class="form-control" placeholder="Masukan email">

                            @if ($errors->has('email_app'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('email_app') }}.</small>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telpon</label>
                            <input type="number" name="telpon_app" value="{{ old('telpon_app', $profil->telpon_app) }}"
                                class="form-control" placeholder="Masukan telpon">

                            @if ($errors->has('telpon_app'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('telpon_app') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat_app" value="{{ old('alamat_app', $profil->alamat_app) }}"
                                class="form-control" placeholder="Masukan alamat">

                            @if ($errors->has('alamat_app'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('alamat_app') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="logo_app" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" accept="image/*">
                                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                                </div>
                                @if ($errors->has('logo_app'))
                                    <small id="emailHelp"
                                        class="form-text text-danger">{{ $errors->first('logo_app') }}.</small>
                                @endif
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between pt-3">
                            <button type="submit" class="btn btn-primary">Rubah</button>
                            <a href="{{ route('profil.index') }}" class="btn btn-warning">Kembali</a>
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
                    <img src="/logo_app/{{ $profil->logo_app }}" alt="Logo {{ $profil->nama_app }}" width="300">
                </div>
            </div>

        </div>
    </div>
@endsection
