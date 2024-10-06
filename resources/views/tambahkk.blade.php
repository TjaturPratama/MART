<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah KK</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/tambahkk.css">
</head>

<body>
    <nav>
        <div class="gambar">
            <a href="/home"><img src="img/Logo.jpeg" alt="logo"></a>
        </div>
        <h1>Form KK Penduduk</h1>
    </nav>

    <div class="container">
        <form action="/tambahkk" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-container">
                <label for="no-kk">No. KK</label>
                <input type="text" id="no-kk" name="no_kk" placeholder="Masukkan No. KK">

                <label for="nama-kepala">Nama Kepala Keluarga</label>
                <input type="text" id="nama-kepala" name="kepala_keluarga"
                    placeholder="Masukkan Nama Kepala Keluarga">

                <label for="file-upload">Unggah KK</label>

                <div class="file-upload">
                    <input type="file" id="uploadkk" name="path_kk">
                    <label for="uploadkk">Masukkan KK</label>
                </div>

                <div class="buttons-container">
                    <a href="/KK"><button type="button">Cancel</button></a>
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>


</body>

</html>
