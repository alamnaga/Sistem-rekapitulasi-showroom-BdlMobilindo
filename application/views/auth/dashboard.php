<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="dashboard">
  <h4 class="header"><img src=assets/img/header.png alt="header" style="width: 20px; height: 20px;"> Selamat Datang <?= $user['user']; ?></h4>
  <h4></h4>
  <br>
  <center>
    <h3 class="title">Sistem Rekapitulasi Showroom</h3>
  </center><br>
  <div class="card-wrapper-a">
    <div class="card-group">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Mobil</h5>
          <p class="card-text">10</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Penjualan</h5>
          <p class="card-text">10</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Pembelian</h5>
          <p class="card-text">10</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="card-wrapper-b">
    <div class="card-group">
      <a href="<?= base_url('Auth/Tambahmobil'); ?>">
        <button type="button" class="mobil">Mobil<br>Menambahan Mobil</button>
      </a>
      <button type="button" class="pembelian">Pembelian<br>Menambahan Pembelian</button>
      <button type="button" class="penjualan">Penjualan<br>Menambahan Penjualan</button>
      <button type="button" class="laporan">Laporan<br>Menambahan Laporan</button>
    </div>
  </div>
</body>

</html>