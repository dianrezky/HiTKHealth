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
            <td><?php echo "Salad Buah"?></td>
            <td><?php echo "285 gram"?></td>
            <td><?php echo "192"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Anggur"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "154"?></td>
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
            <td><?php echo "Oseng Buncis Tempe"?></td>
            <td><?php echo "110 gram"?></td>
            <td><?php echo "100"?></td>
        </tr>
        <tr>
            <td><?php echo "Tempe Paprika"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "200"?></td>
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
    <table border=1 style="font-size: 22px; font-family:Noto Sans;">
        
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
            <td><?php echo "Pizza Sayur Panggang"?></td>
            <td><?php echo "128 gram"?></td>
            <td><?php echo "360"?></td>
        </tr>
        <tr>
            <td><?php echo "Buah Pisang"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "105"?></td>
        </tr>
        <tr>
            <td><?php echo "Smoothie"?></td>
            <td><?php echo "50 ml"?></td>
            <td><?php echo "170"?></td>
        </tr>
        
    </table>
<?php
}

?>