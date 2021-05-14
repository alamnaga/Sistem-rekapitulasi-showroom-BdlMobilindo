<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/lihat-mobil.css" rel="stylesheet">

</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper" style="background-color: black;">
            <div class="sidebar-heading"><img src="assets/img/logo.jpg " width="200"></div>
            <div class="list-group list-group-flush">
                <!-- button dashboard -->
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('dashboard'); ?>'">
                    <img src="assets/img/home.png" style="width: 25px; "> Dashboard
                </button>
                <!-- button mobil -->
                <button id="btnGroupDrop1" type="button" style="background-color: rgb(44, 44, 44);" class="btn btn-secondary" aria-expanded="false">
                    <img src="assets/img/mobil.png" style="width: 25px; "> Mobil
                </button>
                <!-- button pembelian -->
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatpembelian'); ?>'">
                    <img src="assets/img/cart.png" style="width: 25px; "> Pembelian
                </button>
                <!-- button penjualan -->
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatpenjualan'); ?>'">
                    <img src="assets/img/sales.png" style="width: 25px; "> Penjualan
                </button>
                <!-- button laporan -->
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatlaporan'); ?>'">
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
                            <h4 class="header"><img src=assets/img/header.png alt="header" style="width: 20px; height: 20px;"> Selamat Datang </h4>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h3 style="color: orange; text-align: center; padding-top: 10px">Sistem Rekapitulasi Showroom</h3>

                <div class="card-wrapper pb-3">
                    <h5 style="padding: 10px;border-bottom: 2px solid white; color: orange;">Data Mobil</h5>

                    <!-- search-->
                    <div class="navbar-form navbar-right">
                        <?php echo form_open('search') ?>
                        <input type="text" name="keyword" class="form-control" placeholder="Search" required>
                        <button type="button" class="btn btn-danger btn-xs" onclick="location.href='<?= base_url('lihatmobil'); ?>'">Kembali</button>
                        <?php echo form_close() ?>
                    </div>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No Polisi</th>
                                <th>Jenis / Tipe</th>
                                <th>Warna</th>
                                <th>Bahan Bakar</th>
                                <th>Tahun Keluaran</th>
                                <th>Harga Jual</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- manggil dari db -->
                            <?php foreach ($data_mobil  as $mobil) { ?>
                                <tr>
                                    <td><?php echo $mobil->no_polis ?></td>
                                    <td><?php echo $mobil->jenis_typr ?></td>
                                    <td><?php echo $mobil->warna ?></td>
                                    <td><?php echo $mobil->bahan_bakar ?></td>
                                    <td><?php echo $mobil->tahun_keluaran ?></td>
                                    <td>Rp <?php echo number_format($mobil->harga_jual) ?></td>
                                    <td><label class="label label-success"><?Php echo ($mobil->status == 1) ? 'Tersedia' : 'Terjual' ?> </td>
                                    <td style=" text-align: center;">
                                        <?php echo anchor('Auth/edit_ubahmobil/' . $mobil->id_mobil, '<button class="btn btn-light btn-xs" id="btnaksi" type="button"><img src="assets/img/edit.png" style="width: 20px;"></button>'); ?>
                                        <?php echo anchor('Auth/hapus_mobil/' . $mobil->id_mobil, '<button class="btn btn-light btn-xs" id="btnaksi" type="button"><img src="assets/img/trash.png" style="width: 20px;"></button>'); ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
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