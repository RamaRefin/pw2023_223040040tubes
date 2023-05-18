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
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" required value="<?= $mhs["nrp"] ?>">
            </li>
            <li>
                <label for="nrp">Nama : </label>
                <input type="text" name="nama" required value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nrp">Email : </label>
                <input type="text" name="email" required value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="nrp">Jurusan : </label>
                <input type="text" name="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="nrp">Gambar : </label> <br>
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