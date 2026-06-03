<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "root",
    "mahasiswa"
);

if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>