<?php
function pilih($pilihan)
{
    if ($pilihan == "pagi") {
        echo pagi();
    }
    if ($pilihan == "siang") {
        echo siang();
    }
    if ($pilihan == "malam") {
        echo malam();
    }
}
function pagi()
{
?>
        <table border=1>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Makanan" ?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Berat" ?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Kalori" ?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Soto Ayam"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "100 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "101"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Nasi Putih"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "100 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "175"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Telur Mata Sapi"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "60 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "110"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Susu"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "250 ml"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "185"?></td>
            </tr>
        </table>
        
<?php
}

function siang()
{
?>
        <table border=1>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Makanan" ?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Berat" ?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Kalori" ?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Nasi Putih"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "150 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "262"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Ikan Tuna"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "120 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "220"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Sop Bayam"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "100 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "156"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Tempe"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "50 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "118"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Melon"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "120 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "46"?></td>
            </tr>
        </table>
<?php
}
function malam()
{
?>
        <table border=1>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Makanan" ?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Berat" ?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Kalori" ?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Nasi Putih"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "100 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "175"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Daging Ayam"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "100 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?Php echo "245.9"?></td>
            </tr>
            <tr>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "Semangka"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "100 gram"?></td>
                <td style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo "30.4"?></td>
            </tr>
            <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
                <td><?php echo "Lemon Tea"?></td>
                <td><?php echo "200 ml"?></td>
                <td><?php echo "90"?></td>
            </tr>
        </table>
<?php
}

?>