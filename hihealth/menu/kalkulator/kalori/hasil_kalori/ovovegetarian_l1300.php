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
<table border=1 style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Oatmeal"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "160"?></td>
        </tr>
        <tr>
            <td><?php echo "Omelet"?></td>
            <td><?php echo "70 gram"?></td>
            <td><?php echo "125"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "160 gram"?></td>
            <td><?php echo "72"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Alpukat"?></td>
            <td><?php echo "300 ml"?></td>
            <td><?php echo "160"?></td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; ">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "270"?></td>
        </tr>
        <tr>
            <td><?php echo "Sayur Kelor"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "60"?></td>
        </tr>
        <tr>
            <td><?php echo "Oseng Buncis Tempe "?></td>
            <td><?php echo "110 gram"?></td>
            <td><?php echo "100"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Apel"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "170"?></td>
        </tr>
        
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; ">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Soup Krim Jagung"?></td>
            <td><?php echo "1 porsi"?></td>
            <td><?php echo "50"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "450 gram"?></td>
            <td><?php echo "72"?></td>
        </tr>
        <tr>
            <td><?php echo "Es Tea"?></td>
            <td><?php echo "240 ml"?></td>
            <td><?php echo "89"?></td>
        </tr>
        
    </table>
<?php
}

?>