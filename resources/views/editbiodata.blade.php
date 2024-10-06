<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Biodata</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/editbiodata.css">
</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="/img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>Form Edit Biodata Penduduk</h1>
    </nav>

    <div class="container">
        <form action="/editbiodata/edit/id={{ $dataBiodata->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <table class="form-table">
                <tr>
                    <td>NIK</td>
                    <td><input type="text" name="nik" placeholder="Masukkan NIK" value="{{ $dataBiodata->nik }}">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder="Masukkan Nama"
                            value="{{ $dataBiodata->nama }}">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" placeholder="Masukkan Alamat"
                            value="{{ $dataBiodata->alamat }}"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir"
                            value="{{ $dataBiodata->tempat_lahir }}"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir"
                            value="{{ $dataBiodata->tanggal_lahir }}"></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="agama" placeholder="Masukkan Agama"
                            value="{{ $dataBiodata->agama }}">
                    </td>
                </tr>
                <tr>
                    <td>No. KK</td>
                    <td><input type="text" name="no_kk" placeholder="Masukkan No. KK"
                            value="{{ $dataBiodata->no_kk }}"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status" placeholder="Masukkan Status"
                            value="{{ $dataBiodata->status }}"></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><input type="text" name="no_telepon" placeholder="Masukkan No. Telepon"
                            value="{{ $dataBiodata->no_telepon }}"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin"
                            value="{{ $dataBiodata->jenis_kelamin }}"></td>
                </tr>
            </table>



            <div class="upload-container">
                <h3>Unggah Berkas</h3> <br>

                <input type="file" id="fotoDiri" name="path_pp">
                <label for="fotoDiri">Foto Diri</label>

                <input type="file" id="ktp" name="path_ktp">
                <label for="ktp">KTP</label>


            </div>

            <div class="buttons-container">
                <a href="/datadiri/id={{ $dataBiodata->id }}">Cancel</a>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>


</body>

</html>
