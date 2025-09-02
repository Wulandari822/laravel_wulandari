@extends('layouts.app')

@section('title', 'Edit Rumah Sakit')

@section('content')
<div class="container mt-4">
    <h2>Edit Rumah Sakit</h2>
    <form action="{{ route('rumahsakit.update', $rs->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $rs->nama }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $rs->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $rs->email }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $rs->telepon }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('rumahsakit.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
