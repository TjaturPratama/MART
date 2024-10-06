<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>Halaman Home</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>HOME</h1>
        <ul>
            <li>
                <a href="/biodata">Biodata</a>
            </li>
            <li>
                <a href="/KK">KK</a>
            </li>
            <li>
                <a href="/KTP">KTP</a>
            </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </nav>

    <div class="profil">
        <img src="img/pp.png" alt="Gambar">
    </div>

    <div class="profil">
        <p><strong>Nama Ketua Rt: </strong>{{ $nama }}</p>
        <p><strong>No. Hp:</strong> 0812-7898-318</p>
        <p><strong>Alamat:</strong> jl. Pattimura lrg. Bersama Komplek griya kenali asri RT 03, Kel. Kenali besar, Kec.
            Alam barajo</p>
        <p><strong>Jumlah Keluarga: </strong> {{ $jmlhKeluarga }}</p>
        <p><strong>Jumlah Penduduk: </strong> {{ $jmlhPenduduk }}</p>
    </div>


</body>

</html>
