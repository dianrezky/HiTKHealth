<?php
//Pesan Notifikasi
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "gagal") {
		echo "<script>alert('Username / Password salah')</script>";
	} else if ($_GET['pesan'] == "logout") {
		echo "<script>alert('Logout Berhasil, Anda telah keluar')</script>";
	} else if ($_GET['pesan'] == "daftarsukses") {
		echo "<script>alert('Pendaftaran Berhasil, Silahkan login menggunakan akun yang telah dibuat')</script>";
    }else if ($_GET['pesan'] == "gagal2") {
		echo "<script>alert('Username / Password Harus Diisi')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login HiTKHealth</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/HIHEALTH/assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/HIHEALTH/assets/css/user/login/style.css">
</head>
<body>
