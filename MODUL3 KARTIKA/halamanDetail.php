    <?php include 'header.php'; 
    include 'config.php';

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];

        mysqli_query($config, "UPDATE buku_table SET judul_buku = '$judul', penulis_buku = '$penulis', tahun_terbit = '$tahun', deskripsi='$deskripsi', bahasa = '$bahasa' WHERE id = '$id'");
    }

    ?>
    <style>
        .kartu{
            margin-top: 30px;
        }
        h2{
            font-weight: bold;
        }
        h1{
            font-weight: bold;
        }
        label{
            font-weight: bold;
        }
        .form-group{
            margin-top: 20px;
        }
        .gambar{
            width: 30%;
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
    <div class="container">
            <div class="row">
                <div class="shadow p-3 mb-5 bg-white kartu rounded">
                    <div class="col-md-12">
                        <h1 class="text-center">Detail Buku</h1>
                        <div class="container">
                            <div class="row">
                                <?php 
                                    $id = $_GET['id'];

                                    $cari = mysqli_query($config,"SELECT * FORM buku_table WHERE id = '$id'");
                                    while($buku = mysqli_fetch_array($cari)) {
                                ?>
                                <div class="text-center foto">
                                    <img class="gambar" src="../MODUL3KARTIKA/asset/image/<?php echo $buku['gambar'];?>">
                                </div>
                                <hr align="center" width="100%" size="5">
                                <div class="col-md-12">
                                    <label class="form-label">Judul : </label>
                                    <p><?php echo $buku['judul_buku']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Penulis : </label>
                                    <p><?php echo $buku['penulis_buku']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Tahun terbit : </label>
                                    <p><?php echo $buku['tahun_terbit']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Deskripsi : </label>
                                    <p>B<?php echo $buku['deskripsi']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Bahasa : </label>
                                    <p><?php echo $buku['bahasa']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Tag : </label>
                                    <p><?php echo $buku['tag']; ?></p>
                                </div>
                                <div class="col-md-6" style="margin-bottom: 30px;">
                                    <button type="button" class="btn btn-primary col-md-12" data-bs-toggle="modal" data-bs-target="#myModal">Sunting</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="../MODUL3KARTIKA/hapus.php?id=<?php echo $buku['id']; ?>" class="btn btn-danger col-md-12">hapus</a>
                                </div>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Sunting</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form method="POST">
                                                    <div class="form-group">
                                                        <label class="form-label" >Judul Buku</label>
                                                        <input type="text" class="form-control" name="judul" value="<?php echo $buku['judul_buku']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" >Penulis</label>
                                                        <input type="text" class="form-control" name="penulis" value="<?php echo $buku['penulis_buku']; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" >Tahun terbit</label>
                                                        <input type="text" class="form-control" name="tahun" value="<?php echo $buku['tahun_terbit']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" >Deskripsi</label>
                                                        <textarea class="form-control" cols="30" name="deskripsi" rows="5"><?php echo $buku['deskripsi']; ?></textarea>
                                                    </div>
                                                <div class="form-group">
                                                        <label for="">Bahasa</label>&nbsp;&nbsp;
                                                        <?php 
                                                            if($buku['bahasa'] == 'Indonesia'){ ?>
                                                            <input type="radio" class="form-check-input" id="radio1" name="bahasa" value="Indonesia" checked> Indonesia
                                                            <input type="radio" class="form-check-input" id="radio1" name="bahasa" value="Lainnya"> Lainnya
                                                        <?php } ?>
                                                            &nbsp;
                                                        <?php 
                                                            if($buku['bahasa'] == 'Lainnya'){ ?>
                                                            <input type="radio" class="form-check-input" id="radio1" name="bahasa" value="Indonesia"> Indonesia
                                                            <input type="radio" class="form-check-input" id="radio1" name="bahasa" value="Lainnya" checked> Lainnya
                                                        <?php } ?>
                                                            
                                                    </div>
                                                    <br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" name="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan perubahan</button>
                                                    </div>
                                            </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <?php include 'footer.php'; ?>