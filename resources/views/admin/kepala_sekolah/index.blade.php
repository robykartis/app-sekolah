@extends('master.layouts')
@section('title')
    Index | Kepala Sekolah
@endsection
@section('breadcrumbs')
    Profil APP
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
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kepala Sekolah</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>NIP</th>
                                    <th>Umur</th>
                                    <th>Poto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $dt)
                                    <tr>
                                        <td>{{ $dt->nama }}</td>
                                        <td>{{ $dt->jenis_kelamin }}</td>
                                        <td>{{ $dt->nip }}</td>
                                        <td>{{ $dt->umur }}</td>
                                        <td>
                                            <img src="/images/kepala_sekolah/{{ $dt->poto }}"
                                                alt="logo {{ $dt->poto }}" width="100">
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('kepala_sekolah.edit', $dt->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i> Edit
                                                </a>
                                                <a href="" class="btn btn-warning btn-sm">
                                                    <i class="far fa-eye"></i> View
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
