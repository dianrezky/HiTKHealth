<?php
//Pesan Notifikasi
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "gagal") {
		echo "<script>alert('username sudah ada yang menggunakan')</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Edit Profile HiTKHealth</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<style>

.delivery-label {
    display: block;
    padding-left: 30px;
    position: relative;
}

.delivery-label:before {
    position: absolute;
    width: 15px;
    height: 15px;
    content: '';
    border: 1px solid black;
    left: 0;
}

.delivery-option:checked + .delivery-label:before {
    content: 'x';
    line-height: 15px;
    text-align: center;
}

.delivery-option {
    position: absolute;
    margin-left: -1000px;
}

</style>
	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="wrapper" style="background-image: url('images/bg-registration-form-1.png');">
		<div class="inner">
			<div class="image-holder">
				<img src="images/registration-form-1.png" alt="">
				<i class="zmdi zmdi-arrow-right"><a href="index.php"><button>Kembali</button></a></i>
			</div>


			<?php

			include '../../koneksi.php';
			//Mengambil id user dengan mengecek session


			$usernamesesi = $_SESSION['username'];
			/*$data = mysqli_query($koneksi, "SELECT dokter.username, dokter.nik, dokter.nip,  
			FROM dokter INNER JOIN user ON user.username = dokter.username WHERE dokter.username='$usernamesesi'");
			$data = mysqli_query($koneksi, "SELECT dokter.username, dokter.nik, dokter.nip,  
			FROM dokter INNER JOIN user ON user.username = dokter.username WHERE dokter.username='$usernamesesi'");
			&& ($d2 = mysqli_fetch_array($data2))
			*/

			//$data = mysqli_query($koneksi, "SELECT * FROM dokter where username='$usernamesesi'");
			$data2 = mysqli_query($koneksi, "SELECT * FROM user where username='$usernamesesi'");

			while (($d2 = mysqli_fetch_array($data2))) {

			?>
				<form method="POST" action="update_user.php">
					<h3>EDIT YOUR PROFILE</h3>
					Nama Lengkap
					<div class="form-group">
						<input type="text" name="nama" value="<?php echo $d2['Nama']; ?>" class="form-control">
					</div>
					<div class="form-wrapper">Apakah Anda Ingin Mengganti Username ?
						<br></br>
						<input type="radio" name="jawab[]"  value="ya"  id="standard" class="delivery-option"/><label for="standard" class="delivery-label"> Ya</label>
						<span style="display:inline-block; width: 62px;"></span>
						<input type="radio" name="jawab[]" value="tidak"  id="today" class="delivery-option"/><label for="today" class="delivery-label"> Tidak </label>
						<br></br>
					</div>
					<div class="form-wrapper">Username
						<input type="text" name="usernames" value="<?php echo $d2['username']; ?>" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">Email
						<input type="text" name="emails" value="<?php echo $d2['email']; ?>" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">Password
						<input type="text" name="ps" value="<?php echo $d2['sandi']; ?>" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-group">
						Berat Badan
						<input type="text" name="bb" value="<?php echo $d2['beratbadan']; ?>" class="form-control">
						Tinggi Badan
						<input type="text" name="tb" value="<?php echo $d2['tinggibadan']; ?>" class="form-control">
					</div>
					<button>Update
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			<?php
			}
			?>

		</div>
	</div>
</body>

</html>