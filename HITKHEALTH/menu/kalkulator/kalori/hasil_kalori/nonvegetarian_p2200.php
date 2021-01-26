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
                            <td><?php echo "150 gram"?></td>
                            <td><?php echo "262"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Daging Ayam"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "245.9"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Sayur Bening Bayam"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "36"?></td>
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
                            <td><?php echo "200 gram"?></td>
                            <td><?php echo "350"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Ikan Salmon"?></td>
                            <td><?php echo "200 gram"?></td>
                            <td><?php echo "416.4"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Tempe Oreg"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "175"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Telur Rebus"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "155.1"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Buah Alpukat"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "160.1"?></td>
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
                            <td><?php echo "Nasi Putih"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "175"?></td>
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
                            <td><?php echo "Teh / Kopi"?></td>
                            <td><?php echo "75 gram"?></td>
                            <td><?php echo "30-58"?></td>
                        </tr>
                    </table>
<?php
}

?>