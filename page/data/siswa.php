<?php
include "../../config/connect_db.php";

$baru = new data();
$query = "SELECT * FROM siswa , kelas, spp
where siswa.kelas_id = kelas.id && siswa.spp_id = spp.id";
$hasil = $baru->ambil_data($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISWA</title>

    <!-- Custom fonts for this template-->
    <link href="../../assetss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assetss/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SPP APPS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="rubah_sandi.php">
                    <span>Rubah Sandi</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>DATA</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">TAMPILAN DATA:</h6>
                        <a class="collapse-item" href="spp.php">SPP</a>
                        <a class="collapse-item" href="kelas.php">KELAS</a>
                        <a class="collapse-item" href="jurusan.php">JURUSAN</a>
                        <a class="collapse-item" href="siswa.php">SISWA</a>
                    </div>
                </div>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h4>Data Siswa</h4>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">nis</th>
                                <th scope="col">Nama lengkap</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">SPP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomer = 1;
                            foreach ($hasil as $item) {
                                ?>
                                <tr>
                                    <td><?= $item['nis'] ?></td>
                                    <td><?= $item['nama_lengkap'] ?></td>
                                    <td><?= $item['alamat'] ?></td>
                                    <td><?= $item['kode_kelas'] ?></td>
                                    <td><?= $item['nominal'] ?></td>
                                    <td><a href="edit_siswa.php"><button class="btn-block btn-facebook btn">edit</button></a></td>
                                    <td><a href="edit_siswa.php"><button class="btn-danger btn">hapus</button></a></td>
                                </tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.container-fluid -->
                <div class="container-fluid">
                    <a href="tambah_siswa.php"><button class="btn btn-success">TAMBAH</button></a>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../assetss/vendor/jquery/jquery.min.js"></script>
    <script src="../../assetss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assetss/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assetss/js/sb-admin-2.min.js"></script>

</body>

</html>