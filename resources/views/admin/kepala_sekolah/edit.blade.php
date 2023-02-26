@extends('master.layouts')
@section('title')
    Edit | Profil APP
@endsection
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
                    <form action="{{ route('kepala_sekolah.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="{{ $data->id }}">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="{{ old('nama', $data->nama) }}" class="form-control"
                                placeholder="Masukan Nama Sekolah">

                            @if ($errors->has('nama'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('nama') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="laki-laki" {{ $data->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="perempuan" {{ $data->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" value="{{ old('nip', $data->nip) }}" class="form-control"
                                placeholder="Masukan NIP">

                            @if ($errors->has('nip'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('nip') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nip">UMUR</label>
                            <input type="text" name="umur" value="{{ old('umur', $data->umur) }}" class="form-control"
                                placeholder="Masukan NIP">

                            @if ($errors->has('umur'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('umur') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="telpon">Telpon</label>
                            <input type="text" name="telpon" value="{{ old('telpon', $data->telpon) }}"
                                class="form-control" placeholder="Masukan Telpon">

                            @if ($errors->has('telpon'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('telpon') }}.</small>
                            @endif
                        </div>
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

                        <div class="d-sm-flex align-items-center justify-content-between pt-3">
                            <a href="{{ route('profil.index') }}" class="btn btn-warning">Kembali</a>
                            <button type="submit" class="btn btn-primary">Rubah</button>
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
                    <img src="/images/kepala_sekolah/{{ $data->poto }}" alt="logo {{ $data->poto }}" width="300">
                </div>
            </div>

        </div>
    </div>
@endsection
