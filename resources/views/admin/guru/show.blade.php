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
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 rounded-circle" style="width: 35rem;"
                                    src="/images/guru_sekolah/{{ $data->poto }}" alt="logo {{ $data->poto }}">
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
                                            <b> NAMA :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> KELAS :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> NIP :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> STATUS :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> JABATAN :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b>BERGABUNG :</b> Roby
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
                                            <b> AGAMA :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> JENIS KELAMIN :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> UMUR :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> ALAMAT :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> PENGALAMAN :</b> Roby
                                        </h5>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <h5>
                                            <b> TELPON :</b> Roby
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
