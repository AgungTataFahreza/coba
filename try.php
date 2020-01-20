<?php
    $qr=$_POST['qr'];
    //echo $qr;
    $banding="namaku";
    if (strcmp($qr , $banding) == 1) {
        echo "OK";
    } else {
        echo "gagal";
    }
?>