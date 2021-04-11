<!DOCTYPE html>
<html >

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
 
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
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-warning" aria-expanded="false">
            Dashboard
          </button> 
        <!-- button mobil -->
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-warning" aria-expanded="false">
            Mobil
          </button>
          <!-- button pembelian -->
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-warning" aria-expanded="false">
            Pembelian
          </button> 
        <!-- button penjualan -->
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-warning" aria-expanded="false">
            Penjualan
          </button>
          <!-- button laporan -->
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary text-warning" aria-expanded="false">
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
      <div class="card-wrapper bg-secondary text-warning pb-3">
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