@extends('layouts.admin.main') 
@section('title', 'Admin Dashboard') 

@section('content') 
    <div class="main-content"> 
        <section class="section"> 
            <div class="section-header"> 
                <h1>Dashboard</h1> 
                <div class="section-header-breadcrumb"> 
                    <div class="breadcrumb-item active">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </div> 
                </div> 
            </div> 
            <div class="row">
                <!-- Total Admin -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon" style="background-color: #3F51B5;"> 
                            <i class="fas fa-user-shield"></i> 
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Admin</h4> 
                            </div> 
                            <div class="card-body"> 
                                {{ $admins }} 
                            </div> 
                        </div> 
                    </div> 
                </div> 

                <!-- Total Kendaraan -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon" style="background-color: #FFC107;"> 
                            <i class="fas fa-car"></i> 
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Kab/Kota</h4> 
                            </div> 
                            <div class="card-body"> 
                                {{ $tb_kab_kotas }} 
                            </div> 
                        </div> 
                    </div> 
                </div>

            </div>
        </section> 
    </div> 
@endsection