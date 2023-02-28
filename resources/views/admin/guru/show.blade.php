@extends('master.layouts')
@section('title')
    Detail | Guru
@endsection
@section('breadcrumbs')
    Guru | Detail
@endsection
@section('content')
    <!-- Content Row -->

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mb-4 col-md-6 mx-auto my-2">
                    <!-- Approach -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Data</h6>
                        </div>
                        <div class="card-body">

                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 rounded-circle" style="width: 30rem;"
                                    src="/images/guru_sekolah/{{ $data->poto }}" alt="poto {{ $data->poto }}">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center">
                                        <h1>
                                            <b>Info Pegawai </b>
                                        </h1>
                                    </div>
                                    <div class="text-center">
                                        <h5>
                                            <b> NAMA :</b> {{ $data->nama }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> KELAS :</b> {{ $data->get_kelas->nama_kelas }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> NIP :</b> {{ $data->nip }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> STATUS :</b> {{ $data->get_status->nama_status }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> JABATAN :</b> {{ $data->get_jabatan->nama_jabatan }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b>BERGABUNG :</b>
                                            {{ \Carbon\Carbon::parse($data->date)->locale('id')->isoFormat(' D MMMM Y') }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <h1>
                                            <b>Info Diri </b>
                                        </h1>
                                    </div>
                                    <div class="text-center">
                                        <h5>
                                            <b> AGAMA :</b> {{ $data->get_agama->nama_agama }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> JENIS KELAMIN :</b> {{ $data->get_kelamin->nama_kelamin }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> UMUR :</b> {{ $data->umur }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> ALAMAT :</b> {{ $data->alamat }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> PENGALAMAN :</b> {{ $data->pengalaman }}
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> TELPON :</b> {{ $data->telpon }}
                                        </h5>
                                    </div>

                                </div>
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
        </div>
    </div>
@endsection
