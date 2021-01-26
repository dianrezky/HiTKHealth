
<?php 
    include '../../koneksi.php';
    if(isset($_SESSION['status'])){
        echo "<script>alert('Anda sudah login');</script>";
        echo "<meta http-equiv='refresh' content='1;url=/HIHEALTH/'>";
    }
    else{
?>

<?php require_once("../../header/login_header.php")?>
    <div class="main">
		<!-- Sing in  Form -->
		<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../../assets/img/signin-image.png" alt="sing up image"></figure>
                        <a href="../register/index.php" class="signup-image-link">Don't Have An Account ? Sign Up !</a>
                        <p>Jika Kamu Sudah Mendaftar dan Kamu Adalah Seorang Dokter, Hubungan Kami <a href="#">Disini</a></p>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="cek_login.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
		</div>
<?php 
    }
    require_once("../../footer/login_footer.php");
?>

