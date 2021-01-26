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
<table border=1 style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold" >
       
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
            <td><?php echo "Soup Jagung"?></td>
            <td><?php echo "165 gram"?></td>
            <td><?php echo "180"?></td>
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
            <td><?php echo "Tempe Paprika"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Rebus"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "78"?></td>
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
            <td><?php echo "Ketoprak"?></td>
            <td><?php echo "400 gram"?></td>
            <td><?php echo "244.8"?></td>
        </tr>
        <tr>
            <td><?php echo "Toge Goreng"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "243"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Dadar Sayur"?></td>
            <td><?php echo "145 gram"?></td>
            <td><?php echo "180"?></td>
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