<?php include '../MODUL2KARTIKA/header.php'; 
?>

    <div class="container">
        <div class="row">
            <h1 class="text-md-center fs-3" style="margin-top: 15px;">WELCOME TO ESD VENUE RESERVATION</h1>
            <div class="bg-dark" style="margin-top: 10px;">
                <p class="text-light text-center" style="margin-top: 5px;">Find your best deal for you event, here!</p>
            </div>
            <?php
            include "../MODUL2KARTIKA/database.php";
                foreach ($tampung as $data) {
                $id = $data['id'];
            ?>
            <div class="col-md-4">
                <div class="card" style="margin-top: 30px;">
                    <img src="../MODUL2KARTIKA/asset/img/<?php echo $data['gambar']; ?>" class="card-img-top">
                    <div class="card-body"> 
                        <h1 class="card-tittle fw-bold" style="font-size: 15px;" ><?php echo $data['tittle'];?></h1>
                        <p class="card-text" style="font-size: 13px;"><?php echo $data['ket1'];?></p>
                        <p class="card-text" style="font-size: 13px;"><?php echo $data['ket2'];?></p>
                    </div>
                    <ul class="list-group list-group-flush text-center  fw-bold">
                        <?php if ($data['option1']=="Free Parking") { ?>
                            <li class="list-group-item text-success "><?php echo $data['option1']; ?></li>
                        <?php } else { ?>
                            <li class="list-group-item text-danger "><?php echo $data['option1']; ?></li>
                        <?php } ?>

                        <?php if ($data['option2']=="Full Ac") { ?>
                            <li class="list-group-item text-success "><?php echo $data['option2']; ?></li>
                        <?php } else { ?>
                            <li class="list-group-item text-danger "><?php echo $data['option2']; ?></li>
                        <?php } ?>

                        <?php if ($data['option3']=="Cleaning Service") { ?>
                            <li class="list-group-item text-success "><?php echo $data['option3']; ?></li>
                        <?php } else { ?>
                            <li class="list-group-item text-danger "><?php echo $data['option3']; ?></li>
                        <?php } ?>

                        <?php if ($data['option4']=="Covid-19 Health Protocol") { ?>
                            <li class="list-group-item text-success "><?php echo $data['option4']; ?></li>
                        <?php } else { ?>
                            <li class="list-group-item text-danger "><?php echo $data['option4']; ?></li>
                        <?php } ?>
                    </ul> 
                    <div class="card-footer text-center"> 
                        <a href="../MODUL2KARTIKA/booking.php?id=<?php echo $id; ?>" alt class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <?php }?>
            
        </div>
    </div>
<?php include '../MODUL2KARTIKA/footer.php'; ?>