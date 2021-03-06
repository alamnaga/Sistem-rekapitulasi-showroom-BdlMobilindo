<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ubah Informasi Mobil</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/tambah-mobil.css" rel="stylesheet">

</head>

<body style="background-color: black;">
  <div class="container-fluid" style="background-color: rgb(44, 44, 44);">
    <h3 style="color: orange; text-align: center; padding-top: 10px">Sistem Rekapitulasi Showroom</h3>

    <div class="card-wrapper pb-3" style="background-color: rgb(44, 44, 44);
	margin: 15px auto;
	color: orange;">
      <h5 style="padding: 10px;border-bottom: 2px solid white;"> Ubah Data Mobil</h5>
      <?php foreach ($data_mobil  as $mobil) { ?>
        <form action="<?php echo base_url() . 'auth/update'; ?>" method="post">
          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class=" col-3 ">
              <label for=" text" class="col-form-label">No. Polisi</label>
            </div>
            <div class="col-8">
              <input type="hidden" name="id_mobil" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->id_mobil ?>">
              <input type="text" id="no_polis" name="no_polis" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->no_polis ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class=" col-3">
              <label for="text" class="col-form-label">Jenis/Merk</label>
            </div>
            <div class="col-8">
              <input type="text" id="jenis_typr" name="jenis_typr" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->jenis_typr ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class="col-3 ">
              <label for="text" class="col-form-label">Warna</label>
            </div>
            <div class="col-8">
              <input type="text" id="warna" name="warna" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->warna ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class="col-3 ">
              <label for="text" class="col-form-label">Bahan Bakar</label>
            </div>
            <div class="col-8">
              <input type="text" id="bahan_bakar" name="bahan_bakar" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->bahan_bakar ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class="col-3 ">
              <label for="text" class="col-form-label">Tahun</label>
            </div>
            <div class="col-8">
              <input type="text" id="tahun_keluaran" name="tahun_keluaran" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->tahun_keluaran ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class="col-3 ">
              <label for="text" class="col-form-label">Tgl jual</label>
            </div>
            <div class="col-8">
              <input type="date" id="tgl_jual" name="tgl_jual" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->tgl_jual ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class="col-3 ">
              <label for="text" class="col-form-label">Harga Jual</label>
            </div>
            <div class="col-8">
              <input type="text" id="harga_jual" name="harga_jual" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->harga_jual ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <div class="col-8">
              <input type="hidden" id="status" name="status" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->status ?>">
            </div>
          </div>

          <div class="row g-2 align-items-center m-1" style="width: 100%;">
            <button type="reset" class="btn btn-danger" onclick="location.href='<?= base_url('lihatmobil'); ?>'">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      <?php } ?>
    </div>

  </div>

  </div>
  </div>
  <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>