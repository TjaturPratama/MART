<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KTP</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/liatktp.css">
    <link rel="stylesheet" href="/css/datadiri.css">


</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="/img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>KTP</h1>
    </nav>

    <div class="kembali">
        <a href="/KTP"><button>Back</button></a>
    </div>


    <div class="tabel">
    <table>
        <tr>
            <td rowspan="9"><img src="/{{ $ktp->path_ktp }}"></td>
            <td>Nama Lengkap</td>
            <td>{{ $ktp->nama }}</td>
        </tr>

        <tr>
            <td>NIK</td>
            <td>{{ $ktp->nik }}</td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>{{ $ktp->alamat }}</td>
        </tr>

        <tr>
            <td>Tempat, Tanggal lahir</td>
            <td>{{ $ktp->tempat_lahir }}, {{ $ktp->tanggal_lahir }}</td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>{{ $ktp->agama }}</td>
        </tr>

        <tr>
            <td>No. KK</td>
            <td>{{ $ktp->no_kk }}</td>
        </tr>

        <tr>
            <td>Status</td>
            <td>{{ $ktp->status }}</td>
        </tr>

        <tr>
            <td>No. telpon</td>
            <td>{{ $ktp->no_telepon }}</td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>{{ $ktp->jenis_kelamin }}</td>
        </tr>
    </table>
    </div>

    {{-- cara manggil data klo mau ngedit --}}
    {{-- <span>nama : {{ $ktp->nama }}</span>
    <span>no_ktp : {{ $ktp->nik }}</span>
    <img src="/img/{{ $ktp->path_ktp }}" alt={{ $ktp->path_ktp }}> --}}


</body>

</html>
