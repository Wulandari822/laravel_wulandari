@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{ route('pasien.create') }}" class="btn btn-primary">+ Tambah Pasien</a>

    <div class="d-flex align-items-center">
        <label for="filter-rs" class="form-label me-2 mb-0"></label>
        <select id="filter-rs" class="form-select">
            <option value="">Pilih Kategori</option>
            @foreach($rumahSakits as $rs)
                <option value="{{ $rs->id }}">{{ $rs->nama }}</option>
            @endforeach
        </select>
    </div>
</div>

<div id="table-container">
    @include('pasien.partials.table', ['pasiens' => $pasiens])
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function fetchTable(rsId, page = 1) {
        $.get("{{ route('pasien.index') }}", { rumah_sakit_id: rsId, page: page }, function(html) {
            $('#table-container').html(html);
        });
    }

    $('#filter-rs').on('change', function() {
        fetchTable($(this).val(), 1);
    });

    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        let rsId = $('#filter-rs').val();
        fetchTable(rsId, page);
    });

    $(document).on('click', '.btn-delete', function() {
        if(confirm('Yakin hapus data?')) {
            let id = $(this).data('id');
            $.ajax({
                url: '/pasien/' + id,
                type: 'DELETE',
                data: { _token: '{{ csrf_token() }}' },
                success: function(res) {
                    if(res.success) {
                        fetchTable($('#filter-rs').val(), 1);
                    }
                }
            });
        }
    });
</script>
@endsection