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
            <td><?php echo "Salad Sayur"?></td>
            <td><?php echo "285 gram"?></td>
            <td><?php echo "192"?></td>
        </tr>
        <tr>
            <td><?php echo "Mayonaise"?></td>
            <td><?php echo "3 sdm"?></td>
            <td><?php echo "171"?></td>
        </tr>
        <tr>
            <td><?php echo "Keju Cheddar"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "201"?></td>
        </tr>
        <tr>
            <td><?php echo "Es Teh "?></td>
            <td><?php echo "200 ml"?></td>
            <td><?php echo "30"?></td>
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
            <td><?php echo "Sayur Daun Kelor"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "60"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Air Putih"?></td>
            <td><?php echo "100 ml"?></td>
            <td><?php echo "0"?></td>
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
            <td><?php echo "Sup Jagung"?></td>
            <td><?php echo "165 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Tempe Goreng"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "108"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Jeruk"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "142"?></td>
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