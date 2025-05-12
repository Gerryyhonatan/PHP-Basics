<?php
// $_GET berbeda dengan method GET
// $_GET digunakan untuk mengirimkan data melalui URL

$mahasiswa = [
    [
        "nama" => "Sandhika",
        "nrp" => "203040001",
        "email" => "s@com"
    ],
    [
        "nama" => "Eko",
        "nrp" => "203040002",
        "email" => "e@com"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
            <li><a href="latihan1.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>"><?= $mhs["nama"]; ?></a></li>
    <?php endforeach;?>
    </ul>
</body>
</html>
