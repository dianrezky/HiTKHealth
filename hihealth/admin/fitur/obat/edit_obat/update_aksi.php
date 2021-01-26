<?php 
// koneksi database
include '../../../../koneksi.php';
 
// menangkap data yang di kirim dari form

$id         = $_POST['id'];
$names     = $_POST['nama'];
$gol        = $_POST['golongan'];
$konsum     = $_POST['konsumsi'];
$bentuks    = $_POST['bentuk'];
$manfaats   = $_POST['manfaat'];
$jenis      = $_POST['kategori'];


if( ($names!=NULL) && ($gol!=NULL) && ($konsum!=NULL) && ($bentuks!=NULL) && ($manfaats!=NULL) 
    && ($jenis!=NULL) && (($jenis=="obat resep")||($jenis=="obat bebas")) || (($jenis=="antiansietas")) ){


        // update data ke database
        $data = mysqli_query($koneksi,"update obat set nama='$names', golongan='$gol', konsumsi='$konsum', bentuk='$bentuks', manfaat='$manfaats', kategori='$jenis' where id='$id'");


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
