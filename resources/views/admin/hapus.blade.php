@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Daftar Admin Dihapus</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</div>

<div class="page-content">

    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (count($dihapus) > 0)
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr class="text-success">
                                <th>#</th>
                                <th>Nama Admin</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dihapus as $item)
                                <tr>
                                    <td>{{ $item->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        @if ($item->role_admin == 1)
                                            Administrator
                                        @elseif($item->role_admin == 2)
                                            Customer Service
                                        @else
                                        Pimpinan
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status_admin == 1)
                                            Aktif
                                        @else
                                            ditangguhkan
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="badge bg-warning" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-admin-{{ $item->admin_id }}"><i class="bi bi-pencil-square"></i></a>

                                    <!-- Modal Edit-->
                                    <div class="modal fade" id="edit-admin-{{ $item->admin_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                            <form action="/admin/{{ $item->admin_id }}" method="POST">
                                                @csrf
                                                @method('put')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="nama" name="nama" value="{{ old('nama', $item->nama) }}">
                                                    </div>
                    
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username</label>
                                                        <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="username" name="username" value="{{ old('username', $item->username) }}">
                                                    </div>
                    
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="email" name="email" value="{{ old('email', $item->email) }}">
                                                    </div>
                    
                                                    <div class="mb-3">
                                                        <label for="phone" class="form-label">Nomor Telepon</label>
                                                        <input type="number" class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone" placeholder="nomor telepon" value="{{ old('phone', $item->phone) }}">
                                                    </div>
                    
                                                    <div class="mb-3">
                                                        <label for="role" class="form-label">Role Admin</label>
                                                        <select class="form-select @error('role')is-invalid @enderror" aria-label="Default select example" name="role">
                                                            <option selected disabled>Pilih Role</option>
                                                            <option value="1" {{ ($item->role_admin) == 1 ? 'selected' : '' }}>Aministrator</option>
                                                            <option value="2" {{ ($item->role_admin) == 2 ? 'selected' : '' }}>Customer Service</option>
                                                            <option value="3" {{ ($item->role_admin) == 3 ? 'selected' : '' }}>Pimpinan</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>

                                    <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus-admin-{{ $item->admin_id }}"><i class="bi bi-trash"></i></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapus-admin-{{ $item->admin_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="/admin/{{ $item->admin_id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menghapus admin dengan nama "{{ $item->nama }}"..? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-primary">Ya</button>
                                            </div>
                                        </form>
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
                        <img src="{{ asset('img/ic_no_data_pc.png') }}" alt="no data available" style="width: 50%">
                    </div> 
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection