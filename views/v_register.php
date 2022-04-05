<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="form">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h2 class="text-center text-primary">Register</h2>
            <div class="col-lg-4">
                <div class="card mt-5">
                    <?php echo @$alert ?>
                    <div class="card-body">
                        <form action="register.php" method="post">
                            <input type="number" name="nik" class="form-control mb-4" placeholder="Masukan NIK" required>
                            <input type="text" name="nama" class="form-control mb-4" placeholder="Masukan Nama Lengkap" required>
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary" name="register">Register</button>
                                <a href="login.php" class="btn btn-outline-primary">Sudah punya akun? Login kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.js"></script>
</body>

</html>