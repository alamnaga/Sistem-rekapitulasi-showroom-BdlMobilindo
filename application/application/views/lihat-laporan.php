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
                            <h5 style="padding: 10px;border-bottom: 2px solid white; color: orange;">Lihat laporan</h5>
                            
                                
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