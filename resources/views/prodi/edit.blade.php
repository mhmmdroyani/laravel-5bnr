@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Prodi') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('prodi.update', $prodi->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="kode_prodi" class="form-label">{{ __('Kode Prodi') }}</label>
                            <input id="kode_prodi" type="text" class="form-control @error('kode_prodi') is-invalid @enderror" name="kode_prodi" value="{{ old('kode_prodi', $prodi->kode_prodi) }}" required autocomplete="off">

                            @error('kode_prodi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama_prodi" class="form-label">{{ __('Nama Prodi') }}</label>
                            <input id="nama_prodi" type="text" class="form-control @error('nama_prodi') is-invalid @enderror" name="nama_prodi" value="{{ old('nama_prodi', $prodi->nama_prodi) }}" required autocomplete="off">

                            @error('nama_prodi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama_kaprodi" class="form-label">{{ __('Nama Kaprodi') }}</label>
                            <input id="nama_kaprodi" type="text" class="form-control @error('nama_kaprodi') is-invalid @enderror" name="nama_kaprodi" value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}" required autocomplete="off">

                            @error('nama_kaprodi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Perbarui') }}
                            </button>
                            <a href="{{ route('prodi.index') }}" class="btn btn-secondary">
                                {{ __('Kembali') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
