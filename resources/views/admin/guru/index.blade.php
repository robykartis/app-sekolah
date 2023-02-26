@extends('master.layouts')
@section('title')
    Index | Guru
@endsection
@section('breadcrumbs')
    Guru
@endsection
@section('content')
    <!-- Content Row -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">

        <div class="col-lg-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Componen GURU</h6>
                </div>
                <div class="card-body">

                    <!-- Circle Buttons (Large) -->
                    <div class="btn-group d-flex">
                        <a href="{{ route('jabatan_pegawai.index') }}" class="btn btn-primary  btn-lg">
                            Jabatan
                        </a>
                        <a href="{{ route('status_pegawai.index') }}" class="btn btn-success  btn-lg">
                            Status
                        </a>
                        <a href="{{ route('jenis_kelamin.index') }}" class="btn btn-info  btn-lg">
                            Jenis Kelamin
                        </a>
                        <a href="#" class="btn btn-warning  btn-lg">
                            Agama
                        </a>
                        <a href="#" class="btn btn-danger  btn-lg">
                            Aksi
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                    <div class="ml-auto">
                        <a href="{{ route('guru.create') }}" class="btn btn-success btn-sm" title="Tambah Kelas">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="py-3 d-flex">
                            <form method="GET" action="{{ route('guru.index') }}"
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group mb-3 mt-1">
                                    <input type="text" name="search" class="form-control bg-light border-0 small"
                                        placeholder="Cari nama kelas" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <table class="table table-bordered " width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 2%">No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status</th>
                                    <th>Jabatan</th>
                                    <th>Kelas</th>
                                    <th>Poto</th>
                                    <th style="width: 25%">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = ($data->currentPage() - 1) * $data->perPage() + 1;
                                @endphp
                                @foreach ($data as $guru)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $guru->nama }}</td>
                                        <td>{{ $guru->jenis_kelamin }}</td>
                                        <td>{{ $guru->status }}</td>
                                        <td>{{ $guru->jabatan }}</td>
                                        <td>{{ $guru->get_kelas->nama }}</td>
                                        <td>{{ $guru->poto }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('kelas.edit', $guru->id) }}" class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route('kelas.edit', $guru->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="far fa-eye"></i> View
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm"
                                                    onclick="if(confirm('Anda yakin ingin menghapus data ini?')) { event.preventDefault(); document.getElementById('delete-form-{{ $guru->id }}').submit(); }">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>
                                                <form id="delete-form-{{ $guru->id }}"
                                                    action="{{ route('kelas.destroy', $guru->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links() }}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
