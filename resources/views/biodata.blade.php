<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/biodata.css">
    <title>Halaman Biodata Penduduk</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="/img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>
            <a href="/biodata">Biodata</a>
        </h1>
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
    </nav>

    <form method="GET" action="/biodata/search/name">
        <div class="cari">
            <input type="text" name='search' placeholder="Search....">
            <button type="submit">Search</button>
            <a href="/tambahbiodata">New</a>
        </div>
    </form>

    @foreach ($biodata as $e)
        <div class="result">
            <a href="/datadiri/id={{ $e->id }}">{{ $e->nama }} - NIK: {{ $e->nik }}</a>
        </div>
    @endforeach



</body>

</html>
