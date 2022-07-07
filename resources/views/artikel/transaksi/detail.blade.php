@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/artikel/transaksi" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Detail Transaksi Artikel
                </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">

    <section class="row mb-3">
        <div class="col-3">
            <a href="/artikel/transaksi/invoice" class="btn btn-success fw-bold">Lihat Invoice</a>
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
                                    <h6>Judul Artikel</h6>
                                    <p>Judul Artikel</p>
                                </tr>
                                <tr>
                                    <h6>Jenis Artikel</h6>
                                    <p>Pra Nikah</p>
                                </tr>
                                <tr>
                                    <h6>Pengarang</h6>
                                    <p>Nama Pengarang</p>
                                </tr>
                                <tr>
                                    <h6>Penerbit</h6>
                                    <p>Nama Penerbit</p>
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
                                    <p class="text-danger fw-bold">Rp.95.000,-</p>
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