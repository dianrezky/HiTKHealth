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
<table border=1 style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">
        
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
            <td><?php echo "Telur Mata Sapi"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr>
            <td><?php echo "Tahu Tempe Orak Arik"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Lemon Tea "?></td>
            <td><?php echo "200 ml"?></td>
            <td><?php echo "90"?></td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "270"?></td>
        </tr>
        <tr>
            <td><?php echo "Sayur Lodeh"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "136"?></td>
        </tr>
        <tr>
            <td><?php echo "Tempe Oreg"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "175"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Apel"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "170"?></td>
        </tr>
    </table>
<?php
}
function malam()
{
?>
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">
        
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Sup Kentang"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "162"?></td>
        </tr>
        <tr>
            <td><?php echo "Oseng Buncis"?></td>
            <td><?php echo "110 gram"?></td>
            <td><?php echo "100"?></td>
        </tr>
        <tr>
            <td><?php echo "Jus Anggur"?></td>
            <td><?php echo "250 ml"?></td>
            <td><?php echo "154"?></td>
        </tr>
        <tr>
            <td><?php echo "Alpukat"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "160"?></td>
        </tr>
    </table>
<?php
}

?>