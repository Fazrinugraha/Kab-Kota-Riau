@extends('layouts.admin.main')
@section('title', 'Edit Profil Admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Profil Admin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Edit Profil Admin</div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col- 12">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ $admin->nama }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $admin->email }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $admin->no_hp }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $admin->tempat_lahir }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $admin->tanggal_lahir }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" required>{{ $admin->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $admin->kelas }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="prodi">Program Studi</label>
                                <input type="text" class="form-control" name="prodi" id="prodi" value="{{ $admin->prodi }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ $admin->jurusan }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="foto">Foto Admin</label>
                                <div class="custom-file">
                                    <input class="custom-file-input" name="foto" id="foto" type="file">
                                    <label class="custom-file-label" for="foto">Pilih Foto</label>
                                </div>
                                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                                @if ($admin->foto) 
                                    <div class="mt-2">
                                        <img src="{{ asset('images/' . $admin->foto) }}" alt="Current Photo" style="max-width: 150px; max-height: 150px;">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">Update Profil</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection