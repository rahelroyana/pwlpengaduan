@extends('layout')

@section('content')
    <h1>Data Penduduk</h1>
    <!-- Tampilkan data penduduk dari controller -->
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penduduk as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->tempat_lahir }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_hp }}</td>
                    <td>{{ $data->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection