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
            <td><?php echo "Nasi Putih"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "175"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Mata Sapi"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr>
            <td><?php echo "Ikan Kembung"?></td>
            <td><?php echo "80 gram"?></td>
            <td><?php echo "87.65"?></td>
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
    <table border=1 style="font-size: 22px; font-family:Noto Sans;font-style:normal; font-weight:bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Nasi Putih"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "262"?></td>
        </tr>
        <tr>
            <td><?php echo "Sayur Lodeh"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "61"?></td>
        </tr>
        <tr>
            <td><?php echo "Tempe"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "118"?></td>
        </tr>
        <tr>
            <td><?php echo "Ayam Pop"?></td>
            <td><?php echo "120 gram"?></td>
            <td><?php echo "265"?></td>
        </tr>
        <tr>
            <td><?php echo "Semangka"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "30"?></td>
        </tr>
        
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans;font-style:normal; font-weight:bold">
        
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
            <td><?php echo "Telur Dadar"?></td>
            <td><?php echo "75 gram"?></td>
            <td><?php echo "188"?></td>
        </tr>
        <tr>
            <td><?php echo "Alpukat"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "160.1"?></td>
        </tr>
        <tr>
            <td><?php echo "Teh"?></td>
            <td><?php echo "75 gram"?></td>
            <td><?php echo "30"?></td>
        </tr>
        
    </table>
<?php
}

?>