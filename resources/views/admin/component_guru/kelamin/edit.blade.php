@extends('master.layouts')
@section('title')
    Edit | Jenis Kelamin
@endsection
@section('breadcrumbs')
    Jenis Kelamin | Edit
@endsection
@section('content')
    <!-- Content Row -->

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 col-md-6 mx-auto my-5">
                    <!-- Approach -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Jenis Kelamin Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('jenis_kelamin.update', $data->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{ $data->id }}">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="{{ old('nama', $data->nama) }}"
                                        class="form-control" placeholder="Masukan Nama Kelas">

                                    @if ($errors->has('nama'))
                                        <small id="emailHelp"
                                            class="form-text text-danger">{{ $errors->first('nama') }}.</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="nama">Keterangan</label>
                                    <input type="text" name="keterangan"
                                        value="{{ old('keterangan', $data->keterangan) }}" class="form-control"
                                        placeholder="Masukan Keterangan Kelas">

                                    @if ($errors->has('keterangan'))
                                        <small id="emailHelp"
                                            class="form-text text-danger">{{ $errors->first('keterangan') }}.</small>
                                    @endif
                                </div>
                                <div class="d-sm-flex align-items-center justify-content-between pt-3">
                                    <a href="{{ route('jenis_kelamin.index') }}" class="btn btn-warning">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Rubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
