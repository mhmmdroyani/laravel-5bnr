@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Daftar Matakuliah</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Matakuliah
            </a>
        </div>
    </div>

    @if ($matkuls->count())
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50">ID</th>
                            <th>Kode MK</th>
                            <th>Nama MK</th>
                            <th>SKS</th>
                            <th>Prodi</th>
                            <th width="150" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matkuls as $mk)
                        <tr>
                            <td>{{ $mk->id }}</td>
                            <td>{{ $mk->kode_mk }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td>{{ $mk->jumlah_sks }}</td>
                            <td>{{ optional($mk->prodi)->nama_prodi ?? '-' }}</td>
                            <td class="text-center">
                                <a href="{{ route('matakuliah.show', $mk->id) }}" class="btn btn-icon bg-info text-white me-1" title="Lihat" aria-label="Lihat">
                                    <i class="bi bi-eye-fill"></i>
                                </a>

                                <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-icon bg-warning text-dark me-1" title="Edit" aria-label="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>

                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon bg-danger text-white" title="Hapus" aria-label="Hapus">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-info" role="alert">
            Belum ada data matakuliah. <a href="{{ route('matakuliah.create') }}">Tambah matakuliah sekarang</a>
        </div>
    @endif
</div>
@endsection
