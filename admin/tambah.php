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
    <title>Tambah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel=" stylesheet" href="tambah.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="img/admin.png" alt="admin.png">
                        <span class="nav-item"> Refin </span>
                    </a></li>
                <li><a href="../admin/Dashboard.php">
                        <i class="fas fa-solid fa-house"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-user"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-wallet"></i>
                        <span class="nav-item">Wallet</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-chart-bar"></i>
                        <span class="nav-item">Analytics</span>
                    </a></li>
                <li><a href="../admin/tambah.php">
                        <i class="fas fa-solid fa-tasks"></i>
                        <span class="nav-item">Add Item</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-cog"></i>
                        <span class="nav-item">Setting</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                <li><a href="../admin/logout.php" class="logout">
                        <i class="fas fa-solid fa-sign-out-alt"></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
            </ul>
        </nav>
        <div class="container2">
            <form action="" method="post" enctype="multipart/form-data">
                <h1> Tambah Item</h1>

                <ul>
                    <li>
                        <label for="nrp"> Nama Item </label>
                        <input type="text" name="nrp" required>
                    </li>
                    <li>
                        <label for="nrp"> Deskripsi Item</label>
                        <input type="text" name="nama" required>
                    </li>
                    <li>
                        <label for="nrp"> Harga Item </label>
                        <input type="text" name="email" required>
                    </li>
                    <li>
                        <label for="nrp">Jurusan </label>
                        <input type="text" name="jurusan" required>
                    </li>
                    <li>
                        <label for="nrp">Gambar </label>
                        <input type="file" name="gambar" required>
                    </li>
                    <li>
                        <button type="submit" name="submit">Tambah Data!</button>
                    </li>
                </ul>

            </form>
        </div>
    </div>
</body>

</html>