<?php

require '../admin/functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa
            WHERE
            Judul LIKE '%$keyword%' OR
            Deskripsi LIKE   '%$keyword%' OR 
            Harga LIKE '%$keyword%' OR
            ket LIKE '%$keyword%'
";;
$mahasiswa = query($query);

?>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>ket</th>
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
            <td><?= $row["Judul"]; ?></td>
            <td><?= $row["Deskripsi"]; ?></td>
            <td><?= $row["Harga"]; ?></td>
            <td><?= $row["ket"]; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>


</table>