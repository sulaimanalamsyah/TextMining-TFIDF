@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Tambah Teks</h2>

        <form method="POST" action="{{ route('dokumen.store') }}">
            @csrf
            <div class="form-group">
                <label for="label">Judul</label>
                <input type="text" class="form-control" id="label" name="label" required>
            </div>
            <div class="form-group">
                <label for="konten">Isi</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required></textarea>
            </div>
            <br>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('dokumen.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>

    <style>
        /* Gaya untuk judul halaman */
        h2 {
            color: #007bff; /* Warna biru yang menarik */
        }

        /* Gaya untuk label formulir */
        label {
            font-weight: bold;
            color: #333; /* Warna abu-abu gelap */
        }

        /* Gaya untuk tombol Simpan */
        .btn-primary {
            background-color: #28a745; /* Warna hijau yang menarik */
            border-color: #28a745;
        }

        /* Gaya untuk tombol Kembali */
        .btn-secondary {
            background-color: #6c757d; /* Warna abu-abu */
            border-color: #6c757d;
        }
    </style>
@endsection
