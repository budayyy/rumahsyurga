@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Daftar Artikel</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">
    <section class="row mb-3">
        <div class="col-12">
            <a href="" class="btn btn-orange fw-bold" data-bs-toggle="modal" data-bs-target="#tambah-artikel">Tambah Artikel</a>

            <!-- Modal Tambah Artikel-->
            <div class="modal fade" id="tambah-artikel" tabindex="-1" aria-labelledby="tambahArtikelLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="tambahArtikelLabel">Tambah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                        @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" placeholder="judul">
                            </div>
                            <div class="mb-3">
                                <label for="jenis" class="form-label">Jenis</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Jenis</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="pengarang" class="form-label">Pengarang</label>
                                <input type="text" class="form-control" id="pengarang" placeholder="pengarang">
                            </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="penerbit">
                            </div>
                            <div class="mb-3">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" class="form-control" id="tahun_terbit" placeholder="tahun_terbit">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">File</label>
                                <input class="form-control" type="file" id="formFile">
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


            <a href="/artikel/daftar-terhapus" class="btn btn-danger fw-bold">Daftar Hapus</a>
        </div>
    </section>
    
    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-body">
                    @if (count($artikel) > 0 )
        
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>#</th>
                                <th>Judul</th>
                                <th>Jenis Artikel</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikel as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->judul_artikel }}</td>
                                    <td>{{ $row->nama_jenis }}</td>
                                    <td>{{ $row->pengarang }}</td>
                                    <td>{{ $row->penerbit }}</td>
                                    <td class="text-success fw-bold">Aktif</td>
                                    <td>
                                        <a href="" class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#edit-artikel"><i class="bi bi-pencil-square"></i></a>
    
                                        <!-- Modal Edit Artikel-->
                                        <div class="modal fade" id="edit-artikel" tabindex="-1" aria-labelledby="editArtikelLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="editArtikelLabel">Edit Artikel</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="judul" class="form-label">Judul</label>
                                                        <input type="text" class="form-control" id="judul" placeholder="judul">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jenis" class="form-label">Jenis</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Jenis</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                          </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="pengarang" class="form-label">Pengarang</label>
                                                        <input type="text" class="form-control" id="pengarang" placeholder="pengarang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="penerbit" class="form-label">Penerbit</label>
                                                        <input type="text" class="form-control" id="penerbit" placeholder="penerbit">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                                        <input type="number" class="form-control" id="tahun_terbit" placeholder="tahun_terbit">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">File</label>
                                                        <input class="form-control" type="file" id="formFile">
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
    
                                        <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus-artikel-{{ $row->artikel_id }}"><i class="bi bi-trash"></i></a>
    
                                        <!-- Modal Hapus Jenis Artikel-->
                                        <div class="modal fade" id="hapus-artikel-{{ $row->artikel_id }}" tabindex="-1" aria-labelledby="hapusArtikelLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="hapusArtikelLabel">Hapus Artikel</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="/artikel/daftar/{{ $row->artikel_id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-body">
                                                    <p>Apakah Anda Yakin akan menghapus artikel dengan judul "{{ $row->judul_artikel }}"?</p>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="text-center">
                        <img src="{{ asset('img/ic_no_data_pc.png') }}" alt="" style="width: 50%">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection