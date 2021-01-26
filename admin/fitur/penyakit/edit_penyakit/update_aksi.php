<?php 
// koneksi database
include '../../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$desc = $_POST['deskripsi'];
$cegah = ['pencegahan'];
$gejalas = $_POST['gejala'];
$alasan = $_POST['sebab'];
$diagnosa = $_POST['diagnosis'];
$sembuh = $_POST['penanganan'];

if(($nama!=NULL) && ($desc!=NULL) 
    && ($cegah!=NULL) && ($gejalas!=NULL) && ($alasan!=NULL) && ($diagnosa!=NULL) && ($sembuh!=NULL) ) {
        
        // update data ke database
        $data = mysqli_query($koneksi,"update penyakit set nama='$nama', deskripsi='$desc', pencegahan='$cegah', gejala='$gejalas', 
            sebab='$alasan', diagnosis='$diagnosa', penanganan='$sembuh' where id='$id'");

        if($data > 0 ){
            echo "
                    <script>
                    alert('Data berhasil diedit');
                    document.location.href='../index.php';
                    </script>
                ";
        }
}
else{
    echo "
        <script>
            alert('Masih ada data yang kosong atau jenis yang anda masukkan tidak sesuai');
            document.location.href='../index.php';
        </script>
        ";
}
?>
