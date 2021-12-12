<?php include 'header.php'; 
include 'config.php';


if (isset($_POST['edit'])){
    $id = $_SESSION['id'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];


    $data =   mysqli_query($config, "UPDATE user SET nama = '$nama', no_hp = '$nohp' WHERE id = '$id'");
    if ($data) {
        $notif = "Berhasil diubah";
    } 
    
    if ($repass == $password) {
        mysqli_query($config, "UPDATE user SET password = '$password' WHERE id = '$id'");
        $notif = "Berhasil diubah";
    } else{
        $notif = "Password tidak sesuai";
    }


}
?>
    <?php if (isset($notif)) { ?>
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php echo $notif; ?> 
        </div>
     <?php }?>
    <div class="container">
        <div class="row justify-content-center">
           <div class="card text-black bg-white mb-6" style="max-width: 60rem; margin-top: 5%;">
                <div class=" tittle card-header bg-white text-center fw-bold">Profile</div>
                <div class="card-body">
                    <?php  
                        $id = $_SESSION['id'];
                        $data = mysqli_query($config,"SELECT * FROM user WHERE id = '$id'");
                        while($user = mysqli_fetch_assoc($data)){
                    ?>
                    <form class="form-horizontal" method="POST" role="form">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <p style="padding-top: 7px;"><?php echo $user['email']; ?></p>
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" value="<?php echo $user['nama']; ?>" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No Handphone</label>
                            <div class="col-sm-10">
                            <input type="text" name="nohp" class="form-control" value="<?php echo $user['no_hp']; ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kata Sandi</label>
                            <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Konf Kata Sandi</label>
                            <div class="col-sm-10">
                            <input type="password" name="repass" class="form-control" ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Warna Navbar</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" ">
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <button type="submit" name="edit" class="col-md-2 btn btn-primary">Simpan</button>
                            &nbsp; &nbsp;
                            <button type="reset" class="col-md-2 btn btn-warning">Cancel</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
<?php include 'footer.php'; ?>