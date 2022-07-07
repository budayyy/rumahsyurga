
@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Kota</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
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
                <div class="card-header d-flex justify-content-end">
                    <div class="h5 text-success">
                        <a href="" class="btn btn-orange fw-bold">Tambah kota</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success text-center">
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>Kota</th>
                                <th>Create at</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jawa Barat</td>
                                <td>Cirebon</td>
                                <td>2022-10-20</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="fa-solid fa-trash"></i></a>
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