@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Daftar Pengguna Dihapus</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
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
                    @if (count($dihapus) > 0 )
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>#</th>
                                <th>Nama Pengguna</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dihapus as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->no_telp }}</td>
                                    <td class="text-danger fw-bold">
                                        @if ($row->status_user === 0)
                                            Dihapus
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/pengguna/daftar/{{ $row->user_id }}" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                                        <a href="/pengguna/daftar/{{ $row->user_id }}" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                        <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus-pengguna-permanen"><i class="bi bi-trash"></i></a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="hapus-pengguna-permanen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <form action="/pengguna/daftar/{{ $row->user_id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus pengguna " <b>{{ $row->nama }}</b> " secara permanent..?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>    
                    @else
                    <div class="text-center">
                        <img src="{{ asset('img/ic_no_data_pc.png') }}" alt="no data available" style="width: 50%">
                    </div> 
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection