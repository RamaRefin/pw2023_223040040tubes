<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'functions.php';

// pagination 
//konfigurasi
$jumlahdata = 3;
$result = mysqli_query($conn, "SELECT * FROM mahasiswa ");
$jumlahdatauser = mysqli_num_rows($result);
$jumlahpage = ceil($jumlahdatauser / $jumlahdata);
$onpage = (isset($_GET["page"])) ? $_GET["page"] : 1;
$firstdata = ($jumlahdata * $onpage) - $jumlahdata;

// if (isset($_GET["page"])) {
//     $onpage = $_GET["page"];
// } else {
//     $onpage = 1;
// }






$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $firstdata, $jumlahdata");


//tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <a href="logout.php">Log out</a>

    <h1> Daftar mahasiswa </h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="35" autofocus placeholder="Pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>

    </form>
    <br><br>

    <!-- navigasi -->
    <?php if ($onpage > 1) : ?>
        <a href="?page=<?= $onpage - 1 ?>">&laquo;</a>
    <?php endif; ?>



    <?php for ($i = 1; $i <= $jumlahpage; $i++) : ?>
        <?php if ($i == $onpage) : ?>
            <a href="?page=<?= $i; ?>" style="font-weight: bold; color: red; "><?= $i; ?></a>
        <?php else : ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>


    <?php endfor; ?>

    <?php if ($onpage < $jumlahpage) : ?>
        <a href="?page=<?= $onpage + 1 ?>">&raquo;</a>
    <?php endif; ?>


    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                    <a href=" hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>


    </table>


</body>

</html>