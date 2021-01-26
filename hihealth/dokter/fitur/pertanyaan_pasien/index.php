<?php

    require_once('../../../koneksi.php');
    if ( (!isset($_SESSION['status'])) && ($_SESSION['level'])!="doctor" ) {
        echo "<script>alert('Anda harus login');</script>";
        echo "<meta http-equiv='refresh' content='1;url=../../../user/login/'>";
    }
    else{

        require_once("../../../header/menu_header.php");
        $query = "SELECT * FROM konsultasi WHERE counter='0' ";
    
        $question = $koneksi->query($query);
       
        

?>
    <main>
        <div class="main-container" style="margin-top:0px; margin-left:150px" >
            
            <h1>List Pertanyaan Belum Terjawab</h1>
                <a class="btn btn-primary" href="/HIHEALTH/menu/konsultasi/konsultasi_dokter/" name="newQuestion" style = "margin:25px 0px 25px 0px;">Kembali Ke Menu Sebelumnya</a>
                
            <?php
        
                $query = "SELECT * FROM konsultasi where 'counter' IS NULL";
                $result = mysqli_query($koneksi, $query);
                
                $i=0;
            
                while ( $row = mysqli_fetch_array($question)){
                    $id=$row['question_id'];
                    $i++;
                    //echo$i;
            ?>        
                <div class="related-topic-card">
                    <div class="topic-info">
                        <div class="total-reply"><?php echo $row['counter']?> balasan</div>
                        <div class="reply-time"><?php echo $row['time_entry'] ?></div>
                    </div>
                    <div class="topic-container">
                        <a href="/HIHEALTH/menu/konsultasi/konsultasi_dokter/detail/index.php?id=<?php echo $id ?>">
                            <div id="profileAvatar" class="profile-avatar" style="background-color: rgb(225, 194, 169);"><?php echo $row['nama'][0] ?></div>
                            <div class="topic-title">
                                <p class="title"> <?php echo $row['judul'] ?> </p>
                                <div class="topic-by">
                                    <a href="/HIHEALTH/menu/konsultasi/konsultasi_dokter/detail/index.php?id=<?php  $row['id'] ?>"><?php  ?></a>
                                </div>
                            </div>
                    </div>
                    <div class="topic-detail">
                        <p class="title"><a href="/HIHEALTH/menu/konsultasi/konsultasi_dokter/detail/index.php/?id= <?php echo $id ?>">
                            </a></p>
                        <div>
                            <p><?php echo $row['post_excerpt'] ?></p>
                        </div><a href="/HIHEALTH/menu/konsultasi/konsultasi_dokter/detail/index.php?id=<?php echo $id ?>">
                        </a>
                        <p></p>
                    </div>
                </div>
            <?php
            }
            $a=0;         
            if($a==$i){
                ?>
                <div class="related-topic-card">
                    <div class="topic-title">
                        <div class="total-reply"></div>
                        <p class="title" style="font-size: 20px;">Semua Pertanyaan Sudah Terjawab</p>
                        <br></br>
                        <p class="title" style="font-size: 20px;">Terimakasih</p>
                    </div>
                </div>
                <?php
                
            }     
        ?>
        </div>
        <?php
                if (isset($_GET['filter'])) :
                ?>
            <?php
                    if ($_GET['filter']) :
            ?>
            <?php
                    endif;
            ?>
        <?php
                endif;
    }
        ?>
    </main>
<?php
    if (!isset($_SESSION['status'])) {
        
    }
    else{
    require_once("../../../footer/menu_footer.php");
    }
?>