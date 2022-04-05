<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/jquery/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body class="bg-home">
<?php
include "history.php";
?>
<?php 
$nama=$_SESSION['nama'];
?>
<div class="container">
    <!-- welcome  -->
    <div class="row">
        <div class="col">
            <p class="welcome">Selamat datang <?php echo $nama;?> di aplikasi peduli diri</p>
        </div>
    </div>
    <!-- total data catatan  -->
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold text-primary">Catatan Perjalanan yang telah terekam</h6>
                    <img src="assets/media/bag.png" alt="" class="py-4">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        echo $count;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preview Table -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Catatan Perjalanan Anda</h6>
                        <div class="dropdown no-arrow">
                            <a href="index.php?page=catatan_perjalanan" class="text-dark" style="text-decoration: none">Lihat semua</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Lokasi</th>
                                    <th>Suhu Tubuh</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    while($user= mysqli_fetch_array($limitData)){
                                    ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $user["tanggal"] ?></td>
                                            <td><?= $user["jam"] ?></td>
                                            <td><?= $user["lokasi"] ?></td>
                                            <td><?= $user["suhu"] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="assets/jquery/jquery.js"></script>
<script src="assets/jquery/jquery.dataTables.min.js"></script>
<script>
       $(document).ready(function() {
            $('#data-table').DataTable({
                "scrollY": "100px",
                "scrollCollapse": true,
                "ordering": false,
                "info": false,
                "searching": false,
                "paging":   false,
            });
        } );
    </script>
</body>
</html>