<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>
<title>mengakses data mahasiswa</title>
</head>
<body>
    <?php
    $_SESSION['counter']++;
    $_SESSION['nama_pengunjung'] = "Abdul";
    echo "Selamat Datang ".$_SESSION['nama_pengunjung']."</br>";
    echo "Anda telah mengunjungi halaman ini sebanyak".$_SESSION['counter']." kali.";
    ?>
    </body>
    </html>