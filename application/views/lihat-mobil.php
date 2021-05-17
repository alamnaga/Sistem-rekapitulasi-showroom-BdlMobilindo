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
                    <h5 style="padding: 10px;border-bottom: 2px solid white; color: orange;"> Data Mobil </h5>
                    <div class="x_panel">
                    <div class="x_title">

                    <div class="navbar-form navbar-right">
                        <?php echo form_open('search') ?>
                        <div class="row g-2 align-items-center p-2">
                            <div class="col-11">
                                <input type="text" name="keyword" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-info btn-xs">Cari</button>

                        </div>
                        <?php echo form_close() ?>


                    </div>

                    <div class="dropdown mb-2 mt-2 pl-2">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Status Mobil
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url('Tersedia') ?>">Tersedia</a>
                            <a class="dropdown-item" href="<?php echo base_url('Terjual') ?>">Terjual</a>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No Polisi</th>
                                <th>Jenis / Tipe</th>
                                <th>Warna</th>
                                <th>Bahan Bakar</th>
                                <th>Tahun</th>
                                <th>Harga Penjualan</th>
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
                                    <td><label class="label label-success"><?php echo ($mobil->status == 1) ? 'Tersedia' : 'Terjual' ?> </td>
                                    <td style=" text-align: center;">
                                        <!-- <?php
                                                if ($mobil->status == 1) { ?>
                                            <a href="<?php echo base_url('search1') ?>" class="btn btn-sm btn-success">Non-Aktifkan</a>
                                        <?php    } else { ?>


                                            <a href="<?php echo base_url('Auth/status' . $mobil->id_mobil,) ?>" class="btn btn-sm btn-danger">Non-Aktifkan
                                            </a>
                                        <?php    }

                                        ?> -->

                                        <!-- <?php echo anchor('Auth/status/' . $mobil->id_mobil, '<button class="btn btn-sm btn-success">Sold</button>'); ?> -->
                                        <!-- <?php echo anchor('Auth/edit_ubahmobil/' . $mobil->id_mobil, '<button class="btn btn-light btn-xs" id="btnaksi" type="button"><img src="assets/img/edit.png" style="width: 20px;"></button>'); ?> -->


                                        <button type="button" class="btn btn-light btn-xs" data-toggle="modal" data-target="#edit<?php echo  $mobil->id_mobil ?>">
                                            <img src="assets/img/coin.png" style="width: 20px;">
                                        </button>


                                        <!-- <?php echo anchor('Auth/hapus_mobil/' . $mobil->id_mobil, '<button class="btn btn-light btn-xs" id="btnaksi" type="button"><img src="assets/img/trash.png" style="width: 20px;"></button>'); ?> -->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-light btn-xs" data-toggle="modal" data-target="#hapus<?php echo $mobil->id_mobil ?>">
                                            <img src="assets/img/trash.png" style="width: 20px;">
                                        </button>

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
<!-- Modal -->
<?php foreach ($data_mobil  as $mobil) { ?>
    <div class="modal fade" id="hapus<?php echo $mobil->id_mobil ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <?php echo anchor('Auth/hapus_mobil/' . $mobil->id_mobil, '<button type="button" class="btn btn-danger">Hapus</button>'); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php foreach ($data_mobil  as $mobil) { ?>
    <div class="modal fade" id="edit<?php echo  $mobil->id_mobil ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit<?php echo  $mobil->id_mobil ?>">Ubah Informasi Mobil</h5>
                </div>
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
                            <input type="hidden" id="warna" name="warna" class="form-control" class="col-form-label" value="<?php echo $mobil->warna ?>">
                            <input type="hidden" id="bahan_bakar" name="bahan_bakar" class="form-control" class="col-form-label" value="<?php echo $mobil->bahan_bakar ?>">
                            <input type="hidden" id="tahun_keluaran" name="tahun_keluaran" class="form-control" class="col-form-label" value="<?php echo $mobil->tahun_keluaran ?>">
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
            </div>
        </div>
    </div>
<?php } ?>

</html>