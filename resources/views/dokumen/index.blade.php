@extends('layouts.app')

@section('content')
    <style>
        /* Tambahkan gaya CSS di sini */

        /* Gaya untuk container */
        .container {
            margin-top: 1px;
        }

        /* Gaya untuk judul halaman */
        h1 {
            color: #007bff; /* Warna biru yang menarik */
        }

        /* Gaya untuk tombol "Tambah Teks" dan "Hitung TFIDF" */
        .btn-primary {
            background-color: #28a745; /* Warna hijau yang menarik */
            border-color: #28a745;
        }

        /* Gaya untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Gaya untuk header tabel */
        th {
            background-color: #007bff; /* Warna biru untuk header tabel */
            color: white;
        }

        /* Gaya untuk baris tabel */
        td {
            border: 1px solid #dee2e6;
            padding: 8px;
        }

        /* Gaya untuk tombol Lihat, Edit, Hapus */
        .btn-info, .btn-warning, .btn-danger {
            margin-right: 5px;
        }

        /* Gaya untuk alert success */
        .alert-success {
            margin-top: 20px;
        }
    </style>

    <div class="container">
        <h1>Daftar Teks</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('dokumen.create') }}" class="btn btn-primary">Tambah Teks</a>
        <a href="{{ route('calculate.tfidf') }}" class="btn btn-primary">Hitung TFIDF</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokumen as $doc)
                    <tr>
                        <td>{{ $doc->id }}</td>
                        <td>{{ $doc->label }}</td>
                        <td>
                            <a href="{{ route('dokumen.show', $doc->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('dokumen.edit', $doc->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('dokumen.destroy', $doc->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus teks ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
