<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "wad_modul4";
    
    $config = mysqli_connect($server,$username,$password,$database) or die("Koneksi Gagal");
?>