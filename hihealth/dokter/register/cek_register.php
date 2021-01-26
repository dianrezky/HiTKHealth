<?php
// koneksi database

include '../../koneksi.php';


// menangkap data yang di kirim dari form
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$penduduk   = $_POST['nik'];
$kerja      = $_POST['nip'];
$special    = $_POST['bagian'];
$username   = $_POST['username'];
$password   = $_POST['ps'];

$checkuser      = $username;
$checkps        = $password;
$checknip       = $kerja;
$checknik       = $penduduk;
$checkspecial   = $special;
$checkmail      = $email;
$checknama      = $nama;

$level_update = "doctor";

$cekdulu= "SELECT * FROM dokter WHERE username='$username'"; 
$prosescek= mysqli_query($koneksi, $cekdulu);

$koneksi->query("UPDATE dokter where username='$username' SET username=$username, Nama='$nama', sandi='$password' email='$email'");




if (mysqli_num_rows($prosescek)>0){
    echo "
    <script>
    alert('Gagal Ubah Data $username berhasil dihapus');
    document.location.href='../../admin/dashboard/index.php';
    </script>
    ";
}
else{
    if((ctype_alpha($checkuser)) && ($checkps!=NULL) && ($checkuser!=NULL) && ($checknip!=NULL) 
    && ($checknik!=NULL)&& ($checkspecial!=NULL) && ($checkmail!=NULL) && ($checknama!=NULL)){
    // menginput data ke database

        $status_user = "user";

        $data = mysqli_query($koneksi, "INSERT INTO dokter values('$username','$special','$kerja','$penduduk')");
        
        $update_user = mysqli_query($koneksi,"UPDATE user INNER JOIN dokter ON dokter.username=user.username 
            SET user.privilege='$level_update' where user.username='$username'");
            
            echo mysqli_error($koneksi);

        if ($data && $update_user) {
            echo "
                <script>
                alert('Berhasil Update Data User $username dan $username Berubah Menjadi Dokter');
                document.location.href='../../admin/dashboard/index.php';
                </script>";
            exit;
        }
    }
    else{
        echo "
        <script>
        alert('Gagal Update Data User $id dan $id Berubah Menjadi Dokter');
        document.location.href='../../admin/dashboard/index.php';
        </script>";
    exit;
    }
}

?>