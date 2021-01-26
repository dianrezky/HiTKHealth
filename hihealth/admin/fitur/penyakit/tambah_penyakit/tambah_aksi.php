<?php 
// koneksi database
include '../../../../koneksi.php';

// menangkap data yang di kirim dari form

$names = $_POST['nama'];
$desc = $_POST['deskripsi'];
$cegah = $_POST['pencegahan'];
$gejalas = $_POST['gejala'];
$alasan = $_POST['sebab'];
$diagnosa = $_POST['diagnosis'];
$sembuh = $_POST['penanganan'];

// menginput data ke database


if(($names!=NULL) && ($desc!=NULL) 
    && ($cegah!=NULL) && ($gejalas!=NULL) && ($alasan!=NULL) && ($diagnosa!=NULL) && ($sembuh!=NULL) ){

        $data = mysqli_query($koneksi, "insert into penyakit values(NULL,'$names','$desc','$cegah','$gejalas','$alasan','$diagnosa','$sembuh')");

        
        if ($data) {
            echo "
            <script>
            alert('Data berhasil ditambahkan');
            document.location.href='../index.php';
            </script>
            ";
        }
        else{
            echo "
            <script>
            alert('Gagal simpan data penyakit');
            </script>";
            exit;
        }
}
else{
    header("location:.?pesan=gagal");
}
?>