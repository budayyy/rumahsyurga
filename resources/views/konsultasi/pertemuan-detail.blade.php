@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/konsultasi-pertemuan" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a> Detail Pertemuan
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
    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <table class="table table-borderless">
                            <tr>
                                <h6>Nomor Transaksi</h6>
                                <p>TRX209/13401</p>
                            </tr>
                            <tr>
                                <h6>Tanggal & Waktu Konsultasi</h6>
                                <p>18 April 2022, 09.00 - 10.00 WIB</p>
                            </tr>
                            <tr>
                                <h6>Jenis Konsultasi</h6>
                                <p>Pra Nikah</p>
                            </tr>
                            <tr>
                                <h6>Tempat Konsultasi</h6>
                                <p>Sekolah Cinta</p>
                            </tr>
                            <tr>
                                <h6>Alamat Konsultasi</h6>
                                <p>Jalan Perjuangan No.40 Bandung</p>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection