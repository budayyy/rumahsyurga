@extends('layouts.main')

@section('content')

<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last ">
                <h3>Setting</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Setting</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">
    <section class="row">  
        <div class="col-lg-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active fw-bold text-start mt-3" id="v-pills-profil-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profil" type="button" role="tab" aria-controls="v-pills-profil" aria-selected="true"><i class="fa-solid fa-user me-2"></i>Profile</button>
                <button class="nav-link fw-bold text-start mt-3" id="v-pills-diri-tab" data-bs-toggle="pill" data-bs-target="#v-pills-diri" type="button" role="tab" aria-controls="v-pills-diri" aria-selected="false"><i class="fa-solid fa-user-shield me-2"></i>Data Pribadi</button>
                <button class="nav-link fw-bold text-start my-3" id="v-pills-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password" type="button" role="tab" aria-controls="v-pills-password" aria-selected="false"><i class="fa-solid fa-key me-2"></i>Ubah Password</button>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card border">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-profil" role="tabpanel" aria-labelledby="v-pills-profil-tab">
                            <h5>Data Pengguna</h5>
                            <hr>
                            <form action="">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <label for="foto" class="form-label fw-bold">Foto Profil</label>
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                <img src="{{ asset('img/buday.jpg') }}" class="img-fluid rounded" alt="Budi Setiawan">
                                                </div>
                                                <div class="col-md-8">
                                                <div class="card-body">
                                                    <p class="image_upload">
                                                        <label for="userImage">
                                                            <a class="btn btn-primary fw-bold">Pilih Foto</a>
                                                        </label>
                                                        <input type="file" name="userImage" id="userImage">
                                                    </p>
                                                    <p class="card-text">Gambar profil anda sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" placeholder="Budi Setiawan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label fw-bold">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="budiajah">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label fw-bold">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="bsetiawan260@gmail.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tentang" class="form-label fw-bold">Tentang Saya</label>
                                            <textarea name="tentang" class="form-control" placeholder="ini adalah tentang saya silahkan dibaca"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-diri" role="tabpanel" aria-labelledby="v-pills-diri-tab">
                            <h5>Data Pribadi</h5>
                            <hr>
                            <form action="">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="mb-3">
                                            <label for="no_hp" class="form-label fw-bold">No.HP</label>
                                            <input type="number" class="form-control" id="no_hp" placeholder="087829890388">
                                        </div>
                                        <div class="mb-3">
                                            <label for="domisili" class="form-label fw-bold">Kota Domisili</label>
                                            <input type="text" class="form-control" id="domisili" placeholder="Kabupaten Cirebon">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_lahir" class="form-label fw-bold">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" placeholder="Kabupaten Cirebon">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="date" class="form-label fw-bold">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="date">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label fw-bold">Jenis Kelamin</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                          Laki - Laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                          Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pendidikan" class="form-label fw-bold">Pendidikan Terakhir</label>
                                            <input type="text" class="form-control" id="pendidikan" placeholder="S1 Teknik Informatika">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                            <h5>Ubah Password</h5>
                            <hr>
                            <form action="">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="mb-3">
                                            <label for="passwordLama" class="form-label fw-bold">Password Lama</label>
                                            <input type="text" class="form-control" id="passwordLama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password1" class="form-label fw-bold">Password Baru</label>
                                            <input type="password" class="form-control" id="password1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password2" class="form-label fw-bold">Konfirmasi Password Baru</label>
                                            <input type="password2" class="form-control" id="password2">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection