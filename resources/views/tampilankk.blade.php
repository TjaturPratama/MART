<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Halaman KK</title>
    <link rel="stylesheet" href="/css/tampilankk.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="/img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>KK</h1>
    </nav>

    <div class="kembali">
        <a href="/KK"><button type="submit">Back</button></a>
    </div>

    <div class="container">
        <div class="left-section">
            <img src="/{{ $kk->path_kk }}" alt="Kartu Keluarga">
        </div>
        <form action="/editkk/delete/id/{{ $kk->id }}" method="post">
            @csrf
            <div class="right-section">
                <div class="field">
                    <h3>Nama Kepala Keluarga</h3>
                    <input type="text" value="{{ $kk->kepala_keluarga }}" readonly>
                </div>
                <div class="field">
                    <h3>No. KK</h3>
                    <input type="text" value="{{ $kk->no_kk }}" readonly>
                </div>
                <div class="buttons-container">
                    <button>Delete</button>
                    <a href="/tampilan/editkk/id={{ $kk->id }}">Edit</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
