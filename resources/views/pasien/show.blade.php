@extends('layouts.app')

@section('title', 'Detail Pasien')

@section('content')
<div class="d-flex justify-content-center mt-4">
    <div class="card shadow-sm" style="max-width: 600px; width: 100%;">
        <div class="card-body">
            <h3 class="text-center"><i class="bi bi-person-circle"></i> Detail Pasien</h3>
            <hr>
            <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
            <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
            <p><strong>No Telp:</strong> {{ $pasien->telepon }}</p>
            <p><strong>Rumah Sakit:</strong> {{ $pasien->rumahSakit->nama }}</p>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-3">
    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>
@endsection
