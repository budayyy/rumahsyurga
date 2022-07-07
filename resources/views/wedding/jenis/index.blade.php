@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Jenis Wedding Organizer</h3>
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
            <a href="" class="btn btn-orange fw-bold mx-2" data-bs-toggle="modal" data-bs-target="#tambah-jenis-wo">Tambah Jenis</a>

            <!-- Modal Tambah Jenis Wo-->
            <div class="modal fade" id="tambah-jenis-wo" tabindex="-1" aria-labelledby="tambahJenisWoLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="tambahJenisWoLabel">Tambah Jenis WO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="nama">
                            </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>


            <a href="/wedding/jenis-terhapus" class="btn btn-danger fw-bold">Daftar Hapus</a>
        </div>
    </section>

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
                                <td>Gratis</td>
                                <td class="text-success">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#edit-jenis-wo"><i class="bi bi-pencil-square"></i></a>

                                    <!-- Modal Tambah Jenis Wo-->
                                    <div class="modal fade" id="edit-jenis-wo" tabindex="-1" aria-labelledby="editJenisWoLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="editJenisWoLabel">Edit Jenis WO</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                @csrf
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama" placeholder="nama">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Status</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                          </select>
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus-jenis-wo"><i class="bi bi-trash"></i></a>

                                    <!-- Modal Hapus Jenis Wo-->
                                    <div class="modal fade" id="hapus-jenis-wo" tabindex="-1" aria-labelledby="hapusJenisWoLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="hapusJenisWoLabel">Hapus Jenis WO</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                @csrf
                                                <p>Apakah Anda Yakin akan menghapus jenis Wedding Organizer dengan nama "MC"?</p>
                                                
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
                                <td>Gratis</td>
                                <td class="text-success">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td class="text-success">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td class="text-success">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td class="text-success">Aktif</td>
                                <td>
                                    <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gratis</td>
                                <td class="text-success">Aktif</td>
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