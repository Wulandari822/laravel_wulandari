@extends('layouts.app')

@section('title', 'Tambah Rumah Sakit')

@section('content')
<div class="container mt-4">
    <h2>Tambah Rumah Sakit</h2>
    <form action="{{ route('rumahsakit.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('rumahsakit.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
