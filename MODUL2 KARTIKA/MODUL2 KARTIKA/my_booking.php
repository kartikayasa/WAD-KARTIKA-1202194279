<?php include '../MODUL2KARTIKA/header.php';
    $boking = rand(1,100000);
    $nama = $_POST['nama'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $durasi = (int)$_POST['durasi'];
    $tipe = $_POST['tipe'];
    $nohp = $_POST['nohp'];
    $service = count($_POST['service']);

    $waktu  = $date." ".$time;
    $checkin = date("Y-m-d H:i:s", (strtotime($waktu)));
    $checkout = date("Y-m-d H:i:s", (strtotime($waktu)+60*60*($durasi)));
    var_dump($durasi);
    if ($tipe == "Nusantara Hall") {
        $harga = 2000;
    } elseif ($tipe == "Garuda Hall") {
        $harga = 1000;
    } elseif ($tipe == "Gedung Serba Guna") {
        $harga = 500;
    } 

?>

    <div class="container">
        <div class="row">
            <div style="margin-top: 10px;">
                <p class="text-center" style="margin-top: 5px; font-size: 30px;">Thank You (Name) for Reserving</p>
                <p class="text-center" style="margin-top: 5px;font-size: 20px;">Please double check tour reservation details</p>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Booking Number</th>
                        <th>Name</th>
                        <th>Check-in</th>
                        <th>Check-Out</th>
                        <th>Building Type</th>
                        <th>Phone Number</th>
                        <th>Service</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $boking; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $checkin; ?></td>
                        <td><?php echo $checkout; ?></td>
                        <td><?php echo $tipe; ?></td>
                        <td><?php echo $nohp; ?></td>
                        <td><?php for($i=0; $i<$service; $i++){
                        $servis =  $_POST['service'][$i];
                        echo $servis."<br>";
                        }
                        if ($servis == "Catering") {
                            $hargaserv = 700;
                        } elseif ($servis == "Decoration") {
                            $hargaserv = 450;
                        } elseif ($servis == "Sound System") {
                            $hargaserv = 250;
                        }
                        ?>
                        </td>
                        <td>
                            <?php 
                                $total = ($harga + $hargaserv) * $durasi ;
                                echo "$",$total;
                            ?>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            
        </div>
    </div>
<?php include '../MODUL2KARTIKA/footer.php'; ?>