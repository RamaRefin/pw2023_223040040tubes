<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'functions.php';

// Cek tombol submit sudah jalan atau belum
if (isset($_POST["submit"])) {

    //query insert data

    //cek data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href= 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
                alert ('data gagal ditambahkan!');
                document.location.href= 'index.php';
            </script>
            ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1> Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" required>
            </li>
            <li>
                <label for="nrp">Nama : </label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for="nrp">Email : </label>
                <input type="text" name="email" required>
            </li>
            <li>
                <label for="nrp">Jurusan : </label>
                <input type="text" name="jurusan" required>
            </li>
            <li>
                <label for="nrp">Gambar : </label>
                <input type="file" name="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>

</body>

</html>