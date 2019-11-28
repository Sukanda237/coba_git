<?php
$kondisi = 85;

// Pengkondisian

if ($kondisi >= 80 and $kondisi <= 100){
    $huruf = "A";
    $Predikat = "Sangat Baik";
}else if ($kondisi >= 65 and $kondisi <= 80){
    $huruf = "B";
    $Predikat = "Baik";
}else if ($kondisi >= 55 and $kondisi <= 65){
    $huruf = "C";
    $Predikat = "Cukup";
}else if ($kondisi >= 45 and $kondisi <= 55){
    $huruf = "D";
    $Predikat = "Kurang Cukup";
}else if ($kondisi >= 0 and $kondisi <= 45){
    $huruf = "E";
    $Predikat = "Gagal";
}else{
    $huruf = "Out Of Range";
    $Predikat = "Masukkan Data Yang Benar";
}
// Menampilkan
echo"Nilai kondisi : ".$kondisi."<br/>";
echo"Nilai Huruf : ".$huruf."<br/>";
echo"Predikat Nilai : ".$Predikat."<br/>";

?>