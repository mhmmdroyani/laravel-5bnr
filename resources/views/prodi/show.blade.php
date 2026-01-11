@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Prodi') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>ID:</strong></label>
                        <p>{{ $prodi->id }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Kode Prodi:</strong></label>
                        <p>{{ $prodi->kode_prodi }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Nama Prodi:</strong></label>
                        <p>{{ $prodi->nama_prodi }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Nama Kaprodi:</strong></label>
                        <p>{{ $prodi->nama_kaprodi }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Dibuat:</strong></label>
                        <p>{{ $prodi->created_at->format('d-m-Y H:i:s') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><strong>Diperbarui:</strong></label>
                        <p>{{ $prodi->updated_at->format('d-m-Y H:i:s') }}</p>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-warning">
                            {{ __('Edit') }}
                        </a>
                        <a href="{{ route('prodi.index') }}" class="btn btn-secondary">
                            {{ __('Kembali') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
