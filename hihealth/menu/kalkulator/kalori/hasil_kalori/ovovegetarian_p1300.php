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
<table border=1 style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">
        
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
            <td><?php echo "Telur Rebus"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "97"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "160 gram"?></td>
            <td><?php echo "72"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Alpukat"?></td>
            <td><?php echo "300 gram"?></td>
            <td><?php echo "160"?></td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
        
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">
        
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
            <td><?php echo "Tahu"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Dadar"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Jambu Biji"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "25"?></td>
        </tr>
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Sup Krim Jagung"?></td>
            <td><?php echo "1 porsi"?></td>
            <td><?php echo "50"?></td>
        </tr>
        <tr>
            <td><?php echo "Keju"?></td>
            <td><?php echo "30 gram"?></td>
            <td><?php echo "90"?></td>
        </tr>
        <tr>
            <td><?php echo "Es Teh"?></td>
            <td><?php echo "240 ml"?></td>
            <td><?php echo "89"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "450 gram"?></td>
            <td><?php echo "72"?></td>
        </tr>
    </table>
<?php
}

?>