<?php
    session_start();
    include("function.php");
    echo check_login();
?>

<!DOCTYPE html>
<html>
    <head><title>Praktik Login Session</title></head>
    <body>
        <h1>Selamat Datang!</h1>
        <h3><a  href="profil.php">Edit Profil</a></h3>
        <h3><a href="logout.php">Logout!</a></h3>
    </body>
</html>
