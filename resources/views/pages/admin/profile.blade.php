@extends('layouts.admin.main')
@section('title', 'Profil Admin')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profil Admin</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Profil Admin</div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                        @if($admin->foto)
                            <img src="{{ asset('images/' . $admin->foto) }}" alt="Foto Admin" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        @else
                            <img src="{{ asset('images/default-avatar.png') }}" alt="Foto Admin" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                        @endif
                    </div>
                    <div class="col-12 mt-3">
                        <h4>{{ $admin->nama }}</h4>
                        <p><strong>Email:</strong> {{ $admin->email }}</p>
                        <p><strong>No HP:</strong> {{ $admin->no_hp }}</p>
                        <p><strong>Tempat Lahir:</strong> {{ $admin->tempat_lahir }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($admin->tanggal_lahir)->format('d-m-Y') }}</p>
                        <p><strong>Alamat:</strong> {{ $admin->alamat }}</p>
                        <p><strong>Kelas:</strong> {{ $admin->kelas }}</p>
                        <p><strong>Program Studi:</strong> {{ $admin->prodi }}</p>
                        <p><strong>Jurusan:</strong> {{ $admin->jurusan }}</p>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <a href="{{ route('admin.profile.edit') }}" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-edit"></i> Edit Profil
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection