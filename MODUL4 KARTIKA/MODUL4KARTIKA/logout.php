<?php 
session_start();

unset($_SESSION['login']);
header("location: ../MODUL4KARTIKA/login.php");

?>