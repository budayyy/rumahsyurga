@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/wedding/transaksi" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Invoice Wedding
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

    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-12 d-flex justify-content-between">
                            <img src="{{ asset('img/logo.png') }}" alt="logo.png" style="width: 10em">
                            <h4>TRX209/134/01</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <tr>
                                <td>
                                <b class="fw-bold">DITERBITKAN ATAS NAMA</b> <br>
                                Nama Vendor <br>
                                Alamat Vendor
                                087666555444
                                </td>
                            </tr>
                        </div>
                        <div class="col-sm-6">
                            <tr>
                                <td>
                                <b class="fw-bold">UNTUK</b> <br>
                                Sisca Martina <br>
                                08965455444
                                </td>
                            </tr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Nomor Transaksi</th>
                                    <th>Waktu Transaksi</th>
                                    <th>Tipe Pembayaran</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                                <tr>
                                    <td>TRX209/134/01</td>
                                    <td>15 April 2022, 09.00</td>
                                    <td>Tunai</td>
                                    <td class="text-success fw-bold">Sudah Bayar</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped">
                                <tr>
                                    <th>PRODUK</th>
                                    <th>TANGGAL ACARA</th>
                                    <th>HARGA</th>
                                    <th>TOTAL</th>
                                </tr>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>15 Juni 2022, 08.00 - 13.00</td>
                                    <th>Rp.15.000.000,-</th>
                                    <th>Rp.15.000.000,-</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-4">
                            <table class="table table-borderless">
                                <tr>
                                    <th>SUB TOTAL</th>
                                    <td>Rp.15.000.000,-</td>
                                  </tr>
                                  <tr>
                                      <th>DISKON</th>
                                      <td>Rp. 0,-</td>
                                  </tr>
                                  <tr>
                                    <th>TOTAL BAYAR</th>
                                    <td>Rp.15.000.000,-</td>
                                  </tr>
                            </table>
                            <hr>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-lg-2 d-grid">
                            <a href="#" class="btn btn-success fw-bold">Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection