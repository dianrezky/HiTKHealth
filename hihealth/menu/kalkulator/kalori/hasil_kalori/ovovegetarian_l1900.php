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
            <td><?php echo "Omelet"?></td>
            <td><?php echo "70 gram"?></td>
            <td><?php echo "125"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Tempe Orak - Arik"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Lemon Tea"?></td>
            <td><?php echo "200 ml"?></td>
            <td><?php echo "90"?></td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans;font-weight:bold">
        
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
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Tempe Oreg"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "175"?></td>
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
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-weight:bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Oseng Buncis"?></td>
            <td><?php echo "110 gram"?></td>
            <td><?php echo "100"?></td>
        </tr>
        <tr>
            <td><?php echo "Salad Kubis / Selada Kol"?></td>
            <td><?php echo "184 gram"?></td>
            <td><?php echo "268"?></td>
        </tr>
        <tr>
            <td><?php echo "Buah Alpukat"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "160"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Anggur"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "154"?></td>
        </tr>
        
    </table>
<?php
}

?>