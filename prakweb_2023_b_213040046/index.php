<?php

include('function.php');
// Query untuk mengambil data dari table buku
$buku = query('SELECT * FROM buku');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-primary">
    <div class="container">
        <span class="navbar-brand mb-1 px-5 text-white h1">BUKUKU</span>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">

            <div class="container mx-5 p-2">
                <h2 class="mb-5">DAFTAR BUKU</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">judul</th>
                        <th scope="col">pengarang</th>
                        <th scope="col">penerbit</th>
                        <th scope="col">tahun terbit</th>
                        <th scope="col">harga</th>
                        <th scope="col">Cover</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach ($buku as $books){ ?>
                    <tr>
                        <th scope="row"> <?= $no++?> </th>
                        <td> <?= $books["judul"]; ?> </td>
                        <td> <?= $books["pengarang"]; ?> </td>
                        <td> <?= $books["penerbit"]; ?> </td>
                        <td> <?= $books["tahun_terbit"]; ?> </td>
                        <td> <?= $books["harga"]; ?> </td>
                        <td>
                            <img src="<?= $books["gambar"];?>" width="50">
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>