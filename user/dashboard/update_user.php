<?php 

// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form

$id         = $_POST['id'];
$names       = $_POST['nama'];
$un         = $_POST['usernames'];
$passwords  = $_POST['ps'];
$mail       = $_POST['emails'];
$height     = $_POST['tb'];
$weight     = $_POST['bb'];
$age        = $_POST['ages'];
$level      = $_POST['levels'];

if(isset($_POST['jawab'])){
    $jawab=$_POST['jawab'];
    for( $i=0; $i < count($jawab); $i++ ){
        $ans = $jawab[$i];
    }
}
else{
    $ans = NULL;
}

$cekdulu= "select * from user where username='$un'"; 
$prosescek= mysqli_query($koneksi, $cekdulu);


if ( ($ans=="ya")  && ($ans!="tidak") && ($ans!=NULL) ){

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

        if((ctype_alpha($un)) && ($passwords!=NULL) && ($un!=NULL) && ($names!=NULL)
            && ($mail!=NULL)&& ($height!=NULL) && ($weight!=NULL) && ($age!=NULL) && ($ans!="tidak") && ($ans!=NULL)){

            $user = $_SESSION['username'];

            $check1 = mysqli_query($koneksi,"UPDATE user SET 
            username = '$un',
            sandi='$passwords',
            Nama='$names',
            email='$mail',
            umur='$age',
            beratbadan='$weight',
            tinggibadan='$height',
            privilege='$level'
            where username='$user'");
            echo mysqli_error($koneksi);
            
            if($check1){
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
                alert('Data tidak berhasil diubah. username tidak boleh mengandung angka dan spasi atau data masih ada yang kosong');
                document.location.href='edit_profile.php';
                </script>
                ";
            }
        }
        else{
            echo "
            <script>
            alert('Gagal Update Data. Pastikan Mencentang Salah Satu Pilihan Ganti Username');
            document.location.href='edit_profile.php';
            </script>
            ";
        }
    }
}
    

else{
    
    if((ctype_alpha($un)) && ($passwords!=NULL) && ($un!=NULL) && ($names!=NULL)
    && ($mail!=NULL)&& ($height!=NULL) && ($weight!=NULL) && ($age!=NULL) && ($ans!=NULL) && ($ans=="tidak") && ($ans!="ya")){
    
        //update session
        
        $user = $_SESSION['username'];
        // update data ke database
        
        $check = mysqli_query($koneksi,"UPDATE user SET 
        username = '$user',
        sandi='$passwords',
        Nama='$names',
        email='$mail',
        umur='$age',
        beratbadan='$weight',
        tinggibadan='$height',
        privilege='$level'
        where username='$user'");

        // mengalihkan halaman kembali ke index.php

        if($check > 0){
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
            alert('Data tidak berhasil diubah. username tidak boleh mengandung angka dan spasi atau data masih ada yang kosong');
            document.location.href='edit_profile.php';
            </script>
            ";
        }
    }
    else{
        echo "
        <script>
        alert('Gagal Update Data. Pastikan Mencentang Salah Satu Pilihan Ganti Username');
        document.location.href='edit_profile.php';
        </script>
        ";
    }
    
}
?>