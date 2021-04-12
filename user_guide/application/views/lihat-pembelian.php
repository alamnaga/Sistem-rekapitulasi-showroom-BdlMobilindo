<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/lihat-pembelian.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<<body class="lihat-pembelian">
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
            <br>
            <center>
                <h3 class="title">Sistem Rekapitulasi Showroom</h3>
            </center>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lihat Pembelian</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix">
                    </div>
                </div>

                <table class="table">
                    <thead class="table-light">
                        <thead>
                            <tr>
                                <th>Nama Polisi</th>
                                <th>Jenis / Tipe</th>
                                <th>Warna</th>
                                <th>Bahan Bakar</th>
                                <th>Tahun Keluaran</th>
                                <th>Harga Beli</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php foreach ($data_mobil  as $mobil) { ?>
                            <tr>
                                <td><?php echo $mobil->no_polis ?></td>
                                <td><?php echo $mobil->jenis_type ?></td>
                                <td><?php echo $mobil->warna ?></td>
                                <td><?php echo $mobil->bahan_bakar ?></td>
                                <td><?php echo $mobil->tahun_keluaran ?></td>
                                <td>Rp <?php echo number_format($mobil->harga_beli) ?></td>
                                <td style=" text-align: center;">
                                    <?php echo anchor('example/remove_med/' . $mobil->id_beli, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash fa-3x"></span></button>'); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </body>

</html>