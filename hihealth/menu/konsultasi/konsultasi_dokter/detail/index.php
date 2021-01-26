<?php
    require_once('../../../../koneksi.php');
    if (!isset($_SESSION['username']) && isset($_SESSION['level'])) {
        header('location:../../login/');
    }
    $id = $_GET['id'];
    $query = "SELECT * FROM konsultasi WHERE question_id='$id' ";

    $question = $koneksi->query($query);

    $row = mysqli_fetch_assoc($question);

    $username = $_SESSION['username'];

    $user_detail = mysqli_query($koneksi, "SELECT * FROM user where username='$username'");
    
    $user_detail = mysqli_fetch_assoc($user_detail);

    $query_comment = "SELECT * FROM comment WHERE comunity_id = '$id'";

    $answers = $koneksi->query($query_comment);


?>

<?php
require_once("../../../../header/menu_header.php");
?>
<main>
    <div class="main-container" style="position:absolute;left:25%;">
        <div class="reply-topic-container">
            <div class="reply-topic">
                <div class="reply-topic-header">
                    <h1 class="h1">Tanya Dokter</h1>
                    <div class="reply-doctor-button-container" style="margin-top:30px">
                        <a class="btn btn-sucess reply-doctor-button-container" href="../" name="newQuestion">Back to comunity</a>
                    </div>
                </div>
                <div class="box"></div>
            </div>
            <div class="detail-container" style="margin-top: 70px;">
                <div class="topic-title">
                    <h2>
                        Judul Topik : <?php echo $row['judul'] ?>
                    </h2>
                    <div class="user-topic line-btm" style="margin-top: 25px;">
                        <div class="user-topic-top">
                            <div class="user-topic-info">
                                <div class="profile-avatar" style="background-color: rgb(240, 181, 192); margin-bottom:25px">
                                    <?php echo $row['nama'][0] ?></div>
                                <div class="user-topic-title">
                                    <h4><?php echo $row['nama'] ?></h4>
                                    <span class="small-text text-light-grey">Anggota</span>
                                </div>
                                <div class="user-topic-count">
                                    <div class="small-text"><?php echo $row['time_entry'] ?></div>
                                    <div class="small-text"> <?php echo $row['hour'] ?> </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-topic-btm">
                            <p><?php echo $row['post_content'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($row['counter'] > 0) :

                //$query = "SELECT * FROM answer WHERE question_id = '$id'";
                
                $query_answer = "SELECT * FROM answer WHERE question_id = '$id'";

                $answers = $koneksi->query($query_answer);

                while ($answer = mysqli_fetch_array($answers)){
                    $usrname = $answer['username'];
                    //$answer = mysqli_fetch_assoc($answer);
                    $nama = mysqli_fetch_assoc($koneksi->query("SELECT * FROM user WHERE username = '$usrname'"));
                    $nama_user = $nama['username'];
                    if( $usrname == $nama_user ){
                        $real_name      = $nama['Nama'];
                    }
                

                /*$user_answer = $answer['username'];
                
                $namas = mysqli_fetch_assoc($koneksi->query("SELECT nama FROM user WHERE username = '$user_answer'"));
                
                $nama = $namas['Nama'];*/
            ?>

                <div class="doctor-topic line-btm broder">
                    <div id="doctorContainer" class="doctor-topic line-btm border" style="margin-bottom:25px;">
                        <div class="doctor-topic-top">
                            <div class="doctor-topic-info">
                                <div class="answered-by">Dijawab oleh: <?php echo $real_name ?></div>
                                <div class="user-topic-info" style="margin-top:25px;">
                                    <div class="profile-avatar" style="background-color: rgb(240, 181, 192);  ">
                                        <?php echo $real_name[0] ?></div>
                                    <div class="user-topic-title">
                                        <h4><?php echo $real_name ?></h4>
                                        <span class="small-text text-light-grey">Dokter</span>
                                    </div>
                                    <div class="user-topic-count">
                                        <div class="small-text"><?php echo $answer['time_entry'] ?></div>
                                        <div class="small-text"> <?php echo $answer['hour'] ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-container">
                            <p>
                                <?php
                                echo $answer['answer_content'];
                                ?>
                            </p>
                        </div>
                        <div class="doctor-topic-btm">
                        </div>
                        <div class="by-doctor">
                            <div>Oleh: </div>
                            <div class="tag-doctor">Dr. <?php echo $real_name ?></div>
                        </div>
                    </div>
                </div>
            <?php }endif; ?>
            <?php if ( ($row['counter'] == 0) || ($row['counter'] == NULL) ) : ?>

            <?php endif; ?>
        </div>
        
        <?php if (($_SESSION['level'] == 'doctor') && ($row['counter'] == 0)) : ?>
            <div class="row row-content">
                <div class="col-12" style="margin-top: 25px;">
                    <h3>Berikan mereka jawababan</h3>
                </div>

                <div class="col-12 col-md-9">
                    <form style="margin-top: 10px;" id="submit" method="GET" action="process.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label">Judul</label>
                            <div class="col-md-9">
                                <input type="text" placeholder="Judul Jawaban" class="form-control" id="title" name="title" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="detail" class="col-md-3 col-form-label">Berikan Detail Penjelasan</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="detail" name="detail" rows="14"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="text-right col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    Kirim Jawaban
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="question_id" value="<?php echo $row['question_id'] ?>" />
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
