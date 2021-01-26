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
    <table border=1 align="center">
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo "Makanan";?></td>
            <td><?php echo "Berat";?></td>
            <td><?php echo"Kalori";?></b></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Oatmeal";?></td>
            <td><?php echo "250 gram";?></td>
            <td>160</td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo "Keju";?></td>
            <td><?php echo "30 gram";?></td>
            <td><?php echo"90";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo "Buah Apel";?></td>
            <td><?php echo "160 gram";?></td>
            <td><?php echo "92";?></td>
        </tr>
        <tr>
            <td><?php echo "Susu";?></td>
            <td><?php echo"250 ml";?></td>
            <td><?php echo"185";?></td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
    <table border=1>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Makanan";?></td>
            <td><?php echo"Berat";?></td>
            <td><?php echo"Kalori";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Urap";?></td>
            <td><?php echo"100 gram";?></td>
            <td><?php echo"112";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Nasi Merah";?></td>
            <td><?php echo"150 gram";?></td>
            <td><?php echo"166.5";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Telur";?></td>
            <td><?php echo"60 gram";?></td>
            <td><?php echo"110";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Teh Hijau";?></td>
            <td><?php echo"180 ml";?></td>
            <td><?php echo"2";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Buah Alpukat";?></td>
            <td><?php echo"100 gram";?></td>
            <td><?php echo"160.1";?></td>
        </tr>

    </table>
<?php
}
function malam()
{
?>
    <table border=1>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Makanan";?></td>
            <td><?php echo"Berat";?></td>
            <td><?php echo"Kalori";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Soup Krim Jagung";?></td>
            <td><?php echo"1 porsi";?></td>
            <td>50</td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Mayonaise";?></td>
            <td><?php echo"2 sdm";?></td>
            <td><?php echo"114";?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo"Yogurt";?></td>
            <td><?php echo "100 gram";?></td>
            <td><?php echo"58.8";?></td>
        </tr>

    </table>
<?php
}

?>