<?php include 'header.php'; 
include 'config.php';

if (isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $terbit = $_POST['terbit'];
    $deskripsi = $_POST['deskripsi'];
    $bahasa = $_POST['bahasa'];
    $tag = implode(",", $_POST['tag']);
    $gambar = $_FILES['gambar']['name'];

    $ekstensi = array('jpg','png','jpeg');
    $x = explode(".",$gambar);
    $ekstensinya = strtolower(end($x));
    $size = $_FILES['gambar']['size'];  
    $file_tmp = $_FILES['gambar']['tmp_name'];

    if (in_array($ekstensinya,$ekstensi)===true) {
        if ($size <= 23443540) {
            move_uploaded_file($file_tmp,'../MODUL3KARTIKA/asset/image/'.$gambar);
            $sql = mysqli_query($config,"INSERT INTO buku_table(judul_buku,penulis_buku,tahun_terbit,deskripsi,bahasa,tag,gambar) VALUES('$judul','$penulis','$terbit','$deskripsi','$bahasa','$tag','$gambar')");
            if ($sql) {
                 echo "<script>alert('Berhasil tambahkan!');history.go(-1);</script>";
                 header("Location: ../MODUL3KARTIKA/home.php");
            }
        } else{
        $notif = "*Size gambar melebihi kapasitas";
        }
    }else{
        $notif = "*Ekstensi  tidak sesuai";
    }
}


?>
  <div class="container">
        <div class="row">
            <div class="shadow p-3 mb-5 bg-white kartu rounded">
                <div class="col-md-12">
                    <h1 class="text-center">Tambah data Buku</h1>
                    <div class="container">
                        <div class="row">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label" >Judul Buku</label>
                                    <input type="text" name="judul" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" >Penulis</label>
                                    <input type="text" name="penulis" class="form-control" value="Kartika_1202194279" placeholder="Kartika_1202194279" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" >Tahun terbit</label>
                                    <input type="text" name="terbit" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" >Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" cols="30" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Bahasa</label>&nbsp;&nbsp;
                                        <input type="radio" class="form-check-input" id="radio1" name="bahasa" value="Indonesia" checked> Indonesia
                                        &nbsp;
                                        <input type="radio" class="form-check-input" id="radio1" name="bahasa" value="Lainnya" checked> Lainnya
                                    
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="">Tag</label>&nbsp;&nbsp;
                                             <input  type="checkbox" name="tag[]" value="Pemograman"> Pemograman
                                             &nbsp;
                                             <input  type="checkbox" name="tag[]" value="Website"> Website
                                             &nbsp;
                                             <input  type="checkbox" name="tag[]" value="Java"> Java
                                             &nbsp;
                                             <input  type="checkbox" name="tag[]" value="OOP" > OOP
                                             &nbsp;
                                             <input  type="checkbox" name="tag[]" value="MVC"> MVC
                                             &nbsp;
                                             <input  type="checkbox" name="tag[]" value="Kalkulus"> Kalkulus
                                             &nbsp;
                                             <input  type="checkbox" name="tag[]" value="Lainnya"> Lainnya

                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gambar</label>
                                    <input type="file" class="form-control" name="gambar">
                                </div>
                                <div class="form-group text-center">
                                    <button name="submit" type="submit" class=" col-md-6 btn btn-primary" style="margin: 30px;">+ Tambah</button>
                                </div>
                                <?php 
                                    if(isset($notif)){
                                        echo $notif;
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>