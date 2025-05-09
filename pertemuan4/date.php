<?php
    echo date("l, d-m-y");
    echo "<br>";
    echo time();
    
    echo "<br>";
    // mktime -> make time (membuat waktu sendiri), mktime(0,0,0,0,0,0) -> jam, menit, detik, bulan, tanggal, tahun
    echo date("l",mktime(0,0,0,10,10,2003))  // Detik yang sudah berlalu dari 1 Januari 1970 sampai 10 Oktober 2003
?>