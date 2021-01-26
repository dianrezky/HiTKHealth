<?php 

// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$names          = $_POST['nama'];
$un             = $_POST['usernames'];
$passwords      = $_POST['ps'];
$mail           = $_POST['emails'];
$bb             = $_POST['bb'];
$tb             = $_POST['tb'];

if(isset($_POST['jawab'])){
    $jawab=$_POST['jawab'];
    for( $i=0; $i < count($jawab); $i++ ){
        $ans = $jawab[$i];
    }
}
else{
    $ans = NULL;
}

$cekdulu= "select * from dokter where username='$un'"; 
$prosescek= mysqli_query($koneksi, $cekdulu);

if ( ($ans=="ya") && ($ans!="tidak") ){

    $report = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$un' ");
    
    if(mysqli_num_rows($report)>0){

        echo "
                <script>
                alert('Username telah terdaftar');
                document.location.href='../../index.php';
                </script>
                ";
        
        /*echo "<script> alert('Username telah terdaftar') </script>";
        sleep(3);
        header('Location: ../../index.php');*/
    }
    else{

        if( (ctype_alpha($un)) && ($passwords!=NULL) && ($un!=NULL) && ($names!=NULL)
            && ($mail!=NULL)&& ($tb!=NULL) && ($bb!=NULL) && ($ans!=NULL) ){
    
            //update session
            $user = $_SESSION['username'];
            
            /*$_SESSION['username']= $un;
            $check = mysqli_query($koneksi,"UPDATE dokter SET 
            nip='$nip',
            nik='$nik'
            where username = '$un'");
            echo mysqli_error($koneksi);*/

            // update data ke database
            
            //$update_dokter = mysqli_query($koneksi,"UPDATE dokter SET username = '$un' WHERE username='$user'");
            //$koneksi->query("UPDATE dokter INNER JOIN user ON dokter.username=user.username where user.username='$user' SET username='$un'");

            $koneksi = mysqli_query($koneksi,"UPDATE user INNER JOIN dokter ON dokter.username=user.username SET 
            user.username = '$un',
            user.Nama = '$names',   
            user.email='$mail', 
            user.sandi='$passwords', 
            user.beratbadan='$bb', 
            user.tinggibadan='$tb' 
            where user.username='$user'");
            
            echo mysqli_error($koneksi);

            // mengalihkan halaman kembali ke index.php
            
            if( ($koneksi)){
                $_SESSION['username']= $un; 
                echo "
                    <script>
                    alert('Data berhasil diubah');
                    document.location.href='../../index.php';
                    </script>
                ";
            }
            else{
                echo "
                <script>
                alert('Data $mail tidak berhasil diubah. username tidak boleh mengandung angka dan spasi atau data masih ada yang kosong. Pastikan Mencentang Salah Satu Pilihan Ganti Username ');
                document.location.href='edit_profile.php';
                </script>
                ";
            }
        }
        else{
            echo "
            <script>
            alert('Gagal Update Data. Pastikan Mencentang Salah Satu Pilihan Ganti Username');
            document.location.href='../../index.php';
            </script>
            ";
        }
    }
}
else{

    if( (ctype_alpha($un)) && ($passwords!=NULL) && ($un!=NULL) && ($names!=NULL)
            && ($mail!=NULL)&& ($tb!=NULL) && ($bb!=NULL) && ($ans!=NULL) && ($ans=="tidak") && ($ans!="ya") ){
    
            //update session
            $user = $_SESSION['username'];
            
            $koneksi = mysqli_query($koneksi,"UPDATE user INNER JOIN dokter ON dokter.username=user.username SET 
            user.username = '$user',
            user.Nama = '$names',   
            user.email='$mail', 
            user.sandi='$passwords', 
            user.beratbadan='$bb', 
            user.tinggibadan='$tb' 
            where user.username='$user'");
            
            echo mysqli_error($koneksi);

            // mengalihkan halaman kembali ke index.php
            
            if( ($koneksi)){
                $_SESSION['username']= $un; 
                echo "
                    <script>
                    alert('Data berhasil diubah');
                    document.location.href='../../index.php';
                    </script>
                ";
            }
            else{
                echo "
                <script>
                alert('Data $mail tidak berhasil diubah. username tidak boleh mengandung angka dan spasi atau data masih ada yang kosong. Pastikan Mencentang Salah Satu Pilihan Ganti Username ');
                document.location.href='edit_profile.php';
                </script>
                ";
            }
        }
    else{
        echo "
        <script>
        alert('Gagal Update Data. Pastikan Mencentang Salah Satu Pilihan Ganti Username');
        document.location.href='../../index.php';
        </script>
        ";
    }
}


?>