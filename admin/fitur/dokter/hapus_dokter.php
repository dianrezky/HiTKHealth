<?php 
// koneksi database
include '../../../koneksi.php';

    if(!isset($_POST['hapus'])){
        echo "
                <script>
                alert('Gagal Hapus Data Dokter $id');
                document.location.href='data_dokter.php';
                </script>";
            exit;
    }
    else{
        // menangkap data id yang di kirim dari url
        
        $id = $_POST['id'];

        $level_update = "user";

        $cekdulu= "SELECT * FROM dokter WHERE username='$id'"; 
        $prosescek= mysqli_query($koneksi, $cekdulu);

        $data = mysqli_query($koneksi,"delete from dokter where username='$id'");
        
        $prosescek= mysqli_query($koneksi, $cekdulu);


        if (mysqli_num_rows($prosescek)>0){
            echo "
            <script>
            alert('Gagal Ubah Data $id');
            document.location.href='../../dashboard/index.php';
            </script>
            ";
        }
        else{

            $update_user = mysqli_query($koneksi,"UPDATE user SET privilege='$level_update' where username='$id'");


            echo mysqli_error($koneksi);

            // mengalihkan halaman kembali ke index.php

            if ($update_user) {
                echo "
                <script>
                alert('Berhasil Hapus Data Dokter $id dan $id Berubah Menjadi User');
                document.location.href='data_dokter.php';
                </script>";
                exit;
            }
            else{
                echo "
                    <script>
                    alert('Gagal Hapus Data Dokter $id');
                    document.location.href='data_dokter.php';
                    </script>";
                exit;
            }
        }
    }
?>
