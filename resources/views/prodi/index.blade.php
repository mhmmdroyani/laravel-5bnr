@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Daftar Prodi</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('prodi.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Prodi
            </a>
        </div>
    </div>

    @if ($banyak_prodi->count())
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50">ID</th>
                            <th>Kode Prodi</th>
                            <th>Nama Prodi</th>
                            <th>Nama Kaprodi</th>
                            <th width="150" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banyak_prodi as $prodi)
                        <tr>
                            <td>{{ $prodi->id }}</td>
                            <td>{{ $prodi->kode_prodi }}</td>
                            <td>{{ $prodi->nama_prodi }}</td>
                            <td>{{ $prodi->nama_kaprodi }}</td>
                            <td class="text-center">
                                <a href="{{ route('prodi.show', $prodi->id) }}" class="btn btn-icon bg-info text-white me-1" title="Lihat" aria-label="Lihat">
                                    <i class="bi bi-eye-fill"></i>
                                </a>

                                <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-icon bg-warning text-dark me-1" title="Edit" aria-label="Edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>

                                <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
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
            Belum ada data prodi. <a href="{{ route('prodi.create') }}">Tambah prodi sekarang</a>
        </div>
    @endif
</div>
@endsection