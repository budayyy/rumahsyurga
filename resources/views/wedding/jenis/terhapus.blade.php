@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-8 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/wedding/jenis" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Jenis Wedding Organizer Terhapus
                </h3>
            </div>
            <div class="col-12 col-md-4 order-md-2 order-first">
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
                                <th>Jenis WO</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>MC</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MC</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MC</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MC</td>
                                <td class="text-danger">Dihapus</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MC</td>
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