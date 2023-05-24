<?php

session_start();
require 'functions.php';

//cek cookie
if (isset($_COOKIE['login']) && isset($_COOKIE['key'])) {
    $srip = $_COOKIE['srip'];
    $loot = $_COOKIE['loot'];

    //ambil username bersama id

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username']));
    $_SESSION['login'] = true;



    //     if ($_COOKIE['login'] == 'true') {
    //         $_SESSION['login'] = 'true';
    //     }
}

if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}



if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;

            // cek rememberme

            if (isset($_POST['remember'])) {
                // buat cookie

                setcookie('srip', $row['id'], time() + 60);
                setcookie('loot', hash('sha256', $row['username'], time() + 60));
            }


            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>


    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;"> username / password salah </p>
    <?php endif; ?>

    <div class="container">
        <div class="login">
            <form action="" method="post">
                <h1> Login Admin </h1>
                <ul>
                    <li>
                        <label for="username">Username </label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">Password </label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me </label>
                    </li>
                    <li>
                        <button type="submit" name="login"> Login</button>
                    </li>
                </ul>

            </form>
        </div>

        <div class="right">
            <img src="img/ikung.jpg" alt="">
        </div>
    </div>

</body>

</html>