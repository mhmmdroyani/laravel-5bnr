@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="bi bi-plus-circle"></i> Tambah Prodi Baru</h5>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('prodi.store') }}" novalidate>
                        @csrf

                        <div class="mb-4">
                            <label for="kode_prodi" class="form-label fw-semibold">Kode Prodi <span class="text-danger">*</span></label>
                            <input 
                                id="kode_prodi" 
                                type="text" 
                                class="form-control form-control-lg @error('kode_prodi') is-invalid @enderror" 
                                name="kode_prodi" 
                                value="{{ old('kode_prodi') }}" 
                                placeholder="Masukkan kode prodi"
                                required 
                                autocomplete="off"
                            >
                            @error('kode_prodi')
                                <div class="invalid-feedback d-block">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nama_prodi" class="form-label fw-semibold">Nama Prodi <span class="text-danger">*</span></label>
                            <input 
                                id="nama_prodi" 
                                type="text" 
                                class="form-control form-control-lg @error('nama_prodi') is-invalid @enderror" 
                                name="nama_prodi" 
                                value="{{ old('nama_prodi') }}" 
                                placeholder="Masukkan nama prodi"
                                required 
                                autocomplete="off"
                            >
                            @error('nama_prodi')
                                <div class="invalid-feedback d-block">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nama_kaprodi" class="form-label fw-semibold">Nama Kaprodi <span class="text-danger">*</span></label>
                            <input 
                                id="nama_kaprodi" 
                                type="text" 
                                class="form-control form-control-lg @error('nama_kaprodi') is-invalid @enderror" 
                                name="nama_kaprodi" 
                                value="{{ old('nama_kaprodi') }}" 
                                placeholder="Masukkan nama kaprodi"
                                required 
                                autocomplete="off"
                            >
                            @error('nama_kaprodi')
                                <div class="invalid-feedback d-block">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                            <a href="{{ route('prodi.index') }}" class="btn btn-lg btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-lg btn-primary">
                                <i class="bi bi-check-circle"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
