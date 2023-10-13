<?php

$koneksi = mysqli_connect("localhost", "root","","digitalent");
     
    if(mysqli_connect_errno()){
        echo"Koneki Database Gagal : ". mysqli_connect_error();
    }
?>