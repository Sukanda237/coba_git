<?php

    // membuat variable pada php
    $nomor = 1001;
    $nama_depan = "Lulu Putri";
    $nama_belakang = "Rahayu";

    $Bulan = array('Januari', 'Februari', 'Maret', 'April');

foreach($Bulan as $B){
    echo "$B <br>";
}

    
    for ($i=1; $i <=10; $i++){
        if ($i%2==0){
            echo $i." = Genap <br>";
    }else{
        echo $i." = Ganjil <br>";

       }
    }

    echo $nomor." , ". $nama_depan;
    echo "<hr>";
    print($nama_belakang);
?>