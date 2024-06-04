<?php
include "../../config/connect_db.php";

$koneksi = new mysqli("localhost", "root", "", "uprak_dzaral");

$query = "insert into siswa(nis, nama_lengkap, alamat, kelas_id, spp_id) 
values('" . $_POST['nis'] . "','" . $_POST['nama_lengkap'] . "','" . $_POST['alamat'] . "''" . $_POST['kelas_id'] . "''" . $_POST['spp_id'] . "')";

$hasil = $koneksi->query($query);
