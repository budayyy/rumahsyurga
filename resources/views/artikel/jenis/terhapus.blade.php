@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/artikel/jenis" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Daftar Jenis Artikel Dihapus
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
    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>#</th>
                                <th>Jenis Artikel</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td>Berisi artikel yang gratis</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#edit-jenis-artikel"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus-jenis-artikel"><i class="bi bi-trash"></i></a>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td>Berisi artikel yang gratis</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td>Berisi artikel yang gratis</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td>Berisi artikel yang gratis</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td>Berisi artikel yang gratis</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td>Berisi artikel yang gratis</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
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