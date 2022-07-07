@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">Daftar Admin Sistem</h3>
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

    @if (session()->has('success'))
    <section class="row">
        <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </section>
    @endif

    @if (session()->has('error'))
    <section class="row">
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </section>
    @endif

    <section class="row">
        <div class="col-12">
            <div class="card border">
                <div class="card-header ">
                    <a href="#" class="btn btn-orange fw-bold" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-admin">Tambah Admin</a> 
                    
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="tambah-admin" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahModalLabel">Tambah Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="nama" name="nama">
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="username" name="username">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="email" name="email">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone" placeholder="nomor telepon">
                                </div>

                                <div class="mb-3">
                                    <label for="password1" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password1')is-invalid @enderror" id="password1" placeholder="password" name="password1">
                                    @error('password1')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password2" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control @error('password2')is-invalid @enderror" id="password2" placeholder="kofirmasi password" name="password2">
                                    @error('password2')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="role" class="form-label">Role Admin</label>
                                    <select class="form-select @error('role')is-invalid @enderror" aria-label="Default select example" name="role">
                                        <option selected disabled>Pilih Role</option>
                                        <option value="1">Aministrator</option>
                                        <option value="2">Customer Service</option>
                                        <option value="3">Pimpinan</option>
                                    </select>
                                </div>

                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    @if ( count($admin) > 0 )
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
                            @foreach ($admin as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
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
                                        <b class="text-success">Aktif</b>
                                    @elseif($item->status_admin == 2 )
                                        <b class="text-warning">Ditangguhkan</b>
                                    @endif
                                </td>
                                <td>
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

                                    <a href="" class="badge bg-success" data-bs-toggle="modal" data-bs-target="#status-admin-{{ $item->admin_id }}"><i class="bi bi-person-check-fill"></i></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="status-admin-{{ $item->admin_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <form action="/admin/ubahStatus/{{ $item->admin_id }}" method="post">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Ubah Status</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="status" class="form-label fw-bold">Status Admin</label>
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option value="1" {{ ($item->status_admin) == 1 ? 'selected' : '' }}>Aktif</option>
                                                        <option value="2" {{ ($item->status_admin) == 2 ? 'selected' : '' }}>Ditangguhkan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-primary">Ya</button>
                                            </div>
                                            </form>
                                        </div>
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