<?php
if (!isset ( $_GET["nama"]) || !isset($_GET["email"]) || !isset($_GET["jurusan"])) {
    header ("Location: latihan1.php");
    exit;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiwa</h1>
    <ul>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="LatihanGET1.php">Kembali Kehalaman</a>
</body>
</html>