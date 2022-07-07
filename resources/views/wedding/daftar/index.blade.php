@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Wedding Organizer</h3>
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
        <div class="col-12">
            <a href="/wedding/daftar/create" class="btn btn-orange fw-bold mx-2">Tambah WO</a>
            <a href="/wedding/daftar-terhapus" class="btn btn-danger fw-bold">Daftar Dihapus</a>
        </div>
    </section>

    <section class="row">  
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Nama Vendor</th>
                                <th>Kota</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Swissbel-hotel</td>
                                <td>Siwss-belhotel</td>
                                <td>Bandung</td>
                                <td class="text-success fw-bold">Aktif</td>
                                <td>
                                    <a href="/wedding/daftar/1" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                                    <a href="/wedding/daftar/1/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus-wo"><i class="bi bi-trash"></i></a>

                                    <!-- Modal Hapus Wo-->
                                    <div class="modal fade" id="hapus-wo" tabindex="-1" aria-labelledby="hapusWoLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="hapusWoLabel">Hapus WO</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                @csrf
                                                <p>Apakah anda yakin akan menghapus wedding organizer dengan nama produk "nama produk"?</p>
                                                
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                            <button type="button" class="btn btn-primary">Ya</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Swissbel-hotel</td>
                                <td>Siwss-belhotel</td>
                                <td>Bandung</td>
                                <td class="text-success fw-bold">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Swissbel-hotel</td>
                                <td>Siwss-belhotel</td>
                                <td>Bandung</td>
                                <td class="text-success fw-bold">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Swissbel-hotel</td>
                                <td>Siwss-belhotel</td>
                                <td>Bandung</td>
                                <td class="text-success fw-bold">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Swissbel-hotel</td>
                                <td>Siwss-belhotel</td>
                                <td>Bandung</td>
                                <td class="text-success fw-bold">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-primary"><i class="bi bi-eye"></i></a>
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