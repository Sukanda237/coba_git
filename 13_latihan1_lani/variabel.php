<?php

// membuat variabel pada php
$nomor = 2003;
$nama_depan = "Lani";
$nama_belakang ="Suryani";

$Bulan = array('Januari','februari','maret','april','mei','juni','juli');
foreach ($Bulan as $B ) {
    echo "$B<br>";
}

echo $nomor;
echo "<hr>";
echo $nama_depan;
echo "<hr>";
print($nama_belakang);
echo"<hr>";

for ($i=0; $i <=10 ; $i++) { 
    if ($i%2==0) 
{
        echo $i. "=genap <br>";
    }else{
        echo $i. "=ganjil <br>";
    }
}
?>