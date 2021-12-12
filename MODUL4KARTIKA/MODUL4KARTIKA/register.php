<?php session_start(); ?>
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
<?php 
include 'config.php';
if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['no_hp'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];

    $data = mysqli_query($config, "SELECT * FROM user");


            if ($repass == $password) {
                mysqli_query($config,"INSERT INTO user(nama,email,password,no_hp) VALUES('$nama','$email','$password','$nohp')");
                $_SESSION['notif'] = "Berhasil Registrasi";
                header("Location: ../MODUL4KARTIKA/login.php");
            } else{
                $notiff = "Password tidak sesuai";
            }

}

?>
<body style="background: #FEF7E6;">
     <nav class="navbar navbar-expand-sm bg-info navbar-light  ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../MODUL3KARTIKA/home.php">EAD Travel</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../MODUL4KARTIKA/register.php" >Register</a>
                </li>
                    &nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="../MODUL4KARTIKA/login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
           <div class="card text-black bg-white mb-6" style="max-width: 30rem; margin-top: 10%;">
                <div class=" tittle card-header bg-white text-center fw-bold">Register</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input class="form-control" name="nama" type="text" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input class="form-control" name="email" type="email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">No Handphone</label>
                            <input class="form-control" type="text" name="no_hp" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kata Sandi</label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Konfirmasi Kata Sandi</label>
                            <input class="form-control" type="password" name="repass" required>
                        </div>
                        <?php if (isset($notiff)) { ?>
                            <p class="text-danger"><?php echo $notiff; ?></p>
                        <?php } ?>
                        &nbsp;
                        <div class="form-group text-center">
                            <button name="submit" type="submit" class="btn btn-primary col-md-6">Daftar</button>
                        </div>
                        &nbsp;
                        <div class="form-group text-center">
                            <p style="font-size: 15px;">Anda sudah punya akun? <span><a href="../MODUL4KARTIKA/login.php">Login</a></span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="mt-4 p-4 bg-info text-white">
                    <p class="text-center">&copy;2021 Copyright KARTIKA_1202194279</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>