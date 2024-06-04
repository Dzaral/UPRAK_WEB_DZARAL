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

    <title>TAMBAH SISWA</title>

    <!-- Custom fonts for this template-->
    <link href="../../assetss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assetss/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <form class="user" action="simpan_siswa.php" method="POST">
                                        <div class="form-group">
                                            <label for="nis">nis</label>
                                            <input type="text" class="form-control form-control-user" id="nis"
                                                name="nis" placeholder="Masukkan nis">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-user" id="nama_lengkap"
                                                name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">alamat</label>
                                            <input type="text" class="form-control form-control-user" id="alamat"
                                                name="alamat" placeholder="Masukkan Alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="kelas_id">kelas_id</label>
                                            <input type="text" class="form-control form-control-user" id="kelas_id"
                                                name="kelas_id" placeholder="Masukkan kelas">
                                        </div>
                                        <div class="form-group">
                                            <label for="spp_id">spp_id</label>
                                            <input type="text" class="form-control form-control-user" id="spp_id"
                                                name="spp_id" placeholder="Masukkan Nominal">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            TAMBAH
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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