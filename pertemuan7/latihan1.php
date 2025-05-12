<?php
if (!isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["email"])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nrp"];?></li>
        <li><?= $_GET["email"];?></li>
    </ul>
    <a href="index.php"><h4>Kembali ke awal</h4></a>
</body>
</html>