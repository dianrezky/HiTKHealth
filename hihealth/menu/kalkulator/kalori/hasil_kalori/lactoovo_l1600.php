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
            <td><?php echo "Roti Tawar"?></td>
            <td><?php echo "74 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr>
            <td><?php echo "Smoothie"?></td>
            <td><?php echo "50 ml"?></td>
            <td><?php echo "170"?></td>
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
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo "Gado - Gado"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "393"?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo "Telur Dadar"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo "Teh Hijau"?></td>
            <td><?php echo "180 ml"?></td>
            <td><?php echo "2"?></td>
        </tr>
        <tr style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
            <td><?php echo "Anggur"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "103.5"?></td>
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
            <td><?php echo "Soup Jagung"?></td>
            <td><?php echo "165 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "450 gram"?></td>
            <td><?php echo "72"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Jeruk"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "142"?></td>
        </tr>
    </table>
<?php
}

?>