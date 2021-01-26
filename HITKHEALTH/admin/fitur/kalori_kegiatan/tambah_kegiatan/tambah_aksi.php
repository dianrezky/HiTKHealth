<?php 
// koneksi database
include '../../../../koneksi.php';

// menangkap data yang di kirim dari form
$names   = $_POST['nama'];
$mets  = $_POST['mets'];
$jenis = $_POST['jenis'];

// menginput data ke database


if(($names!=NULL) && ($mets!=NULL) 
    && ($jenis!=NULL) && (($jenis=="sport")||($jenis=="home")||($jenis=="inactive")
    ||($jenis=="berkebun")||($jenis=="menari")||($jenis=="berkendara")||($jenis=="volunterr")||($jenis=="agama")
    ||($jenis=="berjalan")||($jenis=="berlari")||($jenis=="music")||($jenis=="bekerja")||($jenis=="self")||($jenis=="water")
    ||($jenis=="winter")||($jenis=="sepeda")||($jenis=="latihan")||($jenis=="fishhunt")||($jenis=="lainnya") )) {
        
        $data = mysqli_query($koneksi, "insert into activity values(NULL,'$names','$mets','$jenis')");
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
            alert('Gagal simpan data kegiatan');
            </script>";
            exit;
        }
}
else{
    header("location:.?pesan=gagal");
}
?>