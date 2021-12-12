<?php session_start(); 
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
<?php 
include 'config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $time = time();
    $setcookie = isset($_POST['setcookie'])? $_POST['setcookie']: '';

    $data = mysqli_query($config,"SELECT * FROM user WHERE email = '$email' AND password = '$password'");
    if (mysqli_num_rows($data) == 1) {
        $cari = mysqli_fetch_assoc($data);
        $_SESSION['login'] = true;
        $_SESSION['id'] = $cari['id'];
        $_SESSION['pesan'] = "Login Berhasil";

        if ($setcookie) {
            setcookie("cookie['login']", $email, $time + 3600);
            setcookie("cookie['password']", $password, $time + 3600); 
        }
        header("Location: ../MODUL4KARTIKA/home.php");
        exit();
    } else{
        unset($_SESSION['notif']);
        $notiff = "Email dan Password Salah";
    }
}


?>
<body style="background: #FEF7E6;">
     <nav class="navbar navbar-expand-sm bg-info navbar-light  ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../MODUL3KARTIKA/home.php">EAD Travel</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../MODUL4KARTIKA/register.php">Register</a>
                </li>
                    &nbsp;
                <li class="nav-item">
                    <a class="nav-link active" href="../MODUL4KARTIKA/login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php 
     if (isset($notiff)) { ?>
         <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php echo $notiff; ?> 
        </div>
    <?php } ?>
    <?php 
     if (isset($_SESSION['notif'])) { ?>
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['notif']; ?> 
        </div>
     <?php }?>
    <div class="container">
        <div class="row justify-content-center">
           <div class="card text-black bg-white mb-6" style="max-width: 23rem; margin-top: 10%;">
                <div class=" tittle card-header bg-white text-center fw-bold">Login</div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input class="form-control" name="email" type="email">
                        </div>
                        &nbsp;
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input class="form-control" name="password" type="password">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="setcookie" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Remember Me
                            </label>
                        </div>
                        &nbsp;
                        <div class="form-group text-center">
                            <button type="submit" name="submit" class="btn btn-primary col-md-6">Login</button>
                        </div>
                        &nbsp;
                        <div class="form-group text-center">
                            <p style="font-size: 15px;">Anda belum punya akun? <span><a href="../MODUL4KARTIKA/register.php">Register</a></span></p>
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
    <br><br><br>
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