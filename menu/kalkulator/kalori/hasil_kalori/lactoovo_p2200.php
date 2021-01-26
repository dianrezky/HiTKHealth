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
            <td><?php echo "Salad Buah"?></td>
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
            <td><?php echo "201.5"?></td>
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
    <table border=1 style="font-size: 22px; font-family:Noto Sans;  font-weight:bold">
     
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "277.5"?></td>
        </tr>
        <tr>
            <td><?php echo "Sup Tomat"?></td>
            <td><?php echo "300 gram"?></td>
            <td><?php echo "249"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Isi Sayur"?></td>
            <td><?php echo "120 gram"?></td>
            <td><?php echo "134"?></td>
        </tr>
        <tr>
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "123"?></td>
        </tr>
        <tr>
            <td><?php echo "Alpukat"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "160.1"?></td>
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
            <td><?php echo "Ketoprak"?></td>
            <td><?php echo "400 gram"?></td>
            <td><?php echo "244.8"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Rebus"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "117"?></td>
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