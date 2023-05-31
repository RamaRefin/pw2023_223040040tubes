<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'functions.php';

// ambil data di url

$id = $_GET["id"];
//query data mahasiswa berdasarkan id nya

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek tombol submit sudah jalan atau belum
if (isset($_POST["submit"])) {


    //cek data berhasil di ubah
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di ubah!');
                document.location.href= 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
                alert ('data gagal di ubah!');
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
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1> Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="GambarLama" value="<?= $mhs["gambar"]; ?>">

        <ul>
            <li>
                <label for="Judul">Judul : </label>
                <input type="text" name="Judul" required value="<?= $mhs["Judul"] ?>">
            </li>
            <li>
                <label for="Deskripsi">Deskripsi : </label>
                <input type="text" name="Deskripsi" required value="<?= $mhs["Deskripsi"] ?>">
            </li>
            <li>
                <label for="Harga">Harga item : </label>
                <input type="text" name="Harga" required value="<?= $mhs["Harga"] ?>">
            </li>
            <li>
                <label for="ket">Ket : </label>
                <input type="text" name="ket" required value="<?= $mhs["ket"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="100"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>

</body>

</html>