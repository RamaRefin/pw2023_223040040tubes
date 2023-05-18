<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('srip', '', time() - 3600);
setcookie('loot', '', time() - 3600);


header("location: login.php");
exit;
