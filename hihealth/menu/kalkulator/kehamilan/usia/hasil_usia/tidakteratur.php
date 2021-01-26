<?php
    include_once 'index.php';
    function pilih($pilihan){

        if ($pilihan == "satu") {
            satu();
        }
        if ($pilihan == "dua") {
            dua();
        }
        if ($pilihan == "tiga") {
            tiga();
        }
    }

function satu(){

    include_once 'index.php';

    if (isset($_POST['submit'])) {
        // Input form
    
        
        $tanggal    = $_POST['tanggal'];
        $status   = $_POST['status'];
        $waktu      = $_POST['waktu'];
    }

    function addDayswithdates($date,$days){

        $date = strtotime("+".$days." days", strtotime($date));
        return  date("d-m-Y", $date);
    
    }

    $tambahtrimester1 = addDayswithdate($tanggal,21);
    $hphtsesuai = decDayswithdate($tambahtrimester1,14);

    $trimester1awal = date('d M Y', strtotime($tanggal));
    $trimester1akhir = addDayswithdate($tanggal,90);

    $minggu1_t1awal   = addDayswithdate($trimester1awal,0);
    $minggu2_t1awala  = addDayswithdate($minggu1_t1awal,7);
    $minggu3_t1awala  = addDayswithdate($minggu2_t1awala,7);
    $minggu4_t1awala  = addDayswithdate($minggu3_t1awala,7);
    $minggu5_t1awala  = addDayswithdate($minggu4_t1awala,7);
    $minggu6_t1awala  = addDayswithdate($minggu5_t1awala,7);
    $minggu7_t1awala  = addDayswithdate($minggu6_t1awala,7);        
    $minggu8_t1awala  = addDayswithdate($minggu7_t1awala,7);
    $minggu9_t1awala  = addDayswithdate($minggu8_t1awala,7);
    $minggu10_t1awala = addDayswithdate($minggu9_t1awala,7);
    $minggu11_t1awala = addDayswithdate($minggu10_t1awala,7);
    $minggu12_t1awala = addDayswithdate($minggu11_t1awala,7);
    $minggu13_t1awala = addDayswithdate($minggu12_t1awala,7);

    $minggu2_t1awal  = date("d-m-Y", strtotime($minggu2_t1awala));
    $minggu3_t1awal  = date("d-m-Y", strtotime($minggu3_t1awala));
    $minggu4_t1awal  = date("d-m-Y", strtotime($minggu4_t1awala));
    $minggu5_t1awal  = date("d-m-Y", strtotime($minggu5_t1awala));
    $minggu6_t1awal  = date("d-m-Y", strtotime($minggu6_t1awala));
    $minggu7_t1awal  = date("d-m-Y", strtotime($minggu7_t1awala));        
    $minggu8_t1awal  = date("d-m-Y", strtotime($minggu8_t1awala));
    $minggu9_t1awal  = date("d-m-Y", strtotime($minggu9_t1awala));
    $minggu10_t1awal = date("d-m-Y", strtotime($minggu10_t1awala));
    $minggu11_t1awal = date("d-m-Y", strtotime($minggu11_t1awala));
    $minggu12_t1awal = date("d-m-Y", strtotime($minggu12_t1awala));
    $minggu13_t1awal = date("d-m-Y", strtotime($minggu13_t1awala));
    

?>
    <table border=1 align="center">
        <tr>
            <td><?php echo "Minggu" ?></td>
            <td><?php echo "Tanggal Awal" ?></td>
            <td><?php echo "Tanggal Akhir" ?></td>
        </tr>
        <tr >
            <td><?php echo "Minggu 1";?></td>
            <td><?php echo "$minggu1_t1awal";?></td>
            <td>
                <?php 
                    $akhir = addDayswithdate($minggu1_t1awal,6);
                    echo "$akhir";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 2";?></td>
            <td><?php echo "$minggu2_t1awal";?></td>
            <td>
                <?php 
                    $akhir2 = addDayswithdate($minggu2_t1awal,6);
                    echo "$akhir2";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 3";?></td>
            <td><?php echo "$minggu3_t1awal";?></td>
            <td>
                <?php 
                    $akhir3 = addDayswithdate($minggu3_t1awal,6);
                    echo "$akhir3";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 4";?></td>
            <td><?php echo "$minggu4_t1awal";?></td>
            <td>
                <?php 
                    $akhir4 = addDayswithdate($minggu4_t1awal,6);
                    echo "$akhir4";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 5";?></td>
            <td><?php echo "$minggu5_t1awal";?></td>
            <td>
                <?php 
                    $akhir5 = addDayswithdate($minggu5_t1awal,6);
                    echo "$akhir5";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 6";?></td>
            <td><?php echo "$minggu6_t1awal";?></td>
            <td>
                <?php 
                    $akhir6 = addDayswithdate($minggu6_t1awal,6);
                    echo "$akhir6";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 7";?></td>
            <td><?php echo "$minggu7_t1awal";?></td>
            <td>
                <?php 
                    $akhir7 = addDayswithdate($minggu7_t1awal,6);
                    echo "$akhir7";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 8";?></td>
            <td><?php echo "$minggu8_t1awal";?></td>
            <td>
                <?php 
                    $akhir8 = addDayswithdate($minggu8_t1awal,6);
                    echo "$akhir8";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 9";?></td>
            <td><?php echo "$minggu9_t1awal";?></td>
            <td>
                <?php 
                    $akhir9 = addDayswithdate($minggu9_t1awal,6);
                    echo "$akhir9";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 10";?></td>
            <td><?php echo "$minggu10_t1awal";?></td>
            <td>
                <?php 
                    $akhir10 = addDayswithdate($minggu10_t1awal,6);
                    echo "$akhir10";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 11";?></td>
            <td><?php echo "$minggu11_t1awal";?></td>
            <td>
                <?php 
                    $akhir11 = addDayswithdate($minggu11_t1awal,6);
                    echo "$akhir11";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 12";?></td>
            <td><?php echo "$minggu12_t1awal";?></td>
            <td>
                <?php 
                    $akhir12 = addDayswithdate($minggu12_t1awal,6);
                    echo "$akhir12";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 13";?></td>
            <td><?php echo "$minggu13_t1awal";?></td>
            <td>
                <?php 
                    $akhir13 = addDayswithdate($minggu13_t1awal,6);
                    echo "$akhir13";
                ?>
            </td>
        </tr>
    </table>
<?php
}

function dua(){
    include_once 'index.php';

    if (isset($_POST['submit'])) {
        // Input form
        
        $tanggal    = $_POST['tanggal'];
        $status   = $_POST['status'];
        $waktu      = $_POST['waktu'];
    }

    $trimester2awal = addDayswithdate($tanggal,91);
    $trimester2akhir = addDayswithdate($tanggal,188);

    $minggu14_t2awal = addDayswithdate($trimester2awal,0);
    $minggu15_t2awal = addDayswithdate($minggu14_t2awal,7);
    $minggu16_t2awal = addDayswithdate($minggu15_t2awal,7);
    $minggu17_t2awal = addDayswithdate($minggu16_t2awal,7);
    $minggu18_t2awal = addDayswithdate($minggu17_t2awal,7);
    $minggu19_t2awal = addDayswithdate($minggu18_t2awal,7);
    $minggu20_t2awal = addDayswithdate($minggu19_t2awal,7);
    $minggu21_t2awal = addDayswithdate($minggu20_t2awal,7);
    $minggu22_t2awal = addDayswithdate($minggu21_t2awal,7);
    $minggu23_t2awal = addDayswithdate($minggu22_t2awal,7);
    $minggu24_t2awal = addDayswithdate($minggu23_t2awal,7);
    $minggu25_t2awal = addDayswithdate($minggu24_t2awal,7);
    $minggu26_t2awal = addDayswithdate($minggu25_t2awal,7);
    $minggu27_t2awal = addDayswithdate($minggu26_t2awal,7);
    
    
?>
<table border=1 align="center">
        <tr>
            <td><?php echo "Minggu" ?></td>
            <td><?php echo "Tanggal Awal" ?></td>
            <td><?php echo "Tanggal Akhir" ?></td>
        </tr>
        <tr >
            <td><?php echo "Minggu 14";?></td>
            <td><?php echo "$minggu14_t2awal";?></td>
            <td>
                <?php 
                    $akhir = addDayswithdate($minggu14_t2awal,6);
                    echo "$akhir";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 15";?></td>
            <td><?php echo "$minggu15_t2awal";?></td>
            <td>
                <?php 
                    $akhir2 = addDayswithdate($minggu15_t2awal,6);
                    echo "$akhir2";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 16";?></td>
            <td><?php echo "$minggu16_t2awal";?></td>
            <td>
                <?php 
                    $akhir3 = addDayswithdate($minggu16_t2awal,6);
                    echo "$akhir3";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 17";?></td>
            <td><?php echo "$minggu17_t2awal";?></td>
            <td>
                <?php 
                    $akhir4 = addDayswithdate($minggu17_t2awal,6);
                    echo "$akhir4";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 18";?></td>
            <td><?php echo "$minggu14_t2awal";?></td>
            <td>
                <?php 
                    $akhir5 = addDayswithdate($minggu14_t2awal,6);
                    echo "$akhir5";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 19";?></td>
            <td><?php echo "$minggu19_t2awal";?></td>
            <td>
                <?php 
                    $akhir6 = addDayswithdate($minggu19_t2awal,6);
                    echo "$akhir6";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 20";?></td>
            <td><?php echo "$minggu20_t2awal";?></td>
            <td>
                <?php 
                    $akhir7 = addDayswithdate($minggu20_t2awal,6);
                    echo "$akhir7";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 21";?></td>
            <td><?php echo "$minggu21_t2awal";?></td>
            <td>
                <?php 
                    $akhir8 = addDayswithdate($minggu21_t2awal,6);
                    echo "$akhir8";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 22";?></td>
            <td><?php echo "$minggu22_t2awal";?></td>
            <td>
                <?php 
                    $akhir9 = addDayswithdate($minggu22_t2awal,6);
                    echo "$akhir9";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 23";?></td>
            <td><?php echo "$minggu23_t2awal";?></td>
            <td>
                <?php 
                    $akhir10 = addDayswithdate($minggu23_t2awal,6);
                    echo "$akhir10";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 24";?></td>
            <td><?php echo "$minggu24_t2awal";?></td>
            <td>
                <?php 
                    $akhir11 = addDayswithdate($minggu24_t2awal,6);
                    echo "$akhir11";
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo "Minggu 25";?></td>
            <td><?php echo "$minggu25_t2awal";?></td>
            <td>
                <?php 
                    $akhir12 = addDayswithdate($minggu25_t2awal,6);
                    echo "$akhir12";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 26";?></td>
            <td><?php echo "$minggu26_t2awal";?></td>
            <td>
                <?php 
                    $akhir13 = addDayswithdate($minggu26_t2awal,6);
                    echo "$akhir13";
                ?>
            </td>
        </tr>
        <tr >
            <td><?php echo "Minggu 27";?></td>
            <td><?php echo "$minggu27_t2awal";?></td>
            <td>
                <?php 
                    $akhir14 = addDayswithdate($minggu27_t2awal,6);
                    echo "$akhir14";
                ?>
            </td>
        </tr>
    </table>
<?php
}

function tiga(){

    include_once 'index.php';

    if (isset($_POST['submit'])) {
        // Input form
        
        $tanggal    = $_POST['tanggal'];
        $status   = $_POST['status'];
        $waktu      = $_POST['waktu'];
    }

    $trimester3awal = addDayswithdate($tanggal,189);
    $trimester3akhir = addDayswithdate($tanggal,280);

    $minggu28_t3awal = addDayswithdate($trimester3awal,0);
    $minggu29_t3awal = addDayswithdate($minggu28_t3awal,7);
    $minggu30_t3awal = addDayswithdate($minggu29_t3awal,7);
    $minggu31_t3awal = addDayswithdate($minggu30_t3awal,7);
    $minggu32_t3awal = addDayswithdate($minggu31_t3awal,7);
    $minggu33_t3awal = addDayswithdate($minggu32_t3awal,7);
    $minggu34_t3awal = addDayswithdate($minggu33_t3awal,7);
    $minggu35_t3awal = addDayswithdate($minggu34_t3awal,7);
    $minggu36_t3awal = addDayswithdate($minggu35_t3awal,7);
    $minggu37_t3awal = addDayswithdate($minggu36_t3awal,7);
    $minggu38_t3awal = addDayswithdate($minggu37_t3awal,7);
    $minggu39_t3awal = addDayswithdate($minggu38_t3awal,7);
    $minggu40_t3awal = addDayswithdate($minggu39_t3awal,7);
    $minggu41_t3awal = addDayswithdate($minggu40_t3awal,7);

?>
        <table border=1 align="center">
            <tr>
                <td><?php echo "Minggu" ?></td>
                <td><?php echo "Tanggal Awal" ?></td>
                <td><?php echo "Tanggal Akhir" ?></td>
            </tr>
            <tr >
                <td><?php echo "Minggu 28";?></td>
                <td><?php echo "$minggu28_t3awal";?></td>
                <td>
                    <?php 
                        $akhir = addDayswithdate($minggu28_t3awal,6);
                        echo "$akhir";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 29";?></td>
                <td><?php echo "$minggu29_t3awal";?></td>
                <td>
                    <?php 
                        $akhir2 = addDayswithdate($minggu29_t3awal,6);
                        echo "$akhir2";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 30";?></td>
                <td><?php echo "$minggu30_t3awal";?></td>
                <td>
                    <?php 
                        $akhir3 = addDayswithdate($minggu30_t3awal,6);
                        echo "$akhir3";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 31";?></td>
                <td><?php echo "$minggu31_t3awal";?></td>
                <td>
                    <?php 
                        $akhir4 = addDayswithdate($minggu31_t3awal,6);
                        echo "$akhir4";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 32";?></td>
                <td><?php echo "$minggu32_t3awal";?></td>
                <td>
                    <?php 
                        $akhir5 = addDayswithdate($minggu32_t3awal,6);
                        echo "$akhir5";
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "Minggu 33";?></td>
                <td><?php echo "$minggu33_t3awal";?></td>
                <td>
                    <?php 
                        $akhir6 = addDayswithdate($minggu33_t3awal,6);
                        echo "$akhir6";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 34";?></td>
                <td><?php echo "$minggu34_t3awal";?></td>
                <td>
                    <?php 
                        $akhir7 = addDayswithdate($minggu34_t3awal,6);
                        echo "$akhir7";
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "Minggu 35";?></td>
                <td><?php echo "$minggu35_t3awal";?></td>
                <td>
                    <?php 
                        $akhir8 = addDayswithdate($minggu35_t3awal,6);
                        echo "$akhir8";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 36";?></td>
                <td><?php echo "$minggu36_t3awal";?></td>
                <td>
                    <?php 
                        $akhir9 = addDayswithdate($minggu36_t3awal,6);
                        echo "$akhir9";
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "Minggu 37";?></td>
                <td><?php echo "$minggu37_t3awal";?></td>
                <td>
                    <?php 
                        $akhir10 = addDayswithdate($minggu37_t3awal,6);
                        echo "$akhir10";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 38";?></td>
                <td><?php echo "$minggu38_t3awal";?></td>
                <td>
                    <?php 
                        $akhir11 = addDayswithdate($minggu38_t3awal,6);
                        echo "$akhir11";
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "Minggu 39";?></td>
                <td><?php echo "$minggu39_t3awal";?></td>
                <td>
                    <?php 
                        $akhir12 = addDayswithdate($minggu39_t3awal,6);
                        echo "$akhir12";
                    ?>
                </td>
            </tr>
            <tr >
                <td><?php echo "Minggu 40";?></td>
                <td><?php echo "$minggu40_t3awal";?></td>
                <td >
                    <?php 
                        $akhir13 = addDayswithdate($minggu40_t3awal,6);
                        echo "$akhir13";
                    ?>
                </td>
            </tr>
            <tr >
                <td>
                    <?php echo "Minggu 41";?>
                </td>
                <td>
                    <?php echo "$minggu41_t3awal";?></td>
                </td>
                <td >
                    <?php 
                        $akhir14 = addDayswithdate($minggu41_t3awal,7);
                        echo "$akhir14";
                    ?>
                </td>
            </tr>
        </table>

<?php
}
?>

