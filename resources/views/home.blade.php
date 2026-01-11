@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-lg-7">
            <h1 class="display-5 fw-bold">Selamat Datang di Web Kampus</h1>
            <p class="lead text-muted">Kelola data akademik sederhana: program studi dan mata kuliah. Gunakan menu di atas untuk menavigasi atau tekan tombol di bawah untuk memulai.</p>

            <p class="mt-4">
                <a href="{{ route('prodi.index') }}" class="btn btn-primary btn-lg me-2">
                    <i class="bi bi-building me-1"></i> Kelola Prodi
                </a>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-journal-bookmark me-1"></i> Kelola Matakuliah
                </a>
            </p>
        </div>

        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Ringkasan</h5>
                    <div class="row text-center mt-3">
                        <div class="col-6">
                            <div class="p-3 border rounded bg-light">
                                <div class="h2 mb-0">{{ \App\Models\Prodi::count() }}</div>
                                <div class="text-muted">Prodi</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded bg-light">
                                <div class="h2 mb-0">{{ \App\Models\Matakuliah::count() }}</div>
                                <div class="text-muted">Matakuliah</div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <p class="mb-0 text-muted small">Cepat — tambahkan, ubah, atau hapus data melalui antarmuka yang mudah digunakan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aktivitas Terakhir</h5>
                    <p class="text-muted">Menampilkan 5 matakuliah terbaru.</p>

                    <div class="list-group">
                        @foreach(\App\Models\Matakuliah::latest('id')->take(5)->get() as $mk)
                            <a href="{{ route('matakuliah.show', $mk->id) }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">{{ $mk->kode_mk }} — {{ $mk->nama_mk }}</h6>
                                    <small class="text-muted">{{ $mk->jumlah_sks }} SKS</small>
                                </div>
                                <p class="mb-1 small text-muted">Prodi: {{ optional($mk->prodi)->nama_prodi ?? '-' }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection