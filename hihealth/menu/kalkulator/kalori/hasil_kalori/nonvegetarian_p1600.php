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
            <td><?php echo "Sop Ayam Kombinasi"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "95"?></td>
        </tr>
        <tr>
            <td><?php echo "Udang Rebus"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "91"?></td>
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
            <td><?php echo "100 gram"?></td>
            <td><?php echo "175"?></td>
        </tr>
        <tr>
            <td><?php echo "Tumis Buncis"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "52"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "147"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Mata Sapi"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr>
            <td><?php echo "Daging Sapi"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Pisang"?></td>
            <td><?php echo "125 gram"?></td>
            <td><?php echo "120"?></td>
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
            <td><?php echo "Sup Jagung Rebus"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "113"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Rebus"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "97"?></td>
        </tr>
        <tr>
            <td><?php echo "Teh"?></td>
            <td><?php echo "75 gram"?></td>
            <td><?php echo "30"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "160 gram"?></td>
            <td><?php echo "92"?></td>
        </tr>
    </table>
<?php
}

?>