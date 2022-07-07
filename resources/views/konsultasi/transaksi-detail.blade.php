@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/konsultasi-transaksi" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Detail Transaksi Konsultasi
                </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">

    <section class="row mb-3">
        <div class="col-3">
            <button type="button" class="btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#invoice-konsultasi">Lihat invoice</button>

            <!-- Modal -->
            <div class="modal fade" id="invoice-konsultasi" tabindex="-1" aria-labelledby="invoiceKonsultasiLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="invoiceKonsultasiLabel">Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
                                    {{ $data->nama_tempat }} <br>
                                    {{ $data->alamat }}
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
                                        <td>{{ $data->konsul_create }}</td>
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
                                        <th>DURASI</th>
                                        <th>TANGGAL KONSULTASI</th>
                                        <th>HARGA</th>
                                        <th>TOTAL</th>
                                    </tr>
                                    <tr>
                                        <td>Konsultasi {{ $data->jenis }}</td>
                                        <td>1 Jam</td>
                                        <th>18 April 2022</th>
                                        <th>{{ $data->harga }}</th>
                                        <th>{{ $data->harga }}</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-4">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>SUB TOTAL</th>
                                        <td>{{ $data->harga }}</td>
                                      </tr>
                                      <tr>
                                          <th>DISKON</th>
                                          <td>Rp. 0,-</td>
                                      </tr>
                                      <tr>
                                        <th>TOTAL BAYAR</th>
                                        <td>Rp. 95.000,-</td>
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
            </div>

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
                                    <h6>Nama Konsultan</h6>
                                    <p>{{ $data->nama_konsultan }}</p>
                                </tr>
                                <tr>
                                    <h6>Tanggal & Waktu Konsultasi</h6>
                                    <p>{{ $data->konsul_create }}</p>
                                </tr>
                                <tr>
                                    <h6>Jenis Konsultasi</h6>
                                    <p>{{ $data->jenis }}</p>
                                </tr>
                                <tr>
                                    <h6>Tempat Konsultasi</h6>
                                    <p>{{ $data->nama_tempat }}</p>
                                </tr>
                                <tr>
                                    <h6>Alamat Konsultasi</h6>
                                    <p>{{ $data->alamat }}</p>
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
                                    <p>Tunai</p>
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