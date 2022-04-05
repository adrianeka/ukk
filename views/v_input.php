<div class="card">
    <div class="card-header bg-primary text-white">
        FORM TAMBAH DATA CATATAN PERJALANAN
    </div>
    <div class="card-body py-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <?php echo @$alert; ?>
                <form action="input.php" method="POST">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control mt-2 mb-4" required>
                    <label for="">Jam</label>
                    <input type="time" name="jam" class="form-control mt-2 mb-4" required>
                    <label for="">Lokasi yang dikunjungi</label>
                    <input type="text" name="lokasi" class="form-control mt-2 mb-4" required>
                    <label for="">Suhu tubuh</label>
                    <input type="number" name="suhu" class="form-control mt-2 mb-4" required>
                    <div class="form-inline">
                        <button name="simpan" class="btn btn-primary">Simpan</button>
                        <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>