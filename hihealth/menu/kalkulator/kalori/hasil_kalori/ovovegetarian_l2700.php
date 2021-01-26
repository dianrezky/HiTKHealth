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
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "222"?></td>
        </tr>
        <tr>
            <td><?php echo "Soup Tomat"?></td>
            <td><?php echo "300 gram"?></td>
            <td><?php echo "249"?></td>
        </tr>
        <tr>
            <td><?php echo "Osong Buncis Tempe"?></td>
            <td><?php echo "110 gram"?></td>
            <td><?php echo "100"?></td>
        </tr>
        <tr>
            <td><?php echo "Tea Panas"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "150"?></td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sanse;font-style:normal; font-weight:bold">
        
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
            <td><?php echo "Sayur Lodeh"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "136"?></td>
        </tr>
        <tr>
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Pizza Sayur Panggang"?></td>
            <td><?php echo "128 gram"?></td>
            <td><?php echo "360"?></td>
        </tr>
        
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sanse; font-style:normal; font-weight:bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Vegetarian Stew"?></td>
            <td><?php echo "300 gram"?></td>
            <td><?php echo "369"?></td>
        </tr>
        <tr>
            <td><?php echo "Mayonaise"?></td>
            <td><?php echo "3 sdm"?></td>
            <td><?php echo "171"?></td>
        </tr>
        <tr>
            <td><?php echo "Pancake Kentang"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "403.5"?></td>
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