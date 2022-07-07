@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="/wedding/daftar" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                    Detail Wedding Organizer
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

    <section class="row mb-3">
        <div class="col">
            <a href="#" class="btn btn-orange fw-bold mx-3">Edit WO</a>
            <a href="#" class="btn btn-danger fw-bold">Hapus WO</a>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="card mb-0">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../../img/reza.jpg" class="img-fluid rounded h-100" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="float-start text-reset">Budi Setiawan</h2>
                                    <button type="button" class="btn btn-success float-end fw-bold" disabled>Aktif</button>

                                    {{-- Data tabel kanan --}}
                                    <table class="table table-borderless">
                                        <tr>
                                            <td>Nama Vendor</td>
                                            <td>: Swiss-belhotel</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>: Swissbel-arian@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Telepon</td>
                                            <td>: 087666554443</td>
                                        </tr>
                                        <tr>
                                            <td>Kota</td>
                                            <td>: Bandung</td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas</td>
                                            <td>: 200 Pax</td>
                                        </tr>
                                        <tr>
                                            <td>Durasi</td>
                                            <td>: 5 jam</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Lengkap</td>
                                            <td>: Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore, excepturi aperiam ea in sed non eligendi iure quibusdam omnis!</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="text-muted">Deskripsi Produk</h3>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, qui! Amet omnis iste cumque vero reiciendis veritatis asperiores ad explicabo quibusdam maiores autem, ipsum ut dignissimos laudantium! Explicabo id odio autem temporibus quos placeat accusantium veniam. Hic dolor eos ab aperiam dolores, saepe numquam eius vero dicta veniam laborum reprehenderit voluptates ducimus doloremque modi quia eaque. Accusamus, officia eveniet! Numquam amet labore est voluptate aspernatur minus iusto omnis culpa eos, doloremque nulla, debitis nihil. Alias commodi iste aperiam accusamus quia. Voluptatum facilis cum corrupti, mollitia eius id tempore? Natus, veritatis. Voluptates blanditiis quia qui sint deserunt natus id et numquam similique possimus, ab nemo ea est sunt saepe rem modi eum. Fuga excepturi illo, repellendus nam quam optio pariatur ipsum, eveniet in, possimus temporibus doloremque animi perferendis maxime eos. Totam in asperiores recusandae vel. Laborum quod eligendi laboriosam nesciunt sapiente soluta iure culpa, laudantium, quis, omnis enim sunt rerum incidunt voluptatibus expedita error eveniet deleniti ratione nulla? Dicta veniam fugit quisquam reiciendis, autem placeat libero cum numquam distinctio ab saepe eligendi tempora aliquid ea rerum voluptate molestiae atque at fuga, repellendus qui molestias enim ipsa. Sed, minima sunt quasi beatae saepe commodi ullam eligendi necessitatibus unde eius earum ex provident?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection