<?php 
// koneksi database
include '../../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$weight = $_POST['weight'];
$calory = $_POST['calory'];
$units = $_POST['units'];
$jenis = $_POST['jenis'];

if(($nama!=NULL) && ($weight!=NULL) && ($calory!=NULL) 
    && ($units!=NULL)&& ($jenis!=NULL) && (($jenis=="makanan")||($jenis=="minuman")) && (($units=="gram")||($units=="ml")||($units=="sdm")) ){
        
        // update data ke database
        $data = mysqli_query($koneksi,"update makanan set food='$nama', berat='$weight', kalori='$calory', satuan='$units', jenis='$jenis' where id='$id'");

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
            alert('Masih ada data yang kosong atau jenis/unit yang anda masukkan tidak sesuai');
            document.location.href='../index.php';
        </script>
        ";
}
?>
