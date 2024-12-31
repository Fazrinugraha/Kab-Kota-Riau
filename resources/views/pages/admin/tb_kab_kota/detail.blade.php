@extends('layouts.admin.main') 
@section('title', 'Admin Detail Kabupaten/Kota') 
@section('content') 
<div class="main-content"> 
    <section class="section"> 
        <!-- Header Section -->
        <div class="section-header"> 
            <h1>Detail Kabupaten/Kota</h1> 
            <div class="section-header-breadcrumb"> 
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div> 
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.tb_kab_kota.index') }}">Kabupaten/Kota</a>
                </div> 
                <div class="breadcrumb-item">Detail Kabupaten/Kota</div> 
            </div> 
        </div>
        
        <!-- Back Button -->
        <a href="{{ route('admin.tb_kab_kota.index') }}" class="btn btn-icon icon-left btn-warning">
            <i class="fas fa-arrow-left"></i> Kembali
        </a> 
        
        <!-- Kabupaten/Kota Detail -->
        <div class="row mt-4"> 
            <div class="col-12 col-md-8 m-auto"> 
                <article class="article article-style-c"> 
                    <div class="article-header"> 
                        @if($kabKota->logo)
                            <div class="article-image" data-background="{{ asset('images/' . $kabKota->logo) }}">  
                            </div> 
                        @else
                            <div class="article-image" data-background="{{ asset('images/default-logo.png') }}">  
                            </div> 
                        @endif
                    </div> 
                    <div class="article-details"> 
                        <h2 class="article-title">{{ $kabKota->kabupaten_kota }}</h2>
                        <hr> 
                        <div class="article-category">
                            <strong>Pusat Pemerintahan:</strong> {{ $kabKota->pusat_pemerintahan }}
                        </div> 
                        <div class="article-category">
                            <strong>Bupati/Walikota:</strong> {{ $kabKota->bupati_walikota }}
                        </div> 
                        <div class="article-category">
                            <strong>Tanggal Berdiri:</strong> {{ \Carbon\Carbon::parse($kabKota->tanggal_berdiri)->format('d-m-Y') }}
                        </div> 
                        <div class="article-category">
                            <strong>Luas Wilayah:</strong> {{ $kabKota->luas_wilayah }} km²
                        </div>
                        <div class="article-category">
                            <strong>Jumlah Penduduk:</strong> {{ $kabKota->jumlah_penduduk }}
                        </div>
                        <div class="article-category">
                            <strong>Jumlah Kecamatan:</strong> {{ $kabKota->jumlah_kecamatan }}
                        </div>
                        <div class="article-category">
                            <strong>Jumlah Kelurahan:</strong> {{ $kabKota->jumlah_kelurahan }}
                        </div>
                        <div class="article-category">
                            <strong>Jumlah Desa:</strong> {{ $kabKota->jumlah_desa }}
                        </div>
                        <div class="article-category">
                            <strong>URL Peta Wilayah:</strong> <a href="{{ $kabKota->url_peta_wilayah }}" target="_blank">{{ $kabKota->url_peta_wilayah }}</a>
                        </div>
                        <div class="article-category">
                            <strong>Deskripsi:</strong> {{ $kabKota->deskripsi }}
                        </div>
                    </div> 
                </article> 
            </div> 
        </div> 
    </section> 
</div> 
@endsection