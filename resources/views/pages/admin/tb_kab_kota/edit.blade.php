@extends('layouts.admin.main')
@section('title', 'Admin Edit Kabupaten/Kota')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Kabupaten/Kota</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.tb_kab_kota.index') }}">Kabupaten/Kota</a>
                </div>
                <div class="breadcrumb-item">Edit Kabupaten/Kota</div>
            </div>
        </div>
        <a href="{{ route('admin.tb_kab_kota.index') }}" class="btn btn-icon icon-left btn-warning">Kembali</a>
        <div class="card mt-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.tb_kab_kota.update', $kabKota->id) }}" class="needs-validation" novalidate=""
                enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT') 
                <div class="card-body">
                    <div class="row">
                        <div class="col-6"> 
                            <div class="form-group"> 
                                <label for="kabupaten_kota">Nama Kabupaten/Kota</label> 
                                <input id="kabupaten_kota" type="text" class="form-control" name="kabupaten_kota" required=""
                                    value="{{ $kabKota->kabupaten_kota }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div> 
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pusat_pemerintahan">Pusat Pemerintahan</label>
                                <input id="pusat_pemerintahan" type="text" class="form-control" name="pusat_pemerintahan" required=""
                                    value="{{ $kabKota->pusat_pemerintahan }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="bupati_walikota">Bupati/Walikota</label>
                                <input id="bupati_walikota" type="text" class="form-control" name="bupati_walikota" required=""
                                    value="{{ $kabKota->bupati_walikota }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tanggal_berdiri">Tanggal Berdiri</label>
                                <input id="tanggal_berdiri" type="date" class="form-control" name="tanggal_berdiri" required=""
                                    value="{{ $kabKota->tanggal_berdiri }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="luas_wilayah">Luas Wilayah (km²)</label>
                                <input id="luas_wilayah" type="number" class="form-control" name="luas_wilayah" required=""
                                    value="{{ $kabKota->luas_wilayah }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_penduduk">Jumlah Penduduk</label>
                                <input id="jumlah_penduduk" type="number" class="form-control" name="jumlah_penduduk" required=""
                                    value ="{{ $kabKota->jumlah_penduduk }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_kecamatan">Jumlah Kecamatan</label>
                                <input id="jumlah_kecamatan" type="number" class="form-control" name="jumlah_kecamatan" required=""
                                    value="{{ $kabKota->jumlah_kecamatan }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_kelurahan">Jumlah Kelurahan</label>
                                <input id="jumlah_kelurahan" type="number" class="form-control" name="jumlah_kelurahan" required=""
                                    value="{{ $kabKota->jumlah_kelurahan }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_desa">Jumlah Desa</label>
                                <input id="jumlah_desa" type="number" class="form-control" name="jumlah_desa" required=""
                                    value="{{ $kabKota->jumlah_desa }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="url_peta_wilayah">URL Peta Wilayah</label>
                                <input id="url_peta_wilayah" type="url" class="form-control" name="url_peta_wilayah"
                                    value="{{ $kabKota->url_peta_wilayah }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="form-control" name="deskripsi">{{ $kabKota->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <div class="custom-file">
                                    <input class="custom-file-input" name="logo" id="logo" type="file">
                                    <label class="custom-file-label" for="logo">Pilih Logo</label>
                                </div>
                                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah logo.</small>
                                @if ($kabKota->logo) 
                                    <div class="mt-2">
                                        <img src="{{ asset('images/' . $kabKota->logo) }}" alt="Current Logo" style="max-width: 150px; max-height: 150px;">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection