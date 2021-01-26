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
            <td><?php echo "Roti Tawar"?></td>
            <td><?php echo "74 gram"?></td>
            <td><?php echo "200"?></td>
        </tr>
        <tr>
            <td><?php echo "Keju"?></td>
            <td><?php echo "30 gram"?></td>
            <td><?php echo "90"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur"?></td>
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
    <table border=1 style="font-size: 22px; font-family:Noto Sans; font-weight:bold">
    
        <tr>
            <td><?php echo "Makanan" ?></td>
            <td><?php echo "Berat" ?></td>
            <td><?php echo "Kalori" ?></td>
        </tr>
        <tr>
            <td><?php echo "Gado - Gado"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "393"?></td>
        </tr>
        <tr>
            <td><?php echo "Telur Dadar"?></td>
            <td><?php echo "60 gram"?></td>
            <td><?php echo "110"?></td>
        </tr>
        <tr>
            <td><?php echo "Teh Hijau"?></td>
            <td><?php echo "180 ml"?></td>
            <td><?php echo "2"?></td>
        </tr>
        <tr>
            <td><?php echo "Anggur"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "103.5"?></td>
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
            <td><?php echo "Salad Kubis"?></td>
            <td><?php echo "184 gram"?></td>
            <td><?php echo "268"?></td>
        </tr>
        <tr>
            <td><?php echo "Minyak Ikan Salmon"?></td>
            <td><?php echo "1 sdm"?></td>
            <td><?php echo "123"?></td>
        </tr>
        <tr>
            <td><?php echo "Yogurt"?></td>
            <td><?php echo "100 gram"?></td>
            <td><?php echo "58.8"?></td>
        </tr>
        
    </table>
<?php
}

?>