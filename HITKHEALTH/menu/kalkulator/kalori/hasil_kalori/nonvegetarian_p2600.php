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
                            <td><?php echo "Roti Cokelat"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "293"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Mentega"?></td>
                            <td><?php echo "20 gram"?></td>
                            <td><?php echo "143.36"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Omlet"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "153.7"?></td>
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
                    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style:normal">
                        
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
                            <td><?php echo "200 gram"?></td>
                            <td><?php echo "571"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "Tumis Kangkung"?></td>
                            <td><?php echo "100 gram"?></td>
                            <td><?php echo "98"?></td>
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
                    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style:normal;">
                        
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
                            <td><?php echo "Sayur Lodeh"?></td>
                            <td><?php echo "200 gram"?></td>
                            <td><?php echo "136"?></td>
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
                            <td><?php echo "Teh / Kopi"?></td>
                            <td><?php echo "75 gram"?></td>
                            <td><?php echo "30-58"?></td>
                        </tr>
                    </table>
<?php
}

?>

