<?php 
include 'config.php';
$id = $_GET['id'];

mysqli_query($config, "DELETE FROM booking WHERE id ='$id'");
$_SESSION['hapus'] = "Berhasil dihapus";
header("location: ../MODUL4KARTIKA/cart.php");



?>