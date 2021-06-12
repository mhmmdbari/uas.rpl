<?php
session_start();
include 'hubung.php';
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

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
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
            <li class="nav-item active">
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
                <li class="nav-item">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading --> 
                    <h1 class="h3 mb-2 text-gray 800">Database Karyawan</h1>
                    <p class="mb-4"> Ini adalah database karyawan bengkel, mohon diisi dengan benar </p>

                    <!-- Isi Database -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Karyawan</th>
                                            <th>Nama</th>
                                            <th>Bagian</th>
                                            <th>Alamat</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Umur</th>
                                            <th width="18%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        include 'koneksi.php';
                                        $data=mysqli_query($koneksi,"SELECT * FROM data_diri") or 
                                        die(mysqli_error($koneksi));
                                        foreach ($data as $baris){ ?>
                                        <tr>
                                        <td><?php echo $baris['kd_karyawan'] ?></td>
                                        <td><?php echo $baris['nama_karyawan'] ?></td>
                                        <td><?php echo $baris['bagian'] ?></td>
                                        <td><?php echo $baris['alamat_karyawan'] ?></td>
                                        <td><?php echo $baris['ttl_karyawan'] ?></td>
                                        <td><?php echo $baris['umur'] ?></td>
                                        <td><a class="btn btn-warning" 
                                        href="ubahkaryawan.php?=<?php echo $baris['kd_karyawan']?>">Ubah</a>
                                        <a class="btn btn-danger" 
                                        href="hapusdatakaryawan.php?=<?php echo $baris['kd_karyawan']?>">Hapus</a>
                                        </td>
                                        </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <!-- Collapsable Card Example -->
                                <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                    <a href="#collapsetambah" class="d-block card-header py-3" data-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="collapse">
                                        <h6 class="m-0 font-weight-bold text-primary">Ubah Data</h6>
                                    </a>
                                        <!-- Card Content - Collapse -->
                                    <div class="collapse show" id="collapsetambah">
                                        <div class="card-body">
                                        <form class="user" 
                                        action="prosesubahkaryawan.php?kd_karyawan=<?php echo $baris['kd_karyawan']?>" method="POST">
                                        <div class="form-group">
                                        <label>Kode Karyawan</label>
                                        <input type="text" class="form-control form-control-user" name="kd_karyawan" 
                                        value="<?php echo $baris['kd_karyawan']?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control form-control-user" name="nama" 
                                        value="<?php echo $baris['nama_karyawan']?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Bagian</label>
                                        <input type="text" class="form-control form-control-user" name="bagian" 
                                        value="<?php echo $baris['bagian']?>">
                                        </div>
                                        <div class="form-group">
                                        <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" class="form-control form-control-user" name="ttl_karyawan" 
                                        value="<?php echo $baris['ttl_karyawan']?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Umur</label>
                                        <input type="text" class="form-control form-control-user" name="umur" 
                                        value="<?php echo $baris['umur']?>">
                                        </div>
                                        <input type="submit" class="btn btn-success" value="Ubah">
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Card-->
                </div>
                <!-- Akhir Container Fluid-->
            </div>
            <!-- Akhir Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Jika ada data yang salah silahkan hubungi <a href="#">Administrator</a></span>
                        <span><br><br><br>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- Akhir Content Wrapper -->
    </div>
    <!-- Akhir Page Wrapper -->
    
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

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
