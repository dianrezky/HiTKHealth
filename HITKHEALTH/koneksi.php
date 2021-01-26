<?php
session_start();
//Membuat koneksi database
$koneksi = mysqli_connect("localhost", "hitkhea1_sg05", "hitkhealth05", "hitkhea1_sg");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
