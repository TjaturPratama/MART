<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Biodata Penduduk</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/datadiri.css">
</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="/img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>Biodata</h1>
    </nav>

    <div class="kembali">
        <a href="/biodata"><button type="submit">Back</button></a>
    </div>

    <form action="/hapusbiodata/id={{ $dataBiodata->id }}" method="post">
        @csrf
        <div class="tabel">
            <table>
                <tr>
                    <td rowspan="9"><img src="/{{ $dataBiodata->path_pp }}"></td>
                    <td>Nama Lengkap</td>
                    <td>{{ $dataBiodata->nama }}</td>
                </tr>

                <tr>
                    <td>NIK</td>
                    <td>{{ $dataBiodata->nik }}</td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>{{ $dataBiodata->alamat }}</td>
                </tr>

                <tr>
                    <td>Tempat, Tanggal lahir</td>
                    <td>{{ $dataBiodata->tempat_lahir }}, {{ $dataBiodata->tanggal_lahir }}</td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td>{{ $dataBiodata->agama }}</td>
                </tr>

                <tr>
                    <td>No. KK</td>
                    <td>{{ $dataBiodata->no_kk }}</td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>{{ $dataBiodata->status }}</td>
                </tr>

                <tr>
                    <td>No. telpon</td>
                    <td>{{ $dataBiodata->no_telepon }}</td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $dataBiodata->jenis_kelamin }}</td>
                </tr>
            </table>
        </div>

        

        <div class="crud">
            <a href="/editbiodata/edit/id={{ $dataBiodata->id }}">Edit</a>
            <button type="submit">delete</button>
        </div>
    </form>

</body>

</html>
