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
            <td><?php echo "Pecel"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "230"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr>
            <td><?php echo "Buah Jeruk"?></td>
            <td><?php echo "120 gram"?></td>
            <td><?php echo "140"?></td>
        </tr>
        <tr>
            <td><?php echo "Teh Panas"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "150"?></td>
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
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Goreng"?></td>
            <td><?php echo "120 gram"?></td>
            <td><?php echo "70"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Tomat"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "70"?></td>
        </tr>
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-weight:bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Salad Buah"?></td>
            <td><?php echo "300 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Mayonaise"?></td>
            <td><?php echo "3 sdm"?></td>
            <td><?php echo "171"?></td>
        </tr>
        <tr>
            <td><?php echo "Omelet"?></td>
            <td><?php echo "70 gram"?></td>
            <td><?php echo "125"?></td>
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