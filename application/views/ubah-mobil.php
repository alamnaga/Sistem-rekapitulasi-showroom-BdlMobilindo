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
  <link href="assets/css/ubah-mobil.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper" style="background-color: black;">
      <div class="sidebar-heading"><img src="assets/img/logo.jpg " width="200"></div>
      <div class="list-group list-group-flush">
        <!-- button dashboard -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('Dashboard'); ?>'">
          <img src="assets/img/home.png" style="width: 25px; "> Dashboard
        </button>
        <!-- button mobil -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          <img src="assets/img/mobil.png" style="width: 25px; "> Mobil
        </button>
        <!-- button pembelian -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          <img src="assets/img/cart.png" style="width: 25px; "> Pembelian
        </button>
        <!-- button penjualan -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          <img src="assets/img/sales.png" style="width: 25px; "> Penjualan
        </button>
        <!-- button laporan -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          <img src="assets/img/laporan.png" style="width: 25px; "> Laporan
        </button>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: black;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <h4 class="header"><img src=assets/img/header.png alt="header" style="width: 20px; height: 20px;">Selamat Datang</h4>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h3 style="color: orange; text-align: center; padding-top: 10px">Sistem Rekapitulasi Showroom</h3>

        <div class="card-wrapper pb-3">
          <h5 style="padding: 10px;border-bottom: 2px solid white;"> Ubah Informasi Mobil</h5>
          <?php foreach ($data_mobil  as $mobil) { ?>
            <form action="<?php echo base_url() . 'auth/update'; ?>" method="post">
              <div class="row g-2 align-items-center m-1">
                <div class="col-3 ">
                  <label for="text" class="col-form-label">No. Polisi</label>
                </div>
                <div class="col-8">
                  <input type="hidden" name="id_mobil" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->id_mobil ?>">
                  <input type="text" id="no_polis" name="no_polis" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->no_polis ?>">
                </div>
              </div>

              <div class="row g-2 align-items-center m-1">
                <div class="col-3">
                  <label for="text" class="col-form-label">Jenis/Merk</label>
                </div>
                <div class="col-8">
                  <input type="text" id="jenis_typr" name="jenis_typr" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->jenis_typr ?>">
                </div>
              </div>

              <div class="row g-2 align-items-center m-1">
                <div class="col-3 ">
                  <label for="text" class="col-form-label">Warna</label>
                </div>
                <div class="col-8">
                  <input type="text" id="warna" name="warna" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->warna ?>">
                </div>
              </div>

              <div class="row g-2 align-items-center m-1">
                <div class="col-3 ">
                  <label for="text" class="col-form-label">Bahan Bakar</label>
                </div>
                <div class="col-8">
                  <input type="text" id="bahan_bakar" name="bahan_bakar" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->bahan_bakar ?>">
                </div>
              </div>

              <div class="row g-2 align-items-center m-1">
                <div class="col-3 ">
                  <label for="text" class="col-form-label">Tahun</label>
                </div>
                <div class="col-8">
                  <input type="text" id="tahun_keluaran" name="tahun_keluaran" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->tahun_keluaran ?>">
                </div>
              </div>

              <div class="row g-2 align-items-center m-1">
                <div class="col-3 ">
                  <label for="text" class="col-form-label">Tgl jual</label>
                </div>
                <div class="col-8">
                  <input type="date" id="tgl_jual" name="tgl_jual" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->tgl_jual ?>">
                </div>
              </div>

              <div class="row g-2 align-items-center m-1">
                <div class="col-3 ">
                  <label for="text" class="col-form-label">Harga Jual</label>
                </div>
                <div class="col-8">
                  <input type="text" id="harga_jual" name="harga_jual" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->harga_jual ?>">
                </div>
              </div>

              <!-- <div class="row g-2 align-items-center m-1">
                <div class="col-3 ">
                  <label for="text" class="col-form-label">Harga Beli</label>
                </div>
                <div class="col-8">
                  <input type="text" id="harga_beli" name="harga_beli" class="form-control" required="required" class="col-form-label" value="<?php echo $mobil->harga_beli ?>">
                </div>
              </div> -->


              <div class="row g-2 align-items-center m-1">
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