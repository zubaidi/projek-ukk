@extends('layout.app-layout')
@section('content')
    <h1>Dashboard</h1>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Kantin</h5>
                    <p class="card-text display-15">{{ $jumlahKantin ?? 5 }}</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Pendapatan</h5>
                    <p class="card-text display-15">Rp {{ number_format($totalPendapatan ?? 2500000, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning shadow">
                <div class="card-body">
                    <h5 class="card-title">Menu Terlaris</h5>
                    <p class="card-text display-6">{{ $menuTerlaris ?? 'Es Teh Manis' }}</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-danger shadow">
                <div class="card-body">
                    <h5 class="card-title">Pemilik Aktif</h5>
                    <p class="card-text display-6">{{ $jumlahPemilik ?? 3 }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection