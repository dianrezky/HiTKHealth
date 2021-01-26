<?php 
    require_once('../../../../koneksi.php');
    if((!isset($_SESSION['username'])) && ($_SESSION['level']!="doctor")){
        echo "<script>alert('Anda harus login');</script>";
        echo "<meta http-equiv='refresh' content='1;url=../login.php'>";
    }
    else{
        $id = $_GET['question_id'];

        $user = $_SESSION['username'];

        $query = "SELECT * FROM user WHERE username = '$user' ";

        $user = $koneksi->query($query);

        $user_row = mysqli_fetch_assoc($user);

        $nama = $user_row['username'];

        $answer = $_GET['detail'];

        date_default_timezone_set("Asia/Jakarta");
        
        $today = date("Y-m-d");

        $hour = date("H:i:s");

        $input_query = "INSERT INTO answer (question_id,answer_content,username,time_entry,hour)
                        VALUES('$id','$answer','$nama','$today','$hour')";

        if($koneksi->query($input_query)){
            mysqli_query($koneksi,"UPDATE konsultasi SET counter = 1 where question_id='$id'");
            echo "<meta http-equiv='refresh' content='1;url=./index.php?id=$id'>";
        }
    }
?>