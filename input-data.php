<?php
include "koneksi.php";

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$tempat_lahir = $_GET['tempat_lahir'];
$tgl_lahir = $_GET['tgl_lahir'];

$query = "INSERT INTO biodata(nama,alamat,tempat_lahir,tgl_lahir) VALUES('$nama','$alamat','$tempat_lahir','$tgl_lahir')";

$mysqli->query($query);
header('location:index.php');