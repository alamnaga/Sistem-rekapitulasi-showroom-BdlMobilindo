<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/tambah-mobil.css">

  <title>Dashboard</title>

</head>
<!-- sidebar -->

<body class="tambah-mobil">
  <div class="row">
    <div class="col-md-2">
      <ul class="list-group">
        <img src="assets/img/logo.jpg">
        <!-- button dashboard -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('Dashboard'); ?>'">
          Dashboard
        </button>
        <!-- button mobil -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          Mobil
        </button>
        <!-- button pembelian -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          Pembelian
        </button>
        <!-- button penjualan -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          Penjualan
        </button>
        <!-- button laporan -->
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false">
          Laporan
        </button>
    </div>
    <!-- Main -->
    <div class="col-md-10">
      <h4 class="header"><img src=assets/img/header.png alt="header" style="width: 20px; height: 20px;"> Selamat Datang</h4>
      <br>
      <center>
        <h3 class="title">Sistem Rekapitulasi Showroom</h3>
      </center>
      <div class="card-wrapper pb-3">
        <h5 style="padding: 10px;border-bottom: 2px solid white;"> Tambah Informasi Mobil</h5>
        <div class="row g-2 align-items-center m-1">
          <div class="col-3 ">
            <label for="text" class="col-form-label">No. Polisi</label>
          </div>
          <div class="col-2">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="row g-2 align-items-center m-1">
          <div class="col-3">
            <label for="text" class="col-form-label">Jenis/Merk</label>
          </div>
          <div class="col-8">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="row g-2 align-items-center m-1">
          <div class="col-3 ">
            <label for="text" class="col-form-label">Warna</label>
          </div>
          <div class="col-8">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="row g-2 align-items-center m-1">
          <div class="col-3 ">
            <label for="text" class="col-form-label">Bahan Bakar</label>
          </div>
          <div class="col-3">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="row g-2 align-items-center m-1">
          <div class="col-3 ">
            <label for="text" class="col-form-label">Tahun</label>
          </div>
          <div class="col-8">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="row g-2 align-items-center m-1">
          <div class="col-3 ">
            <label for="text" class="col-form-label">Tgl Beli</label>
          </div>
          <div class="col-8">
            <input type="date" name="" class="form-control">
          </div>
        </div>
        <div class="row g-2 align-items-center m-1">
          <div class="col-3 ">
            <label for="text" class="col-form-label">Harga Jual</label>
          </div>
          <div class="col-8">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <div class="row g-2 align-items-center m-1 pb-2">
          <div class="col-3 ">
            <label for="text" class="col-form-label">Harga Beli</label>
          </div>
          <div class="col-8">
            <input type="text" name="" class="form-control">
          </div>
        </div>
        <button type="button" class="btn btn-danger">Batal</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>

</body>

</html>