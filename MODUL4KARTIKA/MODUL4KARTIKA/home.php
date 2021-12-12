<?php include '../MODUL4KARTIKA/header.php';
include '../MODUL4KARTIKA/config.php';

?>
<?php
    if (isset($_SESSION['pesan'])) { ?>
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['pesan']; ?>
        </div>
<?php } ?>

<div class="container">
    <div class="row">
        <div class="mt-4 p-5 bg-success text-white rounded text-center">
            <h2 class="fw-bold text-black">EAD TRAVEL</h2>
        </div>
        <?php
        include 'dataDummy.php';
        $awalId = 1;
        foreach ($wisata as $liburan) {
        ?>
            <div class="col-md-4">
                <div class="card" style="margin-top: 30px;">
                    <img src="../MODUL4KARTIKA/asset/img/<?php echo $liburan['gambar']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h1 class="card-tittle fw-bold" style="font-size: 15px;"><?php echo $liburan['nama']; ?></h1>
                        <p class="card-text" style="font-size: 13px;"><?php echo $liburan['deskripsi']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush  fw-bold">
                        <li class="list-group-item">Rp.<?php echo $liburan['harga']; ?></li>
                    </ul>
                    <div class="card-footer text-center">
                        <button type="button" class="col-md-12 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $awalId ?>">
                            Pesan Sekarang
                        </button>
                        
                    </div>
                    <div class="modal fade" id="exampleModal<?= $awalId++ ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Tanggal</p>
                                    <form method="POST">
                                        <input type="date" class="form-control" name="date">
                                        <br>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" data-bs-toggle="<?php echo $liburan['id']; ?>" name="submit<?= $awalId ?>" class="btn btn-primary" data-bs-dismiss="modal">Tambahkan</button>
                                        <!-- <a class="btn btn-primary" href="../MODUL4KARTIKA//prosescart.php?id=<?php echo $liburan['id']; ?>">Tambahkan</a> -->
                                    </form>
                                    <?php
                                    $namaVar = "submit" . $awalId;
                                    if (isset($_POST[$namaVar])) {
                                        $user_id = $_SESSION['id'];
                                        $nama = $liburan['nama'];
                                        $lokasi = $liburan['lokasi'];
                                        $harga = $liburan['harga'];
                                        $tanggal = $_POST['date'];


                                        mysqli_query($config, "INSERT INTO booking (user_id,nama_tempat,lokasi,harga,tanggal) VALUES ('$user_id','$nama','$lokasi', '$harga', '$tanggal')");
                                        $notifCart = "Berhasil ditambahkan";
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php  } ?>                      
    </div>
</div>

<!-- <?php
        $_SESSION['nama_tempat'] = $pesan['nama'];
        $_SESSION['nama_tempat'] = $pesan['nama'];
        ?>  -->
<br>
<br>
<br>
<br>

<?php include '../MODUL4KARTIKA/footer.php'; ?>