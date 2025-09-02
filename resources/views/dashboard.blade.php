@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="card bg-dark text-white">
    <div class="card-body">
        <h3><i class="bi bi-houses"></i> Selamat Datang {{ Auth::user()->username }}</h3>
        <p>Pilih menu di atas untuk mengelola data Rumah Sakit dan Pasien.</p>
    </div>
</div>

<div class="card bg-warning text-dark mt-3 shadow-sm" style="max-width: auto;">
    <div class="card-body d-flex align-items-start gap-3 p-3">
        <i class="bi bi-exclamation-circle-fill fs-3"></i>
        <div>
            <strong>Notifikasi:</strong> 
            Pasien baru ditambahkan hari ini: {{ $pasienHariIni }}
        </div>
    </div>
@endsection
