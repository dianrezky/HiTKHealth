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
            <td><?php echo "200 gram"?></td>
            <td><?php echo "222"?></td>
        </tr>
        <tr>
            <td><?php echo "Sayur Lodeh"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "136"?></td>
        </tr>
        <tr>
            <td><?php echo "Tempe"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "118"?></td>
        </tr>
        <tr>
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "123"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Apel"?></td>
            <td><?php echo "300 ml"?></td>
            <td><?php echo "146"?></td>
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
            <td><?php echo "Yogurt"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "88.2"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Dadar Sayur"?></td>
            <td><?php echo "145 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
    </table>
<?php
}

?>