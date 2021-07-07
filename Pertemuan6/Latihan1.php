<?php
$mahasiswa = [
    [
    "nama" => "Windy Ardolipik Denny",
    "email" => "windyardolipikdenny@gmail.com",
    "jurusan" => "Teknik Informatika"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
       <li>Nama : <?= $mhs["nama"]; ?></li>
       <li>Email : <?= $mhs["email"]; ?></li>
       <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>