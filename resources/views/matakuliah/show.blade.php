@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Matakuliah') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>ID:</strong></label>
                        <p>{{ $matkul->id }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Kode MK:</strong></label>
                        <p>{{ $matkul->kode_mk }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Nama MK:</strong></label>
                        <p>{{ $matkul->nama_mk }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>SKS:</strong></label>
                        <p>{{ $matkul->jumlah_sks }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Prodi:</strong></label>
                        <p>{{ optional($matkul->prodi)->nama_prodi ?? '-' }}</p>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('matakuliah.edit', $matkul->id) }}" class="btn btn-warning">
                            {{ __('Edit') }}
                        </a>
                        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
                            {{ __('Kembali') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
