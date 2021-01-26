<?php
$pathInPieces = $_SERVER['DOCUMENT_ROOT'] . "/";
require_once($pathInPieces . "/koneksi.php");
$adding = "";

if (isset($_SESSION['status'])) {
    if ($_SESSION['level'] == "admin") {
        $adding = "<a href='/admin/dashboard/'>Home</a>";
    } else if ($_SESSION['level'] == 'doctor') {
        $adding = "<a href='/dokter/dashboard/'>Home</a>";
    } else {
        $adding = "<a href='/'>Home</a>";
    }
}

function generate_nav($add)
{
    if (isset($_SESSION['status'])) {
        if ($_SESSION['level'] == "user") {
?>
            <li><a>Profile</a>
                <ul class='submenu'>
                    <li><a href='/user/dashboard/edit_profile.php'>Edit Profile</a></li>
                    <li><a href='/user/logout.php'>Logout</a></li>
                </ul>
            </li>
        <?php
        } else if ($_SESSION['level'] == "doctor") {
        ?>
            <li><a>Profile</a>
                <ul class='submenu'>
                    <li><?php echo "$add" ?></li>
                    <li><a href='/dokter/dashboard/edit_profile.php'>Edit Profile</a></li>
                    <li><a href='/user/logout.php'>Logout</a></li>
                </ul>
            </li>
<?php
        }
    }
}

?>
<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent ">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/asd.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="active"><a href="index.php"> Home</a></li>
                                    <li><a href="menu/artikel/index.php">Artikel</a>
                                        <ul class="submenu">
                                            <li><a href="menu/covid/">COVID-19</a></li>
                                            <li><a href="menu/artikel/kesehatan/index.php">Kesehatan</a></li>
                                            <li><a href="menu/artikel/forum/index.php">Forum Diskusi</a></li>
                                            <li><a href="menu/artikel/podcast/index.php">PODCAST Kesehatan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="menu/referensi/index.php">Referensi</a>
                                        <ul class="submenu">
                                            <li><a href="menu/referensi/data_obat/">Daftar Obat</a></li>
                                            <li><a href="menu/referensi/rumahsakit/">Rumah Sakit</a></li>
                                            <li><a href="menu/referensi/rumus_sehat/">Rumus Kesehatan</a></li>
                                            <li><a href="menu/referensi/data_penyakit/">Daftar Penyakit</a></li>
                                            <li><a href="menu/referensi/daftar_kegiatan/">Daftar Kalori Kegiatan</a></li>
                                            <li><a href="menu/referensi/data_food/">Daftar Kalori Makanan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="menu/kalkulator">Kalkulator Kesehatan</a>
                                        <ul class="submenu">
                                            <li><a href="menu/kalkulator/bmi/">BMI</a></li>
                                            <li><a href="menu/kalkulator/kalori/">BMR</a></li>
                                            <li><a href="menu/kalkulator/kegiatan/">Perhitungan Kalori Kegiatan</a></li>
                                            <li><a href="menu/kalkulator/wanita/">Wanita</a></li>
                                            <li><a href="menu/kalkulator/jantung/">Jantung</a></li>
                                            <li><a href="menu/kalkulator/kehamilan/">Kehamilan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="menu/konsultasi">Konsultasi</a>
                                        <ul class="submenu">
                                            <li><a href="menu/konsultasi/analisa_gejala/">Analisa Gejala Penyakit</a></li>
                                            <li><a href="menu/konsultasi/konsultasi_dokter/">Konsultasi Dengan Dokter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/USER GUIDE WEBSITE HITKHEALTH.pdf">User Guide</a></li>
                                    <?php generate_nav($adding) ?><li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>