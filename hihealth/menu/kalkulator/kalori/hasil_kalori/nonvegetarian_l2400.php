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
            <td><?php echo "Roti Bakar"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "313.3"?></td>
        </tr>
        <tr>
            <td><?php echo "Selai Kacang"?></td>
            <td><?php echo "20 gram"?></td>
            <td><?php echo "117.68"?></td>
        </tr>
        <tr>
            <td><?php echo "Mentega"?></td>
            <td><?php echo "20 gram"?></td>
            <td><?php echo "243.36"?></td>
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
            <td><?php echo "Rendang Daging"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "571"?></td>
        </tr>
        <tr>
            <td><?php echo "Sambal Kentang"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "102"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Rebus"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "155.1"?></td>
        </tr>
        <tr>
            <td><?php echo "Jeruk"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "47"?></td>
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
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "111"?></td>
        </tr>
        <tr>
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "123"?></td>
        </tr>
        <tr>
            <td><?php echo "Ati Ayam"?></td>
            <td><?php echo "50 gram"?></td>
            <td><?php echo "98"?></td>
        </tr>
        <tr>
            <td><?php echo "Salak"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "63.6"?></td>
        </tr>
        <tr>
            <td><?php echo "Teh + 1 sdm Madu"?></td>
            <td><?php echo "75 gram"?></td>
            <td><?php echo "92"?></td>
        </tr>
        
    </table>
<?php
}

?>