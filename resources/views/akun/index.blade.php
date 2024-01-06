@extends('layout')

@section('content')
    <h1>Data Akun</h1>
    <!-- Tampilkan data akun dari controller -->
    <table class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($akun as $data)
                <tr>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit">  <a class="button-tambah" href="{{ route('akun.create') }}">Tambah</a></button>
@endsection