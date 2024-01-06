<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Pengaduan Masyarakat</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
   <style>
    body{
    background-color: rgb(150, 179, 212);
}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ccc;
}

.navbar-nav{
    font-size: larger;
    display: flex;
    margin-left: 500px;
    
}
.navbar-brand{
    color: aliceblue;
    font-size: 20px;
    margin-top: 50px;

}
.nav-item{
    margin-left: 40px;
    margin-top: -20px;
    color: aliceblue;
    list-style-type:none;
   
}
.nav-link{
    color: aliceblue;
     text-decoration: none;
}
.navigasi{
    background-color: rgb(40, 64, 118);
    height: 50px;
    margin-top: -10px;
    padding: 10px;
}
.collapse{
    display: flex;
}
.button-tambah{
   
    color: rgb(67, 104, 137);
    text-decoration: none;
    
}
   </style>
</head>
<body>
    <nav class="navigasi">
        <a class="navbar-brand">Pengaduan Masyarakat</a>

        <div class="collapse" id="navbarNav">
            <ul class="navbar-nav" {list-style-type:none;}>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengaduan.index') }}">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('akun.index') }}">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelurahan.index') }}">Kelurahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penduduk.index') }}">Penduduk</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <form action="{{ route('akun.store') }}" method="POST">
<table>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" id=""></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" id=""></td>

    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email" id=""></td>
    </tr>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama" id=""></td>
   
        <div class="col">
               <button class="button-tambah">Simpan</button>
            </div>
</table>

</form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

