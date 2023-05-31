<?php
// KONEKSI KE DATABASE
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{
    global $conn;

    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);


    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa 
                VALUES
                ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar') 
                
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];


    //cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // cek apakah gambar yang di upload

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Yang anda upload bukan gambar');
        </script>";
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar');
        </script>";
    }

    //lolos pengecekan gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpname, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}




function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $Judul = htmlspecialchars($data["Judul"]);
    $Deskripsi = htmlspecialchars($data["Deskripsi"]);
    $Harga = htmlspecialchars($data["Harga"]);
    $ket = htmlspecialchars($data["ket"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambar;
    } else {
        $gambar = upload();
    }




    $query = "UPDATE mahasiswa SET
            Judul = '$Judul',
            Deskripsi = '$Deskripsi',
            Harga = '$Harga',
            ket = '$ket',
            gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
    WHERE
    nama LIKE '%$keyword%' OR
    nrp LIKE   '%$keyword%' OR 
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //username sudah ada / belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!')
                </script>";
        return false;
    }


    //cek konfirmasi password

    if ($password !== $password2) {
        echo "<script>
                    alert('konfirmasi password tidak sesuai!') 
                    </script> ";
        return false;
    }

    //enskripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}


// registrasi untuk user

function register($data)
{
    global $conn;

    $username1 = strtolower(stripslashes($data["username1"]));
    $email = strtolower(stripslashes($data["email"]));
    $password3 = mysqli_real_escape_string($conn, $data["password3"]);
    $password4 = mysqli_real_escape_string($conn, $data["password4"]);

    //username sudah ada / belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username1'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!')
                </script>";
        return false;
    }


    //cek konfirmasi password

    if ($password3 !== $password4) {
        echo "<script>
                    alert('konfirmasi password tidak sesuai!') 
                    </script> ";
        return false;
    }

    //enskripsi password 
    $password3 = password_hash($password3, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username1', '$email', '$password3')");

    return mysqli_affected_rows($conn);
}
