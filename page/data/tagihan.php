<?php
include "../../config/connect_db.php";

$baru = new data();
$bulan = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$bulan_dibayar = [];
if (isset($_POST['kirim'])) {
    $nis = $_POST['nis'];
    $tahun = $_POST['tahun'];
    $query = "SELECT siswa.nis, siswa.nama_lengkap, pembayaran.bulan_tagihan 
              FROM siswa 
              LEFT JOIN pembayaran ON siswa.nis = pembayaran.nis 
              WHERE siswa.nis = '$nis' AND pembayaran.tahun_tagihan = '$tahun'";
    $hasil = $baru->ambil_data($query);
    foreach ($hasil as $item) {
        if (!empty($item['bulan_tagihan'])) {
            $bulan_dibayar[] = $item['bulan_tagihan'];
        }
    }
}
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
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h4>Data Tagihan</h4>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form class="user" method="POST" action="">
                        <div class="form-group">
                            <label for="nis" class="col-lg-3">NIS</label>
                            <input type="text" class="custom-select-sm" id="nis" name="nis" placeholder="Masukkan NIS"
                                required>
                            <label for="tahun" class="col-lg-3">Tahun</label>
                            <input type="text" class="custom-select-sm" id="tahun" name="tahun"
                                placeholder="Masukkan Tahun" required>
                            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>

                <div class="container-fluid">
                    <?php
                    if (isset($hasil) && !empty($hasil)) {
                        $siswa = $hasil[0];
                        ?>
                        <div class="">
                            <label for="niss" class="col-lg-2">NIS</label>
                            <label for="hasil" class="offset-1">: <?= $siswa['nis'] ?></label>
                        </div>
                        <div class="">
                            <label for="niss" class="col-lg-2">Nama Lengkap</label>
                            <label for="hasil" class="offset-1">: <?= $siswa['nama_lengkap'] ?></label>
                        </div>
                        <div class="container-fluid">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($bulan as $b) {
                                        $status = in_array($b, $bulan_dibayar) ? 'Sudah Dibayar' : 'Belum Dibayar';
                                        echo "<tr>
                                                <td>{$b}</td>
                                                <td>{$status}</td>
                                              </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    } else if (isset($_POST['kirim'])) {
                        echo "<div class='alert alert-warning'>NIS dan Tahun tidak ditemukan.</div>";
                    }
                    ?>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; SPP APP 2024</span>
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