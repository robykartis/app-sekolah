@extends('master.layouts')
@section('breadcrumbs')
    Dashboard
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Guru</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guru }} Guru</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Kelas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kelas }} Kelas</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mata Pelajaran
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Murid</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>No</b></th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Jabatan</th>
                                    <th>Umur</th>
                                    <th>Telpon</th>
                                    <th>Poto</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = ($data_guru->currentPage() - 1) * $data_guru->perPage() + 1;
                                @endphp
                                @foreach ($data_guru as $d_guru)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $d_guru->nama }}</td>
                                        <td>{{ $d_guru->get_status->nama_status }}</td>
                                        <td>{{ $d_guru->get_jabatan->nama_jabatan }}</td>
                                        <td>{{ $d_guru->umur }}</td>
                                        <td>{{ $d_guru->telpon }}</td>
                                        <td>
                                            <img src="/images/guru_sekolah/{{ $d_guru->poto }}"
                                                alt="poto {{ $d_guru->poto }}" width="100">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data_guru->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><b>No</b></th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = ($data_kelas->currentPage() - 1) * $data_kelas->perPage() + 1;
                                @endphp
                                @foreach ($data_kelas as $d_kelas)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $d_kelas->nama }}</td>
                                        <td>{{ $d_kelas->keterangan }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data_kelas->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
