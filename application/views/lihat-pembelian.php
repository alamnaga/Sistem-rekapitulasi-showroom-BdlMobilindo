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
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary" aria-expanded="false" onclick="location.href='<?= base_url('lihatmobil'); ?>'">
                    <img src="assets/img/mobil.png" style="width: 25px; "> Mobil
                </button>
                <!-- button pembelian -->
                <button id="btnGroupDrop1" type="button" style="background-color: rgb(44, 44, 44);" class="btn btn-secondary" aria-expanded="false">
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
                <form action="<?php echo base_url('Auth/AksiBeli') ?>" method="post">
                    <div class="card-wrapper pb-3">
                        <h5 style="padding: 10px;border-bottom: 2px solid white; color: orange;">Data Pembelian</h5>
                        <div class="x_panel">
                            <div class="x_title">
                                <button type="button" class="btn btn-success" onclick="location.href='<?= base_url('Tambahbeli'); ?>'">+ Tambah Pembelian</button>
                                <!-- <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                            </ul> -->
                                <div class="clearfix"></div>
                            </div>

                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>No Polisi</th>
                                        <th>Jenis / Tipe</th>
                                        <th>Warna</th>
                                        <th>Bahan Bakar</th>
                                        <th>Tahun Keluaran</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Harga Pembelian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_pembelian  as $mobil) { ?>
                                        <tr>
                                            <td><?php echo $mobil->no_polis ?></td>
                                            <td><?php echo $mobil->jenis_typr ?></td>
                                            <td><?php echo $mobil->warna ?></td>
                                            <td><?php echo $mobil->bahan_bakar ?></td>
                                            <td><?php echo $mobil->tahun_keluaran ?></td>
                                            <td><?php echo $mobil->tgl_beli ?></td>
                                            <td>Rp <?php echo number_format($mobil->harga_beli) ?></td>
                                            <td style=" text-align: center;">
                                                <!-- <?php echo anchor('Auth/hapus_pembelian/' . $mobil->id_beli, '<button class="btn btn-light btn-xs" id="btnaksi" type="button"><img src="assets/img/trash.png" style="width: 20px;"></button>'); ?> -->

                                                <!-- POP UP BUTTON HAPUS -->
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-light btn-xs" data-toggle="modal" data-target="#hapus<?php echo $mobil->id_beli ?>" id="btnaksi">
                                                    <img src="assets/img/trash.png" style="width: 20px;">
                                                </button>


                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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

<?php foreach ($data_pembelian  as $mobil) { ?>
    <div class="modal fade" id="hapus<?php echo $mobil->id_beli ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Peringatan !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapusnya ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <?php echo anchor('Auth/hapus_pembelian/' . $mobil->id_beli, '<button type="button" class="btn btn-danger">Hapus</button>'); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

</html>