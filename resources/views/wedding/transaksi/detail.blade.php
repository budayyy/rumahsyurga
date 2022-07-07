@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/wedding/transaksi" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Detail Transaksi Wedding
                </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wedding</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">

    <section class="row mb-3">
        <div class="col-3">
            <a href="/wedding/transaksi/invoice" class="btn btn-success fw-bold">Lihat Invoice</a>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table table-borderless">
                                <tr>
                                    <h6>Nomor Transaksi</h6>
                                    <p>TRX209/13401</p>
                                </tr>
                                <tr>
                                    <h6>Nama Produk</h6>
                                    <p>Nama Produk</p>
                                </tr>
                                <tr>
                                    <h6>Nama Vendor</h6>
                                    <p>Nama Vendor</p>
                                </tr>
                                <tr>
                                    <h6>Jenis Vendor</h6>
                                    <p>Gedung</p>
                                </tr>
                                <tr>
                                    <h6>Kapasitas</h6>
                                    <p>200 Pax</p>
                                </tr>
                                <tr>
                                    <h6>Tanggal Acara</h6>
                                    <p>15 juni 2022, 08.00 - 13.00</p>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-borderless">
                                <tr>
                                    <h6>Nama Pengguna</h6>
                                    <p>Sisca Martina</p>
                                </tr>
                                <tr>
                                    <h6>Total Pembayaran</h6>
                                    <p class="text-danger fw-bold">Rp.15.000.000,-</p>
                                </tr>
                                <tr>
                                    <h6>Waktu Transaksi</h6>
                                    <p>15 April 2022, 09.00</p>
                                </tr>
                                <tr>
                                    <h6>Status Pembayaran</h6>
                                    <p class="text-success fw-bold">Sudah Bayar</p>
                                </tr>
                                <tr>
                                    <h6>Tipe Pembayaran</h6>
                                    <p>Transfer Bank</p>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection