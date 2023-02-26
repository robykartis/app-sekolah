@extends('master.layouts')
@section('title')
    Index | Kelas
@endsection
@section('breadcrumbs')
    Kelas
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
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
                    <div class="ml-auto">
                        <a href="{{ route('kelas.create') }}" class="btn btn-success btn-sm" title="Tambah Kelas">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="py-3 d-flex">
                            <form method="GET" action="{{ route('kelas.index') }}"
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
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th style="width: 25%">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = ($data->currentPage() - 1) * $data->perPage() + 1;
                                @endphp
                                @foreach ($data as $dt)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $dt->nama }}</td>
                                        <td>{{ $dt->keterangan }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('kelas.edit', $dt->id) }}" class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i> Edit
                                                </a>

                                                <a href="#" class="btn btn-danger btn-sm"
                                                    onclick="if(confirm('Anda yakin ingin menghapus data ini?')) { event.preventDefault(); document.getElementById('delete-form-{{ $dt->id }}').submit(); }">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>
                                                <form id="delete-form-{{ $dt->id }}"
                                                    action="{{ route('kelas.destroy', $dt->id) }}" method="POST"
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
