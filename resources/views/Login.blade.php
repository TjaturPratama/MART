<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">>
</head>

<body>
    <div class="login-form">
        <form action="/login" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:white; list-style:none; margin-bottom:1px;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="text" id="admin" name="name" placeholder="name">
            <input type="password" id="password" name="password" placeholder="password">
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="right-panel">
        <img src="img/Logo.jpeg" alt="Logo" width="535" height="595">
    </div>

    {{-- <script src="js/script.js"></script> --}}

</body>

</html>
