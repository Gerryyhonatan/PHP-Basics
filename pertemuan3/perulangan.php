<?php
// Perulangan -> for, while, do while, foreach

/* 
for($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
*/

/* 
$i = 0;
while($i < 5) {
    echo $i . "<br>";
    $i++;
}
*/

/*
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while($i < 5);
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php
        for($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for($j = 1; $j <= 3; $j++) {
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for($j = 1; $j <= 3; $j++) : ?>
                    <td><?= "$i, $j"?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
