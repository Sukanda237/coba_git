<?php

// membuat variable pada php
$nomor = 2003;
$nama_depan = "Zulfa";
$nama_belakang ="Taftiana";

$bulan = array('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember');

foreach ($bulan as $matahari) {
    echo "$matahari<hr>";
    
}

echo $nomor;
echo"<hr>";  
echo $nama_depan;
echo"<hr>";
print($nama_belakang);
echo"<hr>";


for ($i=1; $i < 10 ; $i++) { 
    if ($i%2==0) 
{
        echo $i. "= Genap<br>";
     } else {
        echo $i. "= Ganjil <br>";
    }
}
    
?>