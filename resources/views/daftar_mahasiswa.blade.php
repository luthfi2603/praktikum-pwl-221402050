<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <li>
                Nama : Marsyaloan Siburian <br>
                NIM : 221402071 <br>
                KOM : C <br><br>
                <form action="/detail_mahasiswa" method="POST">
                    @csrf
                    <button class="btn btn-info" type="submit">
                        Lihat detail [POST]
                    </button>
                </form> <br>
                <form action="/detail_mahasiswa" method="GET">
                    @csrf
                    <button class="btn btn-info" type="submit">
                        Lihat detail [GET]
                    </button>
                </form>
            </li>
        </ul>
    </div>
</body>
</html>