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
            <td><?php echo "Telur Rebus"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "97"?></td>
        </tr>
        <tr>
            <td><?php echo "Sayur Bayam"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "23"?></td>
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
            <td><?php echo "Nasi Putih"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "175"?></td>
        </tr>
        <tr>
            <td><?php echo "Perkedel Jagung Bakar"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "108"?></td>
        </tr>
        <tr>
            <td><?php echo "Soup Telur Puyuh"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "116"?></td>
        </tr>
        <tr>
            <td><?php echo "Pisang"?></td>
            <td><?php echo "125 gram"?></td>
            <td><?php echo "120"?></td>
        </tr>
        <tr>
            <td><?php echo "Ayam Panggang"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "164.3"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "147"?></td>
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
            <td><?php echo "Kacang Hijau"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "102"?></td>
        </tr>
        <tr>
            <td><?php echo "Jagung Rebus"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "85.6"?></td>
        </tr>
        <tr>
            <td><?php echo "Apel"?></td>
            <td><?php echo "160 gram"?></td>
            <td><?php echo "92"?></td>
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