{{-- DETAIL VIEW --}}

@extends('layouts.main')

@section('content')
    {{-- SIDEBAR --}}
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.admin') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="icon-layout menu-icon"></i>
                    <span class="menu-title">List Data</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('operator.index') }}">Operator</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('driver.index') }}">Driver</a></li>
                    </ul>
                </div>
    </nav>
    {{-- AKHIR SIDEBAR --}}

    {{-- FORM --}}
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Data Driver</h4>
                        <div class="form-sample">
                            <!-- Nama -->
                            <div class="form-group">
                                <label for="driverName">Nama</label>
                                <p id="driverName">#</p>
                            </div>
                            <!-- Gambar -->
                            <div class="form-group">
                                <label for="driverImage">Gambar</label>
                                <div class="input-group col-xs-12">
                                    <img src="#" class="img-fluid" alt="Driver Image">
                                </div>
                            </div>
                            <!-- Nomor HP -->
                            <div class="form-group">
                                <label for="driverPhone">Nomor HP</label>
                                <p id="driverPhone">#</p>
                            </div>
                            <!-- Nomor SIM -->
                            <div class="form-group">
                                <label for="driverLicense">Nomor SIM</label>
                                <p id="driverLicense">#</p>
                            </div>
                            <!-- Alamat -->
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <p id="address">#</p>
                            </div>
                            <!-- Negara -->
                            <div class="form-group">
                                <label for="country">Negara</label>
                                <p id="country">#</p>
                            </div> 
                            <a href="{{ route('driver.index') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- AKHIR FORM --}}
    @endsection

