<?php session_start(); 

if (isset($_SESSION['login']) != true) {
    header("location : ../MODUL4KARTIKA/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>MODUL4KARTIKA</title>
</head>
<style>
    .tittle{
        font-size: 20px;
        margin-top: 10px;
    }
</style>
<body style="background: #FEF7E6;">
     <nav class="navbar navbar-expand-sm bg-info navbar-light  ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../MODUL4KARTIKA/home.php">EAD Travel</a>
            <ul class="navbar-nav">
            <?php if ($_SESSION['login'] = true) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="../MODUL4KARTIKA/cart.php">Cart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       <?php 
                            include 'config.php';
                            $id = $_SESSION['id'];
                            $data = mysqli_query($config,"SELECT * FROM user WHERE id = '$id'");
                            while($cari = mysqli_fetch_assoc($data)){
                       ?>
                            Selamat Datang, <?php echo $cari['nama']; ?>
                       <?php }?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../MODUL4KARTIKA/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="../MODUL4KARTIKA/logout.php">Logout</a></li>
                    </ul>
                </li>
            <?php } else { ?> 
                <li class="nav-item">
                    <a class="nav-link" href="../MODUL4KARTIKA/register.php">Register</a>
                </li>
                    &nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="../MODUL4KARTIKA/login.php">Login</a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </nav>
    