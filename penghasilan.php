<?php
session_start();
include 'hubung.php';
$bln = date("m");
$thn = date("Y");
?>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bengkel Anwar</title>

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Menampilkan Jam (Aktif) -->
		<script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->
		</script>

    </head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-tools"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Bengkel Anwar</div> 
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item -Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Database
            </div>
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Karyawan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Karyawan :</h6>
                        <a class="collapse-item" href="databasekaryawan.php">Data Diri</a>
                        <a class="collapse-item" href="gajikaryawan.php">Gaji</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-people"></i>
                    <span>Pelanggan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Pelanggan :</h6>
                        <a class="collapse-item" href="pendingpelanggan.php">Pending Services</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Lain-lain
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Halaman</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Screens:</h6>
                            <a class="collapse-item" href="absen.php">Absen</a>
                            <a class="collapse-item" href="penghasilan.php">Penghasilan</a>
                            <div class="collapse-divider"></div>
                        </div>
                    </div>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div id="clock"></div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php 
                                $nama = $_SESSION["nama"];
                                echo "$nama";?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Container Fluid --> 
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray 800">Database Pendapatan</h1><hr>

                    <!-- Content Row -->
                    <div class="row">
                        <?php 
                        include 'koneksi.php';
                        $query = mysqli_query($koneksi,"SELECT SUM(IF (tanggal = DATE(NOW()), penghasilan, 0)) 
                        AS hari FROM penghasilanharian")
                        or die(mysqli_error($koneksi));
                        while($data = mysqli_fetch_array($query)){
                            $harga=number_format($data['hari'],0,",",".");?>
                        <!-- Hari ini -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pendapatan Hari ini</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "Rp. $harga";?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- Bulan ini -->
                        <?php
                        include 'koneksi.php';
                        $query = mysqli_query($koneksi,"SELECT SUM(IF (MONTH(tanggal) = '$bln', penghasilan, 0)) 
                        AS bulan FROM penghasilanharian")or die(mysqli_error($koneksi));
                        while($data=mysqli_fetch_array($query)){
                        $harga=number_format($data['bulan'],0,",",".");?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pendapatan Bulan Ini</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "Rp. $harga";?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <!-- Tahun ini -->
                        <?php
                        include 'koneksi.php';
                        $query = mysqli_query($koneksi,"SELECT SUM(IF (YEAR(tanggal) = '$thn', penghasilan, 0)) 
                        AS tahun FROM penghasilanharian")or die(mysqli_error($koneksi));
                        while($data=mysqli_fetch_array($query)){
                        $harga=number_format($data['tahun'],0,",",".");?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Pendapatan Tahun Ini</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "Rp. $harga";?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-graph-up fa-2x text-gray 300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- End content row 1 -->
                    <hr>
                    <div class="row">
                                <!-- Collapsable Card Example -->
                                <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                    <a href="#collapsetambah" class="d-block card-header py-3" data-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="collapse">
                                        <h6 class="m-0 font-weight-bold text-primary">Tambahkan Penghasilan Hari Ini</h6>
                                    </a>
                                        <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapsetambah">
                                        <div class="card-body">
                                        <form class="user" action="tambahpenghasilan.php" method="POST">
                                        <div class="form-group">
                                        <label>Penghasilan hari ini</label>
                                        <input type="number" class="form-control form-control-user" name="penghasilan">
                                        </div>
                                        <input type="submit" class="btn btn-success" value="Tambah">
                                        <input type="reset" class="btn btn-secondary" value="Clear">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                </div>
                <!-- Akhir Container Fluid -->
            </div>
            <!-- End Main Content-->
            
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End Content Wrapper -->
    </div>
    <!-- End Page Wrapper--> 
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pencet tombol "Logout" jika ingin benar-benar keluar</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
