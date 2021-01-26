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
            <td><?php echo "200 gram"?></td>
            <td><?php echo "350"?></td>
        </tr>
        <tr>
            <td><?php echo "Soup Sapi"?></td>
            <td><?php echo "260 gram"?></td>
            <td><?php echo "227"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "160 gram"?></td>
            <td><?php echo "92"?></td>
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
            <td><?php echo "Nasi Putih"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "350"?></td>
        </tr>
        <tr>
            <td><?php echo "Gulai Tunjang"?></td>
            <td><?php echo "160 gram"?></td>
            <td><?php echo "502"?></td>
        </tr>
        <tr>
            <td><?php echo "Sambal Goreng Ati Sapi"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Kentang Goreng"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "311.9"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Jambu Biji"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "130"?></td>
        </tr>
        
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans;  font-weight:bold">
        
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
            <td><?php echo "Tahu Goreng"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "111"?></td>
        </tr>
        <tr>
            <td><?php echo "Ayam Goreng Kecap"?></td>
            <td><?php echo "75 gram"?></td>
            <td><?php echo "358.8"?></td>
        </tr>
        <tr>
            <td><?php echo "Teh + 2 sdm Madu"?></td>
            <td><?php echo "75 gram"?></td>
            <td><?php echo "154"?></td>
        </tr>
        
    </table>
<?php
}

?>