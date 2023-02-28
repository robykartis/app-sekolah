@extends('master.layouts')
@section('title')
    Index | Setting APP
@endsection
@section('breadcrumbs')
    Setting APP
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
                    <h6 class="m-0 font-weight-bold text-primary">Data APP</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telpon</th>
                                    <th style="width: 25%">Alamat</th>
                                    <th style="width: 15%">Logo</th>
                                    <th style="width: 15%">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $dt)
                                    <tr>
                                        <td>{{ $dt->nama_app }}</td>
                                        <td>{{ $dt->email_app }}</td>
                                        <td>{{ $dt->telpon_app }}</td>
                                        <td>
                                            {{ $dt->alamat_app }}
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <img src="/logo_app/{{ $dt->logo_app }}" alt="logo {{ $dt->nama_app }}"
                                                    width="30%">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('setting_app.edit', $dt->id) }}"
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
