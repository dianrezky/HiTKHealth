<?php 
// koneksi database
include '../../../../koneksi.php';

// menangkap data yang di kirim dari form
$names   = $_POST['nama'];
$weight  = $_POST['berat'];
$calory = $_POST['kalori'];
$units   = $_POST['unit'];
$jenis = $_POST['jenis'];

// menginput data ke database


if(($names!=NULL) && ($weight!=NULL) && ($calory!=NULL) 
    && ($units!=NULL)&& ($jenis!=NULL) && (($jenis=="makanan")||($jenis=="minuman")) && (($units=="gram")||($units=="ml")||($units=="sdm")) ){
        
        
        $data = mysqli_query($koneksi, "insert into makanan values(NULL,'$names','$weight','$calory','$units','$jenis')");

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
            alert('Gagal simpan data makanan');
            </script>";
            exit;
        }
}
else{
    header("location:.?pesan=gagal");
}
?>