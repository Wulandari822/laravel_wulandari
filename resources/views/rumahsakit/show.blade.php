@extends('layouts.app')

@section('title', 'Detail Rumah Sakit')

@section('content')
<div class="d-flex justify-content-center mt-4">
    <div class="card shadow-sm" style="max-width: 600px; width: 100%;">
        <div class="card-body">
            <h3 class="text-center"><i class="bi bi-hospital-fill"></i> Detail Rumah Sakit</h3>
            <hr>
            <p><strong>Nama:</strong> {{ $rs->nama }}</p>
            <p><strong>Alamat:</strong> {{ $rs->alamat }}</p>
            <p><strong>Email:</strong> {{ $rs->email }}</p>
            <p><strong>Telepon:</strong> {{ $rs->telepon }}</p>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-3">
    <a href="{{ route('rumahsakit.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>
@endsection
