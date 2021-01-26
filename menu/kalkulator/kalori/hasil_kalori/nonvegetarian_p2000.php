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
                    <td><?php echo "Roti Gandum"?></td>
                    <td><?php echo "100 gram"?></td>
                    <td><?php echo "264.6"?></td>
                </tr>
                <tr>
                    <td><?php echo "Mentega"?></td>
                    <td><?php echo "20 gram"?></td>
                    <td><?php echo "143.36"?></td>
                </tr>
                <tr>
                    <td><?php echo "Telur Mata Sapi"?></td>
                    <td><?php echo "60 gram"?></td>
                    <td><?php echo "110"?></td>
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
                    <td><?php echo "Ayam Bakar"?></td>
                    <td><?php echo "100 gram"?></td>
                    <td><?php echo "129.4"?></td>
                </tr>
                <tr>
                    <td><?php echo "Sambal Goreng Tempe"?></td>
                    <td><?php echo "100 gram"?></td>
                    <td><?php echo "232"?></td>
                </tr>
                <tr>
                    <td><?php echo "Telur Dadar"?></td>
                    <td><?php echo "70 gram"?></td>
                    <td><?php echo "153.7"?></td>
                </tr>
                <tr>
                    <td><?php echo "Buah Pir"?></td>
                    <td><?php echo "100 gram"?></td>
                    <td><?php echo "57.1"?></td>
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
                        <td><?php echo "Ikan Lele Goreng"?></td>
                        <td><?php echo "90 gram"?></td>
                        <td><?php echo "122"?></td>
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