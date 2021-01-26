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
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "200 gram"?></td>
            <td><?php echo "222"?></td>
        </tr>
        <tr>
            <td><?php echo "Soup Oyong Telur Puyuh"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "201"?></td>
        </tr>
        <tr>
            <td><?php echo "Perkedel Kentang"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Smoothie"?></td>
            <td><?php echo "100 ml"?></td>
            <td><?php echo "210"?></td>
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
            <td><?php echo "Nasi Merah"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "270"?></td>
        </tr>
        <tr>
            <td><?php echo "Tumis Daun Singkong"?></td>
            <td><?php echo "120 gram"?></td>
            <td><?php echo "151"?></td>
        </tr>
        <tr>
            <td><?php echo "Soup Mutiara Jagung"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "169.5"?></td>
        </tr>
        <tr>
            <td><?php echo "Pizza Sayur Panggang"?></td>
            <td><?php echo "128 gram"?></td>
            <td><?php echo "360"?></td>
        </tr>
        <tr>
            <td><?php echo "Jambu Biji"?></td>
            <td><?php echo "250 gram"?></td>
            <td><?php echo "170"?></td>
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
            <td><?php echo "Vegetarian Stew"?></td>
            <td><?php echo "300 gram"?></td>
            <td><?php echo "369"?></td>
        </tr>
        <tr>
            <td><?php echo "Soup Jagung"?></td>
            <td><?php echo "165 gram"?></td>
            <td><?php echo "180"?></td>
        </tr>
        <tr>
            <td><?php echo "Pancake Kentang"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "403.5"?></td>
        </tr>
        <tr>
            <td><?php echo "Yogurt"?></td>
            <td><?php echo "150 gram"?></td>
            <td><?php echo "2188.20"?></td>
        </tr>
        
    </table>
<?php
}

?>