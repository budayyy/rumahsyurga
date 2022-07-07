@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Transaksi Wedding Organizer</h3>
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
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>#</th>
                                <th>Nomor Transaksi</th>
                                <th>Total Bayar</th>
                                <th>Tanggal Transaksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>Rp.95.000,-</td>
                                <td>14 April 2022 08.30 PM</td>
                                <td>
                                    <a href="/wedding/transaksi/detail" class="badge bg-primary"><i class="bi bi-eye"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>Rp.95.000,-</td>
                                <td>14 April 2022 08.30 PM</td>
                                <td>
                                    <a href="/" class="badge bg-primary"><i class="bi bi-eye"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>Rp.95.000,-</td>
                                <td>14 April 2022 08.30 PM</td>
                                <td>
                                    <a href="/" class="badge bg-primary"><i class="bi bi-eye"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>Rp.95.000,-</td>
                                <td>14 April 2022 08.30 PM</td>
                                <td>
                                    <a href="/" class="badge bg-primary"><i class="bi bi-eye"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>Rp.95.000,-</td>
                                <td>14 April 2022 08.30 PM</td>
                                <td>
                                    <a href="/" class="badge bg-primary"><i class="bi bi-eye"></i> Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>TRX209/134/01</td>
                                <td>Rp.95.000,-</td>
                                <td>14 April 2022 08.30 PM</td>
                                <td>
                                    <a href="/" class="badge bg-primary"><i class="bi bi-eye"></i> Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection