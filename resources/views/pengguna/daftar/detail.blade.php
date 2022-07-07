{{-- @dd($detail) --}}
@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="{{ url()->previous() }}" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                     Detail Pengguna
                </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard" class="text-success">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">
    <section class="row">
        <div class="col-6">

            <a href="/pengguna/daftar/{{ $detail->user_id }}/edit" class="btn btn-warning fw-bold"><i class="bi bi-pencil-square"></i> Edit Pengguna</a>

            <a href="" class="btn btn-danger fw-bold" data-bs-toggle="modal" data-bs-target="#hapus-pengguna-detail"><i class="bi bi-trash"></i> Hapus Pengguna</a>

            <!-- Modal -->
            <div class="modal fade" id="hapus-pengguna-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/pengguna/daftar/{{ $detail->user_id }}" method="post">
                        @csrf
                        @method('delete')
                            <p>Apakah anda yakin ingin menghapus pengguna dengan nama <b>{{ $detail->nama }}</b> ..? </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </section>
    <section class="row mt-3">
        <div class="col-12">
            <div class="card border">
                    <div class="card-body">
                        <div class="row mb-0">
                            <div class="card mb-0">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../../img/{{ $detail->foto }}" class="img-fluid rounded" alt="{{ $detail->nama }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h2 class="float-start text-success">{{ $detail->nama }}</h2>
                                        @if ( $detail->status_user === 0 )
                                            <button type="button" class="btn btn-danger float-end fw-bold" disabled>Dihapus</button>
                                        @elseif( $detail->status_user === 1 )
                                            <button type="button" class="btn btn-success float-end fw-bold" disabled>Aktif</button>
                                        @else
                                            <button type="button" class="btn btn-warning float-end fw-bold" disabled>Ditangguhkan</button>
                                        @endif

                                        {{-- Data tabel kanan --}}
                                        <table class="table table-borderless">
                                            <tr>
                                                <td>Umur</td>
                                                <td>: {{ $umur }} Tahun</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tanggal Lahir</td>
                                                <td>: {{ $detail->kota }} , {{ date('d-m-Y', strtotime($detail->tgl_lahir)) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>: {{ $detail->jenis_kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: {{ $detail->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Telepon</td>
                                                <td>: {{ $detail->no_telp }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan</td>
                                                <td>: {{ $detail->pekerjaan }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        {{-- ./batas row --}}
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Pendidikan</td>
                                        <td> : {{ $detail->pendidikan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Tentang</td>
                                        <td>: {{ $detail->bio }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Lengkap</td>
                                        <td>: {{ $detail->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Hobi</td>
                                        <td>: {{ $detail->hobi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Institusi</td>
                                        <td>: {{ $detail->nama_institusi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Perusahaan</td>
                                        <td>: {{ $detail->nama_perusahaan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Pernikahan</td>
                                        <td>: {{ $detail->status_pernikahan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Anak</td>
                                        <td>: {{ $detail->jumlah_anak }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bahasa Yang diketahui</td>
                                        <td>: {{ $detail->bahasa }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Kota</td>
                                        <td>: {{ $detail->kota }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pandangan Pernikahan</td>
                                        <td>: {{ $detail->pandangan_pernikahan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Merokok</td>
                                        <td>: {{ $detail->merokok }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alkohol</td>
                                        <td>: {{ $detail->alkohol }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sedekah</td>
                                        <td>: {{ $detail->sedekah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Shalat</td>
                                        <td>: {{ $detail->shalat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Target Menikah</td>
                                        <td>: {{ $detail->target_menikah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tinggi Badan (Cm)</td>
                                        <td>: {{ $detail->tinggi_badan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Berat Badan (Kg)</td>
                                        <td>: {{ $detail->berat_badan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Hafalan Qur'an yang dimiliki</td>
                                        <td>: {{ $detail->hafalan }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- ./batas card-body --}}
            </div>
        </div>
    </section>
</div>
@endsection