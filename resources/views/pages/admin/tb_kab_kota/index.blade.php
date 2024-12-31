@extends('layouts.admin.main') 
@section('title', 'Data Kabupaten/Kota') 

@section('content') 
<div class="main-content"> 
    <section class="section"> 
        <div class="section-header"> 
            <h1>Kabupaten/Kota</h1> 
            <div class="section-header-breadcrumb"> 
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div> 
                <div class="breadcrumb-item">Kabupaten/Kota</div> 
            </div> 
        </div> 
        <a href="{{ route('admin.tb_kab_kota.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah Kabupaten/Kota</a>  
    

        <div class="card-body"> 
            <div class="table-responsive"> 
                <table class="table table-bordered table-md"> 
                    <thead>
                        <tr> 
                            <th>No</th> 
                            <th>Kabupaten/Kota</th> 
                            <th>Pusat Pemerintahan</th>
                            <th>Bupati/Walikota</th> 
                            <th>Tanggal Berdiri</th> 
                            <th>Luas Wilayah</th>
                            <th>Jumlah Penduduk</th>
                            <th>Logo</th>
                            <th>Action</th> 
                        </tr> 
                    </thead>
                    <tbody>
                    @php 
                        $no = 0;
                    @endphp
                    @forelse ($kabKotas as $kabKota) 
                        <tr> 
                            <td>{{ $no += 1 }}</td> 
                            <td>{{ $kabKota->kabupaten_kota }}</td> 
                            <td>{{ $kabKota->pusat_pemerintahan }}</td>
                            <td>{{ $kabKota->bupati_walikota }}</td>
                            <td>{{ \Carbon\Carbon::parse($kabKota->tanggal_berdiri)->format('d-m-Y') }}</td>
                            <td>{{ $kabKota->luas_wilayah }} km²</td>
                            <td>{{ $kabKota->jumlah_penduduk }}</td>
                            <td>
                                @if($kabKota->logo)
                                    <img src="{{ asset('images/' . $kabKota->logo) }}" alt="{{ $kabKota->kabupaten_kota }}" style="width: 100px; height: auto;">
                                @else
                                    <span>Tidak ada logo</span>
                                @endif
                            </td>
                            <td> 
                                <a href="{{ route('admin.tb_kab_kota.detail', $kabKota->id) }}" class="badge badge-info">Detail</a> 
                                <a href="{{ route('admin.tb_kab_kota.edit', $kabKota->id) }}" class="badge badge-warning">Edit</a> 
                                <a href="{{ route('admin.tb_kab_kota.delete', $kabKota->id) }}" class="badge badge-danger" data-confirm-delete="true">Hapus</a> 
                            </td> 
                        </tr> 
                    @empty 
                        <tr>
                            <td colspan="9" class="text-center">Data Kabupaten/Kota Kosong</td> 
                        </tr>
                    @endforelse 
                    </tbody>
                </table>
            </div> 
        </div> 
    </section> 
</div> 
@endsection