@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="bi bi-plus-circle"></i> Tambah Matakuliah</h5>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('matakuliah.store') }}" novalidate>
                        @csrf

                        <div class="mb-4">
                            <label for="kode_mk" class="form-label fw-semibold">Kode MK <span class="text-danger">*</span></label>
                            <input id="kode_mk" type="text" class="form-control form-control-lg @error('kode_mk') is-invalid @enderror" name="kode_mk" value="{{ old('kode_mk') }}" placeholder="Masukkan kode matakuliah" required autocomplete="off">
                            @error('kode_mk')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="nama_mk" class="form-label fw-semibold">Nama Matakuliah <span class="text-danger">*</span></label>
                            <input id="nama_mk" type="text" class="form-control form-control-lg @error('nama_mk') is-invalid @enderror" name="nama_mk" value="{{ old('nama_mk') }}" placeholder="Masukkan nama matakuliah" required autocomplete="off">
                            @error('nama_mk')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="jumlah_sks" class="form-label fw-semibold">Jumlah SKS <span class="text-danger">*</span></label>
                            <input id="jumlah_sks" type="number" min="0" class="form-control form-control-lg @error('jumlah_sks') is-invalid @enderror" name="jumlah_sks" value="{{ old('jumlah_sks') }}" placeholder="Masukkan jumlah sks" required>
                            @error('jumlah_sks')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="prodi_id" class="form-label fw-semibold">Prodi (opsional)</label>
                            <select id="prodi_id" name="prodi_id" class="form-select">
                                <option value="">-- Pilih Prodi --</option>
                                @foreach(\App\Models\Prodi::all() as $p)
                                    <option value="{{ $p->id }}" {{ old('prodi_id') == $p->id ? 'selected' : '' }}>{{ $p->nama_prodi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-lg btn-secondary">
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
