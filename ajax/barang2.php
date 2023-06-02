<?php

require '../admin/functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa
            WHERE
            Judul LIKE '%$keyword%' OR
            Deskripsi LIKE '%$keyword%' OR 
            Harga LIKE '%$keyword%' OR
            ket LIKE '%$keyword%'
";
$mahasiswa = query($query);
