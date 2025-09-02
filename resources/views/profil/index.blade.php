@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="card mt-3 shadow-sm" style="max-width: 400px; margin: 0 auto;">
    <div class="card-body">
        <h3><i class="bi bi-person-circle"></i> Profil Saya</h3>
        <p><strong>Username:</strong> {{ Auth::user()->username }}</p>
        <p><strong>Password:</strong> ********</p>
    </div>
</div>
@endsection
