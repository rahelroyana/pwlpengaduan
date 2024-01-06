@extends('layout')

@section('content')
    <h1>Data Kelurahan</h1>
    <!-- Tampilkan data kelurahan dari controller -->
    <table class="table">
        <thead>
            <tr>
                <th>Nama Kelurahan</th>
                <th>Kode Pos</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Provinsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelurahan as $data)
                <tr>
                    <td>{{ $data->nama_kelurahan }}</td>
                    <td>{{ $data->kode_pos }}</td>
                    <td>{{ $data->kota }}</td>
                    <td>{{ $data->kecamatan }}</td>
                    <td>{{ $data->provinsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection