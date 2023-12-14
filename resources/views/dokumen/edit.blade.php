@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Teks</h2>

        <form method="POST" action="{{ route('dokumen.update', $dokumen->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="label">Judul</label>
                <input type="text" class="form-control" id="label" name="label" value="{{ $dokumen->label }}" required>
            </div>
            <div class="form-group">
                <label for="konten">Isi</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ $dokumen->konten }}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('dokumen.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
