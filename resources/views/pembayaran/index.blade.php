@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Pembayaran</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">

    <section class="row mb-3">
        <div class="col-12">
            <a href="" class="btn btn-orange fw-bold" data-bs-toggle="modal" data-bs-target="#tambah-pembayaran">Tambah Pembayaran</a>

            <!-- Modal Tambah Pembayaran -->
            <div class="modal fade" id="tambah-pembayaran" tabindex="-1" aria-labelledby="tambahPembayaranLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="tambahPembayaranLabel">Tambah Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                        @csrf
                            <div class="mb-3">
                                <label for="nomor" class="form-label fw-bold">Nomor Transaksi</label>
                                <input type="text" class="form-control" id="nomor" placeholder="Nomor Transaksi">
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label fw-bold">Total</label>
                                <input type="number" class="form-control" id="total" placeholder="Total">
                            </div>
                            <div class="mb-3">
                                <label for="jenis" class="form-label fw-bold">Jenis</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Jenis</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pengguna" class="form-label fw-bold">Pengguna</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pengguna</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="vendor" class="form-label fw-bold">Vendor</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Vendor</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label fw-bold">Status</label>
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

        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    {{-- pilihan --}}
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="belum-bayar-tab" data-bs-toggle="tab" data-bs-target="#belum-bayar" type="button" role="tab" aria-controls="belum-bayar" aria-selected="true">Belum Bayar</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="sudah-bayar-tab" data-bs-toggle="tab" data-bs-target="#sudah-bayar" type="button" role="tab" aria-controls="sudah-bayar" aria-selected="false">Sudah Bayar</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="bayar-vendor-tab" data-bs-toggle="tab" data-bs-target="#bayar-vendor" type="button" role="tab" aria-controls="bayar-vendor" aria-selected="false">Bayar ke Vendor</button>
                        </li>
                      </ul>
                      <div class="tab-content mt-2" id="myTabContent">
                        {{-- tabel belum bayar --}}
                        <div class="tab-pane fade show active" id="belum-bayar" role="tabpanel" aria-labelledby="belum-bayar-tab">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th>#</th>
                                        <th>Nomor Transaksi</th>
                                        <th>Total</th>
                                        <th>Jenis</th>
                                        <th>Pengguna</th>
                                        <th>Vendor</th>
                                        <th>Terakhir Bayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#edit-pembayaran"><i class="bi bi-pencil-square"></i></a>

                                            <!-- Modal Edit Pembayaran -->
                                            <div class="modal fade" id="edit-pembayaran" tabindex="-1" aria-labelledby="editPembayaranLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="editPembayaranLabel">Edit Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="">
                                                        @csrf
                                                            <div class="mb-3">
                                                                <label for="nomor" class="form-label fw-bold">Nomor Transaksi</label>
                                                                <input type="text" class="form-control" id="nomor" placeholder="Nomor Transaksi">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="total" class="form-label fw-bold">Total</label>
                                                                <input type="number" class="form-control" id="total" placeholder="Total">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jenis" class="form-label fw-bold">Jenis</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Jenis</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="pengguna" class="form-label fw-bold">Pengguna</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Pengguna</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="vendor" class="form-label fw-bold">Vendor</label>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Vendor</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="status" class="form-label fw-bold">Status</label>
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


                                            <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus-pembayaran"><i class="bi bi-trash"></i></a>

                                            <!-- Modal Hapus Pembayaran -->
                                            <div class="modal fade" id="hapus-pembayaran" tabindex="-1" aria-labelledby="hapusPembayaranLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusPembayaranLabel">Hapus Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="">
                                                        @csrf
                                                            <p>Apakah anda yakin akan menghapus pembayaran dengan nomor transaksi "Nomor Transaksi"..?</p>
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
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- tabel sudah bayar --}}
                        <div class="tab-pane fade" id="sudah-bayar" role="tabpanel" aria-labelledby="sudah-bayar-tab">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="table-success">
                                        <th>#</th>
                                        <th>Nomor Transaksi</th>
                                        <th>Total</th>
                                        <th>Jenis</th>
                                        <th>Pengguna</th>
                                        <th>Vendor</th>
                                        <th>Terakhir Bayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="badge bg-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- tabel bayar ke vendor --}}
                        <div class="tab-pane fade" id="bayar-vendor" role="tabpanel" aria-labelledby="bayar-vendor-tab">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="table-dark">
                                        <th>#</th>
                                        <th>Nomor Transaksi</th>
                                        <th>Total</th>
                                        <th>Jenis</th>
                                        <th>Pengguna</th>
                                        <th>Vendor</th>
                                        <th>Terakhir Bayar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                           <a href="#" class="badge bg-success fw-bold">Konfirmasi</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="#" class="badge bg-success fw-bold">Konfirmasi</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="#" class="badge bg-success fw-bold">Konfirmasi</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="#" class="badge bg-success fw-bold">Konfirmasi</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>TRX209/134/01</td>
                                        <td>Rp.5.000.000,-</td>
                                        <td>Wedding Organizer</td>
                                        <td>Sisca</td>
                                        <td>Florish Makeup</td>
                                        <td>14 April 2022, 08.00 PM</td>
                                        <td>
                                            <a href="#" class="badge bg-success fw-bold">Konfirmasi</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                      {{-- /akhir pilihan --}}
                </div>
                {{-- akhir card-body --}}
            </div>
        </div>
    </section>

</div>
@endsection