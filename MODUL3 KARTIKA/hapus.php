<<<<<<< HEAD
<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($config,"DELETE FROM buku_table WHERE id = '$id'");
header('Location: ../MODUL3KARTIKA/home.php');

=======
<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($config,"DELETE FROM buku_table WHERE id = '$id'");
header('Location: ../MODUL3KARTIKA/home.php');

>>>>>>> 34eeca5de48c60c0704f448311604226051d3971
?>