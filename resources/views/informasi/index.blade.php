@extends('layout')

@section('content')
    <h1>Data Informasi</h1>
    <!-- Tampilkan data informasi dari controller -->
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal Publikasi</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informasi as $data)
                <tr>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td>{{ $data->tanggal_publikasi }}</td>
                    <td>{{ $data->kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection