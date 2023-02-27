@extends('master.layouts')
@section('title')
    Index | Agama
@endsection
@section('breadcrumbs')
    Agama
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
                    <h6 class="m-0 font-weight-bold text-primary">Data Agama Pegawai</h6>
                    <div class="ml-auto">
                        <a href="{{ route('agama_pegawai.create') }}" class="btn btn-success btn-sm" title="Tambah Data">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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
                                                <a href="{{ route('agama_pegawai.edit', $dt->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="far fa-edit"></i> Edit
                                                </a>

                                                <a href="#" class="btn btn-danger btn-sm"
                                                    onclick="if(confirm('Anda yakin ingin menghapus data ini?')) { event.preventDefault(); document.getElementById('delete-form-{{ $dt->id }}').submit(); }">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>
                                                <form id="delete-form-{{ $dt->id }}"
                                                    action="{{ route('agama_pegawai.destroy', $dt->id) }}" method="POST"
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
                <div class="card-footer">
                    <div class="d-sm-flex align-items-center justify-content-between pt-3">
                        <a href="{{ route('guru.index') }}" class="btn btn-warning">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
