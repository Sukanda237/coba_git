<?php

$umur =17;
$menikah =false;

if($umur > 18){
    if($menikah){
        echo"selamat datang pak!";
    }else{
        echo "selamat datang wahai pemuda!";
    }
}else{
    echo "maaf website ini hanya untuk yang berumur 18+";
}

?>