<div class="table-responsive">
    <table class="table table-bordered mb-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Rumah Sakit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasiens as $pasien)
            <tr id="row-{{ $pasien->id }}">
                <td>{{ $pasien->id }}</td>
                <td><i class="bi bi-person-fill text-primary"></i> {{ $pasien->nama }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->telepon }}</td>
                <td>{{ $pasien->rumahSakit->nama }}</td>
                <td>
                    <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                    <button class="btn btn-danger btn-sm btn-delete" data-id="{{ $pasien->id }}"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center mt-2">
        <div>
            Showing {{ $pasiens->firstItem() }} to {{ $pasiens->lastItem() }} of {{ $pasiens->total() }} entries
        </div>
        <div>
            {{ $pasiens->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
