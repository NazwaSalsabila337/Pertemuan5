<?php
$mysqli = new mysqli("localhost","root","","db_biodata");
if($mysqli->connect_error){
    die("Koneksi gagal : ".$mysqli->connect_error);
}else{
    //echo "Koneksi Berhasil.";
}
?>