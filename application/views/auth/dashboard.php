<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="dashboard">
  <h4 class="header"><img src=assets/img/header.png alt="header" style="width: 20px; height: 20px;"> Selamat Datang </h4>
  <h4></h4>
  <br>
  <center>
    <h3 class="title">Sistem Rekapitulasi Showroom</h3>
  </center><br>
  <div class="card-wrapper-a">
    <div class="card-group" id="titletotal">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Mobil</h5>
          <p class="card-text"><?= $jumlah_mobil ?></p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Penjualan</h5>
          <p class="card-text"><?= $jumlah_terjual ?></p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Pembelian</h5>
          <p class="card-text"><?= $jumlah_tersedia ?></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="card-wrapper-b">
    <div class="card-group" id="groupbutton">
      <div class="btn-group" role="group" aria-label="Basic example">
        <button id="button" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatmobil'); ?>'">
          <img src="assets/img/mobil.png" style="width: 25px; ">
          <h5>Mobil</h5>Informasi Mobil
        </button>

        <button id="button" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatpembelian'); ?>'">
          <img src="assets/img/cart.png" style="width: 25px; ">
          <h5>Pembelian</h5>Informasi Pembelian
        </button>

        <button id="button" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatpenjualan'); ?>'">
          <img src="assets/img/sales.png" style="width: 25px; ">
          <h5>Penjualan</h5>Informasi Penjualan
        </button>

        <button id="button" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatlaporan'); ?>'">
          <img src="assets/img/laporan.png" style="width: 25px; ">
          <h5>Laporan</h5>Informasi Laporan
        </button>
      </div>
    </div>
  </div>
</body>

</html>