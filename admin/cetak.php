<?php

require_once __DIR__ . '..\vendor\autoload.php';

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar item</title>
<body>
   <h1> Daftar Item </h1>
    <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>ket</th>
            </tr> ';

$i = 1;
foreach ($mahasiswa as $row) {
    $html .= '<tr>
        <td>' . $i++ . '</td>
        <td><img src="img/' . $row["gambar"] . '" width="100"></td>
        <td>' . $row["Judul"] . '</td>
        <td>' . $row["Deskripsi"] . '</td>
        <td>' . $row["Harga"] . '</td>
        <td>' . $row["ket"] . '</td>
    </tr>';
}

$html .= '</table>
</head>

    
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar-Item.pdf', \Mpdf\Output\Destination::DOWNLOAD);
