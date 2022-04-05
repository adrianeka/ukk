<?php
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
        <div class="container">
            <a class="navbar-brand d-flex flex-column" href="index.php">
                <h4 class="brand-nav">PEDULI DIRI</h4>
                <span class="brand-nav2">Catatan Perjalanan</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php if ($page == 'home' || empty($page)) {
                                            echo "active";
                                        } ?> nav-item" href="?page=home">Home</a>
                    <a class="nav-link <?php if ($page == 'catatan_perjalanan') {
                                            echo "active";
                                        } ?> nav-item" href="?page=catatan_perjalanan">Catatan Perjalanan</a>
                </div>

                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $nama; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logout">Logout</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </div>
            </div>
    </nav>

    <!-- page -->
    <div class="container">
        <div class="row">
            <div class="col-lg mt-5">
                <?php
                if ($page == 'catatan_perjalanan') {
                    include "v_history.php";
                } elseif ($page == 'home' || empty($page)) {
                    include 'v_home.php';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal" id="logout" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                </div>
                <div class="modal-body">
                    <p>Apakah kamu yakin?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="logout.php">Yakin</a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>