<?php 
// koneksi database
include '../../../../koneksi.php';

// menangkap data yang di kirim dari form

$names      = $_POST['nama'];
$gol        = $_POST['golongan'];
$konsums    = $_POST['konsumsi'];
$bentuks    = $_POST['bentuk'];
$manfaats   = $_POST['manfaat'];
$jenis      = $_POST['kategori'];

// menginput data ke database


if(($names!=NULL) && ($gol!=NULL) && ($konsums!=NULL) && ($bentuks!=NULL) 
    && ($manfaats!=NULL)&& ($jenis!=NULL) && (($jenis=="obat bebas")||($jenis=="obat resep")||($jenis=="antiansietas")) ) {
        
        $data = mysqli_query($koneksi, "insert into obat values(NULL,'$names','$gol','$konsums','$bentuks','$manfaats','$jenis')");
        
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
            alert('Gagal simpan data obat');
            </script>";
            exit;
        }
}
else{
    header("location:.?pesan=gagal");
}
?>