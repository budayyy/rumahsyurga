@extends('layouts.main')

@section('content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-success">
                    <a href="{{ url()->previous() }}" class="text-success"><i class="bi bi-arrow-left-square-fill"></i></a>
                     Edit Pengguna
                </h3>
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
        <div class="card border">
            <div class="card-body">
                <form action="/pengguna/daftar/{{ $pengguna->user_id }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-6">
                    
                            {{-- nama --}}
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama Pengguna</label>
                                <input type="text" class="form-control @error('nama')is-invalid @enderror" id="name" name="nama" value="{{ old('nama', $pengguna->nama) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Gender --}}
                            <div class="mb-3">
                                <label for="gender" class="form-label fw-bold">Gender</label>
                                <select class="form-select @error('gender')is-invalid @enderror" aria-label="Default select example" name="gender" >
                                    <option disabled value="">Gender</option>
                                    <option value="Laki-laki" {{ ($pengguna->jenis_kelamin) == "Laki-laki" ? 'selected' : '' }}>Laki - Laki</option>
                                    <option value="Perempuan" {{ ($pengguna->jenis_kelamin) == "Perempuan" ? 'selected' : '' }}>Perempuan</option>
                                  </select>
                                  @error('gender')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Tanggal Lahir --}}
                            <div class="mb-3">
                                <label for="date" class="form-label fw-bold">Date</label>
                                <input type="date" class="form-control @error('date')is-invalid @enderror" id="date" name="date" value="{{ old('nama', $pengguna->tgl_lahir) }}">
                                @error('date')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" value="{{ old('nama', $pengguna->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Nomor Telepon --}}
                            <div class="mb-3">
                                <label for="telepon" class="form-label fw-bold">Nomor Telepon</label>
                                <input type="number" class="form-control @error('telepon')is-invalid @enderror" id="telepon" name="telepon" value="{{ old('nama', $pengguna->no_telp) }}">
                                @error('telepon')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Password --}}
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" value="{{ old('nama', $pengguna->password) }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Kota --}}
                            <div class="mb-3">
                                <label for="kota" class="form-label fw-bold">Kota</label>
                                <input type="text" class="form-control @error('kota')is-invalid @enderror" id="kota" name="kota" value="{{ old('nama', $pengguna->kota) }}">
                                @error('kota')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Alamat Lengkap --}}
                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-bold">Alamat Lengkap</label>
                                <textarea class="form-control @error('alamat')is-invalid @enderror" name="alamat" >{{ $pengguna->alamat }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Hobi --}}
                            <div class="mb-3">
                                <label for="hobi" class="form-label fw-bold">Hobi</label>
                                <input type="text" class="form-control @error('hobi')is-invalid @enderror" name="hobi" id="hobi" value="{{ old('nama', $pengguna->hobi) }}">
                                @error('hobi')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- institusi --}}
                            <div class="mb-3">
                                <label for="institusi" class="form-label fw-bold">Nama Institusi</label>
                                <input type="text" class="form-control @error('nama_institusi')is-invalid @enderror" id="nama_institusi" name="nama_institusi" value="{{ old('nama', $pengguna->nama_institusi) }}">
                                @error('nama_institusi')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- pendidikan --}}
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label fw-bold">Pendidikan</label>
                                <input type="text" class="form-control @error('pendidikan')is-invalid @enderror" id="pendidikan" name="pendidikan" value="{{ old('nama', $pengguna->pendidikan) }}">
                                @error('pendidikan')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- perusahaan --}}
                            <div class="mb-3">
                                <label for="nama_perusahaan" class="form-label fw-bold">Nama Perusahaan</label>
                                <input type="text" class="form-control @error('nama_perusahaan')is-invalid @enderror" id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama', $pengguna->nama_perusahaan) }}">
                                @error('nama_perusahaan')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Tentang Saya --}}
                            <div class="mb-3">
                                <label for="bio" class="form-label fw-bold">Tentang Saya</label>
                                <textarea class="form-control @error('bio')is-invalid @enderror" name="bio">{{ $pengguna->bio }}</textarea>
                                @error('bio')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                        </div>
                        {{-- ./batas colom --}}
                    
                        <div class="col-lg-6">
                    
                            {{-- Merokok --}}
                            <div class="mb-3">
                                <label for="merokok" class="form-label fw-bold">Merokok?</label>
                                <select class="form-select @error('merokok')is-invalid @enderror" aria-label="Default select example" name="merokok">
                                    <option disabled value="">Merokok</option>
                                    <option value="Sering" {{ ($pengguna->merokok) == "Sering" ? 'selected' : '' }}>Sering</option>
                                    <option value="Jarang" {{ ($pengguna->merokok) == "Jarang" ? 'selected' : '' }}>Jarang</option>
                                    <option value="Tidak Pernah" {{ ($pengguna->merokok) == "Tidak Pernah" ? 'selected' : '' }}>Tidak Pernah</option>
                                  </select>
                                  @error('merokok')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Alkohol --}}
                            <div class="mb-3">
                                <label for="alkohol" class="form-label fw-bold">Alkohol?</label>
                                <select class="form-select @error('alkohol')is-invalid @enderror" aria-label="Default select example" name="alkohol">
                                    <option disabled value="">Alkohol</option>
                                    <option value="Sering" {{ ($pengguna->alkohol) == "Sering" ? 'selected' : '' }}>Sering</option>
                                    <option value="Jarang" {{ ($pengguna->alkohol) == "Jarang" ? 'selected' : '' }}>Jarang</option>
                                    <option value="Tidak Pernah" {{ ($pengguna->alkohol) == "Tidak Pernah" ? 'selected' : '' }}>Tidak Pernah</option>
                                  </select>
                                  @error('alkohol')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Sedekah --}}
                            <div class="mb-3">
                                <label for="sedekah" class="form-label fw-bold">Sedekah?</label>
                                <select class="form-select @error('sedekah')is-invalid @enderror" aria-label="Default select example" name="sedekah">
                                    <option disabled value="">Sedekah</option>
                                    <option value="Sering" {{ ($pengguna->sedekah) == "Sering" ? 'selected' : '' }}>Sering</option>
                                    <option value="Jarang" {{ ($pengguna->sedekah) == "Jarang" ? 'selected' : '' }}>Jarang</option>
                                    <option value="Tidak Pernah" {{ ($pengguna->sedekah) == "Tidak Pernah" ? 'selected' : '' }}>Tidak Pernah</option>
                                  </select>
                                  @error('sedekah')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Sholat --}}
                            <div class="mb-3">
                                <label for="sholat" class="form-label fw-bold">Sholat?</label>
                                <select class="form-select @error('sholat')is-invalid @enderror" aria-label="Default select example" name="sholat">
                                    <option disabled value="">Sholat</option>
                                    <option value="Sering" {{ ($pengguna->shalat) == "Sering" ? 'selected' : '' }}>Sering</option>
                                    <option value="Jarang" {{ ($pengguna->shalat) == "Jarang" ? 'selected' : '' }}>Jarang</option>
                                    <option value="Tidak Pernah" {{ ($pengguna->shalat) == "Tidak Pernah" ? 'selected' : '' }}>Tidak Pernah</option>
                                  </select>
                                  @error('sholat')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- pekerjaan --}}
                            <div class="mb-3">
                                <label for="institusi" class="form-label fw-bold">Pekerjaan</label>
                                <input type="text" class="form-control @error('pekerjaan')is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('nama', $pengguna->pekerjaan) }}">
                                @error('pekerjaan')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Status Pernikahan --}}
                            <div class="mb-3">
                                <label for="nikah" class="form-label fw-bold">Status Pernikahan</label>
                                <select class="form-select @error('nikah')is-invalid @enderror" aria-label="Default select example" name="nikah">
                                    <option disabled value="">Status Pernikahan</option>
                                    <option value="Belum Menikah" {{ ($pengguna->status_pernikahan) == "Belum Menikah" ? 'selected' : '' }}>Belum Menikah</option>
                                    <option value="Janda" {{ ($pengguna->status_pernikahan) == "Janda" ? 'selected' : '' }}>Janda</option>
                                    <option value="Duda" {{ ($pengguna->status_pernikahan) == "Duda" ? 'selected' : '' }}>Duda</option>
                                  </select>
                                  @error('nikah')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Jumlah Anak --}}
                            <div class="mb-3">
                                <label for="anak" class="form-label fw-bold">Jumlah Anak</label>
                                <input type="text" class="form-control @error('anak')is-invalid @enderror" id="anak" name="anak" value="{{ old('nama', $pengguna->jumlah_anak) }}">
                                @error('anak')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Target Menikah --}}
                            <div class="mb-3">
                                <label for="target" class="form-label fw-bold">Target Menikah</label>
                                <input type="number" class="form-control @error('target')is-invalid @enderror" id="target" name="target" value="{{ old('nama', $pengguna->target_menikah) }}">
                                @error('target')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Pandangan Tentang Pernikahan --}}
                            <div class="mb-3">
                                <label for="tentang_nikah" class="form-label fw-bold">Pandangan Tentang Pernikahan</label>
                                <textarea class="form-control @error('tentang_nikah')is-invalid @enderror" name="tentang_nikah">{{ $pengguna->pandangan_pernikahan }}</textarea>
                                @error('tentang_nikah')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Tinggi Badan --}}
                            <div class="mb-3">
                                <label for="tinggi" class="form-label fw-bold">Tinggi Badan (CM)</label>
                                <input type="number" class="form-control @error('tinggi')is-invalid @enderror" id="tinggi" name="tinggi" value="{{ old('nama', $pengguna->tinggi_badan) }}">
                                @error('tinggi')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                            {{-- Berat Badan --}}
                            <div class="mb-3">
                                <label for="berat" class="form-label fw-bold">Berat Badan (CM)</label>
                                <input type="number" class="form-control @error('berat')is-invalid @enderror" id="berat" name="berat" value="{{ old('nama', $pengguna->berat_badan) }}">
                                @error('berat')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- hafalan --}}
                            <div class="mb-3">
                                <label for="hafalan" class="form-label fw-bold">Hafalan</label>
                                <input type="text" class="form-control @error('hafalan')is-invalid @enderror" id="hafalan" name="hafalan" value="{{ old('nama', $pengguna->hafalan) }}">
                                @error('hafalan')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- bahasa --}}
                            <div class="mb-3">
                                <label for="bahasa" class="form-label fw-bold">Bahasa yang digunakan</label>
                                <input type="text" class="form-control @error('bahasa')is-invalid @enderror" id="bahasa" name="bahasa" value="{{ old('nama', $pengguna->bahasa) }}">
                                @error('bahasa')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                    
                        </div>
                        {{-- ./batas colom --}}
                    
                    </div>
                    {{-- ./batas row --}}
 
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection