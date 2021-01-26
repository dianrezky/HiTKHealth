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
            <td><?php echo "Selai Cokelat Kacang"?></td>
            <td><?php echo "28 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Mentega"?></td>
            <td><?php echo "20 gram"?></td>
            <td><?php echo "143.36"?></td>
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
            <td><?php echo "Oseng Buncis Tempe"?></td>
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
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
      
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Sayur Campur Matang"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "162"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Rebus"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "78"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Tempe Orak Arik"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Smoothie"?></td>
            <td><?php echo "100 ml"?></td>
            <td><?php echo "210"?></td>
        </tr>
        
    </table>
<?php
}

?>