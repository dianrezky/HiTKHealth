<?php
// koneksi database

include '../../koneksi.php';


// menangkap data yang di kirim dari form
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$berat      = $_POST['beratbadan'];
$tinggi     = $_POST['tinggibadan'];
$umur       = $_POST['umur'];
$username   = $_POST['username'];
$password   = $_POST['ps'];

$checkuser  = $username;
$checkps    = $password;
$checktb    = $tinggi;
$checkbb    = $berat;
$checkumur  = $umur;
$checkmail  = $email;
$checknama  = $nama;


$cekdulu= "select * from user where username='$username'"; 
$prosescek= mysqli_query($koneksi, $cekdulu);


if (mysqli_num_rows($prosescek)>0){
    header("location:.?pesan=gagal2");
}
else{
    if((ctype_alpha($checkuser)) && ($checkps!=NULL) && ($checkuser!=NULL) && ($checktb!=NULL) 
    && ($checkbb!=NULL)&& ($checkumur!=NULL) && ($checkmail!=NULL) && ($checknama!=NULL)){
    // menginput data ke database
        
        $status_user = "user";
    
        $data = mysqli_query($koneksi, "insert into user values(NULL,'$username','$password','$nama','$email','$umur','$berat','$tinggi','$status_user')");
    
        if ($data) {
            header("location:../login?pesan=daftarsukses"); 
        }
    }
else{
    header("location:.?pesan=gagal");
}}

?>