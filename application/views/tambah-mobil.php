<!DOCTYPE html>
<html>
    <head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="assets/css/tambah-mobil.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </head>
    <body class="lihat-mobil">
      <div class="row">
      <div class="col-md-2">
            <ul class="list-group">
              <img src="assets/img/logo.jpg">
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
              </ul>
              </div>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item">And a fifth one</li>
            </ul>
          </div> 
          <div class="col-md-10">
          <h4 class="header"><img src=assets/img/header.png alt="header" style="width: 20px; height: 20px;"> Selamat Datang</h4>
          <br><center><h3 class="title">Sistem Rekapitulasi Showroom</h3></center>
            <div class="card-wrapper pb-3">
              <h5 style="padding: 10px;border-bottom: 2px solid white;"> Tambah Informasi Mobil</h5>
              <div class="row g-2 align-items-center m-1">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">No. Polisi</label>
                </div>
                <div class="col-9 pr-2">
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <div class="row g-2 align-items-center m-1">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">Jenis/Merk</label>
                </div>
                <div class="col-9">
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <div class="row g-2 align-items-center m-1">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">Warna</label>
                </div>
                <div class="col-9">
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <div class="row g-2 align-items-center m-1">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">Bahan Bakar</label>
                </div>
                <div class="col-9">
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <div class="row g-2 align-items-center m-1">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">Tahun</label>
                </div>
                <div class="col-9">
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <div class="row g-2 align-items-center m-1">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">Tgl Beli</label>
                </div>
                <div class="col-9">
                  <input type="date" name="" class="form-control">
                </div>
              </div>
              <div class="row g-2 align-items-center m-1">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">Harga Jual</label>
                </div>
                <div class="col-9">
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <div class="row g-2 align-items-center m-1 pb-2">
                <div class="col-2 ">
                  <label for="text" class="col-form-label">Harga Beli</label>
                </div>
                <div class="col-9">
                  <input type="text" name="" class="form-control">
                </div>
              </div>
              <button type="button" class="btn btn-danger">Batal</button>
              <button type="button" class="btn btn-success">Simpan</button>
            </div>
          
          </div>
        
  </body>
</html>