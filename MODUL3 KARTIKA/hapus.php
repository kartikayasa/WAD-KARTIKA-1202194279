<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($config,"DELETE FROM buku_table WHERE id = '$id'");
header('Location: ../MODUL3KARTIKA/home.php');

?>