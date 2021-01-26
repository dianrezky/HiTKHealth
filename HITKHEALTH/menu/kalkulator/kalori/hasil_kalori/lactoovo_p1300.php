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
            <td><?php echo "Roti Gandum"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "247.1"?></td>
        </tr>
        <tr>
            <td><?php echo "Selai Strawberi"?></td>
            <td><?php echo "14 gram"?></td>
            <td><?php echo "90"?></td>
        </tr>
        <tr>
            <td><?php echo "Buah Apel"?></td>
            <td><?php echo "160 gram"?></td>
            <td><?php echo "92"?></td>
        </tr>
        <tr>
            <td><?php echo "Susu"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "185"?></td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
       
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Pepes Tahu"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "126"?></td>
        </tr>
        <tr>
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "166.5"?></td>
        </tr>
        <tr>
            <td><?php echo "Teh Hijau"?></td>
            <td><?php echo "180 ml"?></td>
            <td><?php echo "2"?></td>
        </tr>
        <tr>
            <td><?php echo "Buah Alpukat"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "160.1"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Mata Sapi"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
       
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Salad Buah"?></td>
            <td><?php echo "95 gram"?></td>
            <td><?php echo "64"?></td>
        </tr>
        <tr>
            <td><?php echo "Mayonaise"?></td>
            <td><?php echo "1 sdm"?></td>
            <td><?php echo "57"?></td>
        </tr>
        <tr>
            <td><?php echo "Yogurt"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "58.8"?></td>
        </tr>
        
    </table>
<?php
}

?>