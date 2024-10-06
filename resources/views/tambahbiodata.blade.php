<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Biodata</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/tambahbiodata.css">
</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>Form Biodata Penduduk</h1>
    </nav>

    <form action="/tambah-biodata" method="POST"
        enctype="multipart/form-data">
        @csrf

        <div class="container">
        <table class="form-table">
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
            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" placeholder="Masukkan NIK"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" placeholder="Masukkan Agama"></td>
            </tr>
            <tr>
                <td>No. KK</td>
                <td><input type="text" name="no_kk" placeholder="Masukkan No. KK"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" placeholder="Masukkan Status"></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td><input type="text" name="no_telepon" placeholder="Masukkan No. Telepon"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" style="width:20rem;">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
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
            <a href="/biodata"><button type="button">Cancel</button></a>
            <button type="submit">Save</button>
        </div>
    </form>

    </div>

</body>

</html>
