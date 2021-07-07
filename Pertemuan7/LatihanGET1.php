<?php
$mahasiswa = [
    [
    "nama" => "Windy Ardolipik Denny",
    "email" => "windyardolipikdenny@gmail.com",
    "jurusan" => "Teknik Informatika"
    ],
     [
    "nama" => "joko",
    "email" => "joko@gmail.com",
    "jurusan" => "Teknik Industri"
    ]
];
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
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <li>
    <a href="latihanGET2.php?nama=<?= $mhs["nama"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?>
    </a>
    </li>
    <?php endforeach; ?>
</body>
</html>