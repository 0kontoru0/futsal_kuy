<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $database ="Kontoru";
    $koneksi = mysqli_connect($host,$user,$pass,$database);
    if(!$koneksi){
        echo ("gagal");
    }
    
?>