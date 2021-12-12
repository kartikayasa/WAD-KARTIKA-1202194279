    <?php include 'header.php'; ?>

        <div class="container">
            <div class="row">
            <?php 
                include 'config.php';
                $cari = mysqli_query($config,'SELECT * FROM buku_table');
                $cari2 = mysqli_num_rows($cari);
                if($cari2 < 0) { ?>

                <?php while($buku = mysqli_fetch_array($cari)) {?>

                        <div class="col-md-4">
                            <div class="card" style="margin-top: 30px;">
                                <img src="../MODUL3KARTIKA/asset/image/<?php echo $buku['gambar']; ?>" width="30" class="card-img-top">
                                <div class="card-body"> 
                                    <h1 class="card-tittle fw-bold" style="font-size: 15px;" ><?php echo $buku['judul_buku']; ?></h1>
                                    <p class="card-text" style="font-size: 13px;"><?php echo $buku['deskripsi']; ?></p>
                                    <a href="../MODUL3KARTIKA/halamanDetail.php?id=<?php echo $buku['id']; ?>"  alt class="btn btn-primary">Tampilkan lebih lanjut</a>
                                </div>
                            </div>
                        </div>

                    <?php }  ?>
                <?php } elseif ($cari2 < 1) { ?>
                    <div class="container">
                        <div class="row">
                            <div class="text-center text-black">
                                <h1 style="margin-top: 50px;">Belum ada buku</h1>
                                <hr align="center" width="100%" size="5">
                                <p>Silahkan Menambahkan buku</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <footer style="margin-top: 20%;">
            <div class="container">
                <div class="row">
                    <div class="mt-4 p-5 bg-light text-white rounded text-center">
                        <h2 class="text-black text-center">Pepustakaan EAD</h2>
                        <p class="text-black">&copy Kartika_1202194279</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    </html>