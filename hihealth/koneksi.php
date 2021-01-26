<?php
session_start();
//Membuat koneksi database
$koneksi = mysqli_connect("localhost", "hitkheal_admin", "hihealthtk5", "sg_hitkhealth");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
