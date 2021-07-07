<?php
if (!isset ($_POST["nama"])) {
    header("Location: LatihanPOST1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>SELAMAT DATANG, <?= $_POST["nama"]; ?> </h1>
    <a href="LatihanPOST1.php">Kembali Kehalaman</a>
</body>
</html>