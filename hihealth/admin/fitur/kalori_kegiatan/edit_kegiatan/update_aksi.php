<?php 
// koneksi database
include '../../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['ket'];
$mets = $_POST['met'];

if(($nama!=NULL) && ($mets!=NULL) 
    && ($jenis!=NULL) && (($jenis=="sport")||($jenis=="home")||($jenis=="inactive")
    ||($jenis=="berkebun")||($jenis=="menari")||($jenis=="berkendara")||($jenis=="volunterr")||($jenis=="agama")
    ||($jenis=="berjalan")||($jenis=="berlari")||($jenis=="music")||($jenis=="bekerja")||($jenis=="self")||($jenis=="water")
    ||($jenis=="winter")||($jenis=="sepeda")||($jenis=="latihan")||($jenis=="fishhunt")||($jenis=="lainnya") ) ){
        
        // update data ke database
        $data = mysqli_query($koneksi,"update activity set nama='$nama', met='$mets', keterangan='$jenis' where id='$id'");

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
