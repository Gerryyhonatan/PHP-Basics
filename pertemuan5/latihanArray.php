<?php
$angka = [3,5,2,1,11,7,9];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka); $i++) : ?>
        <div><?= $angka[$i];?></div>
    <?php endfor;?>
    <?php foreach($angka as $a) : ?>
        <div><?= $a;?></div>
    <?php endforeach;?>
</body>
</html>