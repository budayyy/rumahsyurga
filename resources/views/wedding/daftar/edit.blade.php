@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/wedding/daftar" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Edit Wedding Organizer
                </h3>
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
                    <form action="">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="nama">
                        </div>
                        <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label for="status" class="form-label fw-bold">Jenis WO</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Jenis WO</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                            </div>
                            <div class="col">
                              <label for="kapasitas" class="form-label fw-bold">Kapasitas</label>
                              <input type="text" class="form-control" placeholder="kapasitas">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="harga" class="form-label fw-bold">Harga Produk</label>
                                <input type="number" class="form-control" placeholder="Harga Produk">
                            </div>
                            <div class="col">
                                <label for="durasi" class="form-label fw-bold">Durasi</label>
                                <input type="number" class="form-control" placeholder="Durasi">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-bold">Alamat Lengkap</label>
                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold">Deskripsi Produk</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label fw-bold">Foto (minimal 2 foto)</label>
                            <input class="form-control" type="file" id="foto">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-orange fw-bold"><i class="bi bi-file-earmark-post"></i>  Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection