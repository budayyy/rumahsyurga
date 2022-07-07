@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Dashboard Admin Sistem</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
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
                                    <h6 class="text-muted font-semibold">Total Admin</h6>
                                    <h6 class="font-extrabold mb-0">{{ $totaladmin }}</h6>
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
                    Grafik Admin Sistem
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
                        <b>Terakhir Aktif</b>
                    </div>
                    <div>
                        <a href="/admin-daftar" class="text-success d-flex align-items-center">
                            Lihat Semua Admin
                            <i class="bi bi-chevron-right "></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if ( count($admin) > 0 )
                    <table class="table table-striped " id="table1">
                        <thead>
                            <tr class="text-success text-center">
                                <th>Nama Pengguna</th>
                                <th>Username</th>
                                <th>Role Admin</th>
                                <th>Terakhir Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $row)
                                <tr>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->username }}</td>
                                    <td>Role Admin</td>
                                    <td>{{ $row->date_created }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <hr>
                    <div class="text-center">
                        <img src="{{ asset('img/ic_no_data_pc.png') }}" alt="no data available" style="width: 50%">
                    </div> 
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@endsection