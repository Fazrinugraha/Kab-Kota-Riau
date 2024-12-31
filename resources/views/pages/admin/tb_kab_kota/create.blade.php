@extends('layouts.admin.main')
@section('title', 'Admin Tambah Kabupaten/Kota')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Kabupaten/Kota</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.tb_kab_kota.index') }}">Kabupaten/Kota</a></div>
                <div class="breadcrumb-item">Tambah Kabupaten/Kota</div>
            </div>
        </div>
        <a href="{{ route('admin.tb_kab_kota.index') }}" class="btn btn-icon icon-left btn-warning"> Kembali</a>
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
            <form action="{{ route('admin.tb_kab_kota.store') }}" class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6"> 
                            <div class="form-group"> 
                                <label for="kabupaten_kota">Nama Kabupaten/Kota</label> 
                                <input id="kabupaten_kota" type="text" class="form-control" name="kabupaten_kota" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div> 
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pusat_pemerintahan">Pusat Pemerintahan</label>
                                <input id="pusat_pemerintahan" type="text" class="form-control" name="pusat_pemerintahan" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="bupati_walikota">Bupati/Walikota</label>
                                <input id="bupati_walikota" type="text" class="form-control" name="bupati_walikota" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tanggal_berdiri">Tanggal Berdiri</label>
                                <input id="tanggal_berdiri" type="date" class="form-control" name="tanggal_berdiri" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="luas_wilayah">Luas Wilayah (km²)</label>
                                <input id="luas_wilayah" type="number" class="form-control" name="luas_wilayah" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_penduduk">Jumlah Penduduk</label>
                                <input id="jumlah_penduduk" type="number" class="form-control" name="jumlah_penduduk" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_kecamatan">Jumlah Kecamatan</label>
                                <input id="jumlah_kecamatan" type="number" class="form-control" name="jumlah_kecamatan" required="">
                                <div class="invalid-feedback">
 Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_kelurahan">Jumlah Kelurahan</label>
                                <input id="jumlah_kelurahan" type="number" class="form-control" name="jumlah_kelurahan" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jumlah_desa">Jumlah Desa</label>
                                <input id="jumlah_desa" type="number" class="form-control" name="jumlah_desa" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="url_peta_wilayah">URL Peta Wilayah</label>
                                <input id="url_peta_wilayah" type="url" class="form-control" name="url_peta_wilayah">
                                <div class="invalid-feedback">
                                    Format URL tidak valid!
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="form-control" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input class="custom-file-input" name="logo" id="customFile" type="file">
                                    <label class="custom-file-label" for="customFile">Pilih Logo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection