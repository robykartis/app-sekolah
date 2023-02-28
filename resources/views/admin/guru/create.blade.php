@extends('master.layouts')
@section('title')
    Tambah | Guru
@endsection
@section('breadcrumbs')
    Guru
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
                    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="id_kelas" class="form-control">
                                <option value="" selected>Pilih Kelas</option>
                                @foreach ($kelas as $kl)
                                    <option value="{{ $kl->id }}">
                                        {{ $kl->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_kelas'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('id_kelas') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="id_status" class="form-control">
                                <option value="" selected>Pilih Status</option>
                                @foreach ($status as $st)
                                    <option value="{{ $st->id }}">
                                        {{ $st->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_status'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('id_status') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select name="id_jabatan" class="form-control">
                                <option value="" selected>Pilih Status</option>
                                @foreach ($jabatan as $jb)
                                    <option value="{{ $jb->id }}">
                                        {{ $jb->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_jabatan'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('id_jabatan') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="number" name="nip" value="" class="form-control"
                                placeholder="Masukan NIP">
                            @if ($errors->has('nip'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('nip') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pengalaman">Pengalaman</label>
                            <input type="number" name="pengalaman" value="" class="form-control"
                                placeholder="Masukan Penagalaman Jadi Guru">

                            @if ($errors->has('pengalaman'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('pengalaman') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Masuk</label>
                            <input type="date" name="date" value="" class="form-control"
                                placeholder="Masukan Nama Sekolah">
                            @if ($errors->has('date'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('date') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="" class="form-control"
                                placeholder="Masukan Nama Lengkap">
                            @if ($errors->has('nama'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('nama') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Jenis Kelamin</label>
                            <select name="id_kelamin" class="form-control">
                                <option value="" selected>Pilih Jenis Kelamin</option>
                                @foreach ($kelamin as $kel)
                                    <option value="{{ $kel->id }}">
                                        {{ $kel->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_kelamin'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('id_kelamin') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="id_agama" class="form-control">
                                <option value="" selected>Pilih Agama</option>
                                @foreach ($agama as $ag)
                                    <option value="{{ $ag->id }}">
                                        {{ $ag->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_agama'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('id_agama') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="umur">UMUR</label>
                            <input type="number" name="umur" value="" class="form-control"
                                placeholder="Masukan Umur">

                            @if ($errors->has('umur'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('umur') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nip">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukan Alamat Lengkap" cols="30" rows="10"></textarea>

                            @if ($errors->has('alamat'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('alamat') }}.</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="telpon">Telpon</label>
                            <input type="number" name="telpon" value="" class="form-control"
                                placeholder="Masukan Telpon">

                            @if ($errors->has('telpon'))
                                <small id="emailHelp"
                                    class="form-text text-danger">{{ $errors->first('telpon') }}.</small>
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
