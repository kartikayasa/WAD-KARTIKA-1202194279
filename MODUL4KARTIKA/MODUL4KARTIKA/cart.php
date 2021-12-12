<?php include 'header.php'; 

?>
<?php if (isset($_SESSION['hapus'])) { ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <?php echo $_SESSION['hapus']; ?>
    </div>
<?php } ?>

    <div class="container" >
        <div class="row">
            <table class="table table-striped" style="margin-top: 5%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Lokasi</th>
                        <th>Tanggal perjalanan</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                  <?php 
                    include 'config.php';
                    $data = mysqli_query($config,"SELECT * FROM booking");
                    $total = 0;
                    $no = 1;
                    while($cart = mysqli_fetch_assoc($data)){
                ?>
                <tbody>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $cart['nama_tempat'] ?></td>
                        <td><?php echo $cart['lokasi'] ?></td>
                        <td><?php echo $cart['tanggal'] ?></td>
                        <td>Rp.<?php echo $cart['harga'] ?></td>
                        <td><a href="../MODUL4KARTIKA/hapus.php?id=<?php echo $cart['id']; ?>" class="btn btn-danger">Hapus</a></td>
                    </tr>

                </tbody>
                                        <?php $total += $cart['harga']; ?>
                    <?php } ?>
                <thead>
                    <tr>
                        <th colspan="4">Total</th>
                        <th colspan="2">Rp.<?php echo $total; ?></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
<?php include 'footer.php'; ?>