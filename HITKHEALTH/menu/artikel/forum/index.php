<?php
require_once("../../../koneksi.php");

$query = "SELECT * FROM komunitas";
$result = $koneksi->query($query);
// print_r (mysqli_fetch_assoc($result));
require_once("../../../header/menu_header.php");

?>

<main>
    <div class="container" style="margin-top:130px ">
        <h1 align="center">Forum komunitas</h1>
        <br></br>
        <br></br>
        <div class="row" style="margin-top: 25px;">
            <?php
            if ((isset($_SESSION['status'])) && ($_SESSION['level'] != "admin") && ($_SESSION['level'] != "doctor")) {
            ?>
                <span style="display:inline-block; width: 330px;"></span>
                <a class="btn btn-primary col-md-6" href="./create-forum" name="newQuestion" style="margin:25px 0px 25px 0px;">Buat Forum Baru</a>

            <?php
            } 
            else if($_SESSION['level'] != "doctor")  {

            ?>
                <div class="col-md-1"></div>
                <span style="display:inline-block; width: 220px;"></span>

                <a class="btn btn-primary col-md-6" href="/user/login/" name="questionList">Login Untuk Membuat Forum Baru </a>

            <?php
            }
            ?>

        </div>


        <?php
        
        
        while ($row = mysqli_fetch_assoc($result)){

                    $a = $row['comunity_id']; 

                    $query_ans = "SELECT * FROM comment where comunity_id ='$a'";
                    $result_ans = $koneksi->query($query_ans);
                    $count_ans = 0;
                    while($answer_count = mysqli_fetch_assoc($result_ans)){
                        
                        $row_ans = $answer_count['comunity_id'];

                        $count_ans++;
                    }

                ?>

            <div class="related-topic-card" style="margin-top: 50px;">
                <div class="topic-info">

                    <div class="total-reply"><?php echo $count_ans ?> balasan</div>
                    <div class="reply-time"><?php echo $row['time_entry'] ?></div>
                </div>
                <div class="topic-container">
                    <a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>">
                        <a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>">
                            <div id="profileAvatar" class="profile-avatar" style="background-color: rgb(225, 194, 169);"><?php echo $row['username'][0] ?></div>
                        </a>

                        <div class="topic-title">
                            <a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>">
                                <h5><?php echo $row['username']; ?></h5>
                            </a>
                            <p class="title" style="margin-top: 0px;"> <?php echo $row['Judul'] ?> </p>
                            <div class="topic-by">
                                <a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>"><?php  ?></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="topic-detail">
                    <p class="title"><a href="./komunitas/index.php/?id= <?php echo $row['comunity_id'] ?>">
                        </a></p>
                    <div>
                        <p><?php echo $row['post_excerpt'] ?></p>
                    </div><a href="./komunitas/index.php?id=<?php echo $row['comunity_id'] ?>">
                    </a>
                    <p></p>
                </div>

            </div>
        <?php
        }
        ?>
    </div>
    <!-- <?php
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
        ?> -->
</main>

</body>

</html>