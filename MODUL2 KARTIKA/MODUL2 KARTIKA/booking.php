<?php include '../MODUL2KARTIKA/header.php'; 
include '../MODUL2KARTIKA/database.php';
$id = isset($_GET['id']) ? $_GET['id']: " ";

?>

    <div class="container"> 
        <div class="row g-0">
            <div class="bg-dark" style="margin-top: 10px;">
                <p class="text-light text-center" style="margin-top: 5px;">Reserve your venue now!</p>
            </div>
            <div class="card" style="margin-top: 30px;">
              <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                    <?php
                         
                        if (isset($_GET['id'])) {?>
                            <?php if($id == 0 ){ ?>
                                <img src="../MODUL2KARTIKA/asset/img/venue1.jpg" style="width: 500px; margin-top: 150px;">
                            <?php } elseif($id == 1){ ?>
                                <img src="../MODUL2KARTIKA/asset/img/venue2.jpg" style="width: 500px; margin-top: 150px;">
                            <?php } elseif($id == 2){ ?>
                                <img src="../MODUL2KARTIKA/asset/img/venue3.jpg" style="width: 500px; margin-top: 150px;">
                            <?php } ?> 
                        <?php } else { ?>
                            <img src="../MODUL2KARTIKA/asset/img/venue3.jpg" style="width: 500px; margin-top: 150px;">
                        <?php }?>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form method="POST" action="../MODUL2KARTIKA/my_booking.php">
                                <div class="form-group mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="kartika_1202194279" name="nama" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Event Date</label>
                                    <input type="date" class="form-control" name="date" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Start Time</label>
                                    <input type="time" class="form-control" name="time" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Duration (Hours)</label>
                                    <input type="number" class="form-control" name="durasi" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Building Type</label>
                                    <select class="form-select" name="tipe"> 
                                    <?php 
                                    include "../MODUL2KARTIKA/database.php";
                                     if ($id == 0) {?>
                                        <option value="Garuda Hall" selected>Garuda Hall</option>
                                        <option value="Nusantara Hall">Nusantara Hall</option>
                                        <option value="Gedung Serba Guna" >Gedung Serba Guna</option>
                                    <?php } elseif ($id == 1) { ?>
                                        <option value="Garuda Hall" >Garuda Hall</option>
                                        <option value="Nusantara Hall" selected>Nusantara Hall</option>
                                        <option value="Gedung Serba Guna" >Gedung Serba Guna</option>
                                    <?php } elseif ($id == 2) { ?>
                                        <option value="Garuda Hall" >Garuda Hall</option>
                                        <option value="Nusantara Hall" >Nusantara Hall</option>
                                        <option value="Gedung Serba Guna" selected>Gedung Serba Guna</option>
                                    <?php } else { ?>
                                        <option selected>Choose...</option>
                                        <option value="Garuda Hall" >Garuda Hall</option>
                                        <option value="Nusantara Hall" >Nusantara Hall</option>
                                        <option value="Gedung Serba Guna" selected>Gedung Serba Guna</option>
                                    <?php } ?>

                            
                            
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" name="nohp" class="form-control" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Add Service(S)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Catering" id="flexCheckDefault" name="service[]">
                                            <label class="form-check-label" for="flexCheckDefault">Catering / $700</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Decoration" id="flexCheckDefault" name="service[]">
                                            <label class="form-check-label" for="flexCheckDefault">Decoration / $450</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Sound System" id="flexCheckDefault" name="service[]">
                                            <label class="form-check-label" for="flexCheckDefault">Sound System / $250</label>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mb-3">
                                    <button class="btn btn-primary"  type="submit" name="book">Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
            
<?php include '../MODUL2KARTIKA/footer.php'; ?>