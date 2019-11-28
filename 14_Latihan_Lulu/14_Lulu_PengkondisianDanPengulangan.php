<?php

    $nomor = 01;
    $nama_depan = "Lulu Putri";
    $nama_belakang = "Rahayu";

$t = date ("H");
    if ($t < "10"){
        echo "Have a good morning!";
    }elseif ($t < "20"){
        echo "Have a good day!";
    }else{
        echo "Have a good night!";
    }

echo $nomor." , ". $nama_depan;
echo "<hr>";
print($nama_belakang);
?> 