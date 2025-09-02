
@extends('layouts.app')

@section('title', 'Data Rumah Sakit')

@section('content')
<div class="container mt-4">
    <a href="{{ route('rumahsakit.create') }}" class="btn btn-primary mb-3">+ Tambah Rumah Sakit</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

<div class="table-responsive" style="border-radius: 8px; overflow: hidden; border: 1px solid #dee2e6; font-size: 0.85rem;">
    <table class="table table-bordered mb-0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($data as $rs)
            <tr id="row-{{ $rs->id }}">
                <td>{{ $rs->id }}</td>
                <td>{{ $rs->nama }}</td>
                <td>{{ $rs->alamat }}</td>
                <td>{{ $rs->email }}</td>
                <td>{{ $rs->telepon }}</td>
                <td>
                    <a href="{{ route('rumahsakit.show', $rs->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('rumahsakit.edit', $rs->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <button class="btn btn-danger btn-sm btn-delete" data-id="{{ $rs->id }}"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-between align-items-center mt-2">
    <div>
        Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} entries
    </div>
    <div>
        {{ $data->links('pagination::bootstrap-5') }}
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on("click", ".btn-delete", function() {
    if(confirm("Yakin mau hapus data ini?")) {
        let id = $(this).data("id");

        $.ajax({
            url: "/rumah_sakit/" + id,
            type: "POST",
            data: {
                _method: "DELETE",
                _token: "{{ csrf_token() }}"
            },
            success: function(res) {
                if(res.success) {
                    $("#row-" + id).remove();
                }
            }
        });
    }
});

</script>
@endsection


