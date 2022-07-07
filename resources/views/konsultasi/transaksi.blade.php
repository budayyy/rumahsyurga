@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Transaksi Konsultasi</h3>
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
                    @if (count($transaksi)>0)
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>#</th>
                                <th>Nomor Transaksi</th>
                                <th>Jumlah</th>
                                <th>Konsultan</th>
                                <th>Pengguna</th>
                                <th>Tanggal Transaksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>nomor transaksi</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->nama_konsultan }}</td>
                                    <td>nama pengguna</td>
                                    <td>{{ $item->konsul_create }}</td>
                                    <td>
                                        <a href="/konsultasi-detail/{{ $item->konsul_id }}" class="badge bg-primary"><i class="bi bi-eye"></i> Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
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