@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/training/daftar" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Input Training
                </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Training</li>
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
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama Training</label>
                            <input type="text" class="form-control" id="nama" placeholder="nama">
                        </div>
                        <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label for="jenis" class="form-label fw-bold">Jenis Training</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Jenis Training</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                  <label for="kategori" class="form-label fw-bold">Kategori</label>
                                  <select class="form-select" aria-label="Default select example">
                                      <option selected>Kategori</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                </div>
                              </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="date" class="form-label fw-bold">Tanggal Acara</label>
                                <input type="date" class="form-control" placeholder="Tanggal Acara">
                            </div>
                            <div class="col">
                                <label for="durasi" class="form-label fw-bold">Durasi</label>
                                <input type="text" class="form-control" placeholder="Durasi">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="alamat" class="form-label fw-bold">Alamat Lengkap</label>
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                            </div>
                            <div class="col">
                                <label for="deskripsi" class="form-label fw-bold">Deskripsi Training</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label fw-bold">Harga</label>
                            <input type="number" class="form-control" id="harga" placeholder="Harga">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label fw-bold">Foto (minimal 2 foto)</label>
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-row">
                                    <p class="image_upload mx-3">
                                        <label for="userImage">
                                            <a class="btn btn-secondary btn-lg fw-bold"><i class="fas bi-plus"></i></a>
                                        </label>
                                        <input type="file" name="userImage" id="userImage">
                                    </p>
                                    <p class="image_upload mx-3">
                                        <label for="userImage">
                                            <a class="btn btn-secondary btn-lg fw-bold"><i class="fas bi-plus"></i></a>
                                        </label>
                                        <input type="file" name="userImage" id="userImage">
                                    </p>
                                    <p class="image_upload mx-3">
                                        <label for="userImage">
                                            <a class="btn btn-secondary btn-lg fw-bold"><i class="fas bi-plus"></i></a>
                                        </label>
                                        <input type="file" name="userImage" id="userImage">
                                    </p>
                                    <p class="image_upload mx-3">
                                        <label for="userImage">
                                            <a class="btn btn-secondary btn-lg fw-bold"><i class="fas bi-plus"></i></a>
                                        </label>
                                        <input type="file" name="userImage" id="userImage">
                                    </p>
                                </div>
                            </div>
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