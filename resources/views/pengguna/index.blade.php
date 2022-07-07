@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Dashboard Pengguna</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">

    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card border">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Pengguna</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totalpengguna }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card border">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Ditangguhkan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $ditangguhkan }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card border">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Dihapus</h6>
                                    <h6 class="font-extrabold mb-0">{{ $dihapus }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-header text-center h4 text-success">
                    Grafik Pengguna
                </div>
                <div class="card-body">
                    <canvas id="bar"></canvas>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-header d-flex justify-content-between">
                    <div class="h4 text-success">
                        <b>Terakhir Daftar</b>
                    </div>
                    <div class="">
                        <a href="/pengguna/daftar" class="text-success d-flex align-items-center">
                            Lihat Semua
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (count($pengguna) > 0 )
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>Nama Pengguna</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Tanggal Daftar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pengguna as $row)
                            <tr>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->no_telp }}</td>
                                <td>{{ $row->user_create }}</td>
                                <td>
                                    @if ($row->status_user === 1 )
                                        <span class="badge bg-success fw-bold">Active</span> 
                                    @elseif ($row->status_user === 2)
                                        <span class="badge bg-warning fw-bold">Ditangguhkan</span>
                                    @else
                                        <span class="badge bg-danger fw-bold">Dihapus</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                    <hr>
                    <div class="text-center">
                        <img src="{{ asset('img/ic_no_data_pc.png') }}" alt="" style="width: 50%">
                    </div>  
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection