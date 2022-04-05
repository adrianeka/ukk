<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/jquery/jquery.dataTables.min.css">
</head>
<body>
    <?php
    include "history.php";
    ?>
    <!-- form  -->
    <div class="card">
        <div class="card-body">
            <!-- button trigger modal  -->
            <div class="d-flex flex-row align-items-center justify-content-between">
                <h3>Data catatan perjalanan anda</h3>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <button type="button" class="btn btn-outline-secondary d-flex justify-content-end" 
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Isi Data
                    </button>
                </div>
            </div>
            <div class="table-responsive mt-2">
                <table id="data-table" class="table table-striped" >
                    <thead>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        while($user= mysqli_fetch_array($data)){
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $user["tanggal"] ?></td>
                                <td><?= $user["jam"] ?></td>
                                <td><?= $user["lokasi"] ?></td>
                                <td><?= $user["suhu"] ?></td>
                                <td>
                                    <a href="">Edit</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                        <th>Aksi</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="input.php" method="POST" id="inputData">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control mt-2 mb-4" required>
                        <label for="">Jam</label>
                        <input type="time" name="jam" class="form-control mt-2 mb-4" required>
                        <label for="">Lokasi yang dikunjungi</label>
                        <input type="text" name="lokasi" class="form-control mt-2 mb-4" required>
                        <label for="">Suhu tubuh</label>
                        <input type="number" name="suhu" class="form-control mt-2 mb-4" required>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button> -->
                        <button name="simpan" class="btn btn-primary" type="submit">Simpan</button>
                        <button name="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/jquery/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#data-table').DataTable({
                "info":  false,
                "scrollY": '50vh',
                "scrollCollapse": true,
                lengthMenu:[
                    [5,10,25,50,100,-1],
                    [5,10,25,50,11, "All"]
                ]
            });
        } );
    </script>
</body>
</html>