<?php
include "../../config/connect_db.php";

$baru = new data();

$query = 'SELECT * FROM siswa , kelas, spp';

$koneksi = new mysqli("localhost", "root", "", "uprak_dzaral");

$hasil = $koneksi->query($query);

$edit = $hasil->fetch_assoc();

// if (isset($_POST['kode_kelas' && 'nominal'])) {
//     $query = 'UPDATE kelas, spp SET kode_kelas="' . $_POST['kode_kelas'] . '", nominal="' . $_POST['nominal']
//         . '" WHERE id=' . $_GET['id'];
//     $koneksi->query($query);
//     header('location:siswa.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EDIT SISWA</title>

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
                                    <form class="user">
                                        <div class="form-group">
                                            <label for="kode_kelas">Kelas</label>
                                            <input type="text" class="form-control form-control-user" id="kode_kelas"
                                                name="kode_kelas" aria-describedby="emailHelp" list="contoh">
                                            <datalist id="contoh">
                                                <option value="X-RPL"></option>
                                                <option value="XI-RPL"></option>
                                                <option value="XII-RPL"></option>
                                                <option value="X-TKRO"></option>
                                                <option value="XI-TKRO"></option>
                                                <option value="XII-TKRO"></option>
                                            </datalist>
                                        </div>
                                        <div class="form-group">
                                            <label for="kode_kelas">SPP</label>
                                            <input type="text" class="form-control form-control-user" id="nominal"
                                                name="nominal" list="contoh"><datalist id="contoh1">
                                                <datalist id="contoh1">
                                                    <option value="2022-250000"></option>
                                                    <option value="2023-225000"></option>
                                                    <option value="2024-200000"></option>
                                                </datalist>
                                        </div>
                                        <a href="spp.php" class="btn btn-primary btn-user btn-block">
                                            Edit
                                        </a>
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