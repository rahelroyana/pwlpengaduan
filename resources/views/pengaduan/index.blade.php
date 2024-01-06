@extends('layout')

@section('content')
    <h1>Data Pengaduan</h1>
    <!-- Tampilkan data pengaduan dari controller -->
    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Jenis Kejahatan</th>
                <th>Nama</th>
                <th>Detail Kejadian</th>
                <th>Status Pengaduan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $data)
                <tr>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->tempat }}</td>
                    <td>{{ $data->jenis_kejahatan }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->detail_kejadian }}</td>
                    <td>{{ $data->status_pengaduan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection