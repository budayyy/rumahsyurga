@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Laporan Artikel</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan</li>
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
                {{-- Transaksi Artikel --}}
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
                                    <h6 class="text-muted font-semibold">Total Transaksi</h6>
                                    <h6 class="font-extrabold mb-0">100</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Transkasi WO --}}
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
                                    <h6 class="text-muted font-semibold">Pendapatan</h6>
                                    <h6 class="font-extrabold mb-0">100</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Transaksi Training --}}
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
                                    <h6 class="text-muted font-semibold">Transaksi Tertinggi</h6>
                                    <h6 class="font-extrabold mb-0">100</h6>
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
                   Grafik Laporan
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
                        <b>Daftar Transaksi</b>
                    </div>
                    <div>
                        <a href="#" class="text-success d-flex align-items-center">
                            Lihat Semua Transaksi
                            <i class="bi bi-chevron-right "></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>#</th>
                                <th>Nomor Transaksi</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Tanggal Transaksi</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>1</td>
                                <td>Rp.95.0000,-</td>
                                <td>14 April 2022 08.00 PM</td>
                                <td>Rp.95.000,-</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>1</td>
                                <td>Rp.95.0000,-</td>
                                <td>14 April 2022 08.00 PM</td>
                                <td>Rp.95.000,-</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>1</td>
                                <td>Rp.95.0000,-</td>
                                <td>14 April 2022 08.00 PM</td>
                                <td>Rp.95.000,-</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>1</td>
                                <td>Rp.95.0000,-</td>
                                <td>14 April 2022 08.00 PM</td>
                                <td>Rp.95.000,-</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>1</td>
                                <td>Rp.95.0000,-</td>
                                <td>14 April 2022 08.00 PM</td>
                                <td>Rp.95.000,-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection