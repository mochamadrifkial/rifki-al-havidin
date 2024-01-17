<?php
//contoh array
$cars = array("ferarri", "lambhorgini aventador", "audi");
$negara = ["Indonesia", "Jepang", "Singapura"];
$kota = array("indramayu", "jepara", "singaparna");

//menampilkan array
// echo " i like" . $cars [0] . " , " .$cars[1] . " and " . $cars[2] . " , ";
// echo "<br>";
// var_dump($negara);
// echo "<br>";
// print_r ($kota);    

//menambahkan array
var_dump($kota);
$kota [] = "bogor";
echo "<br>";
var_dump($kota);
$kota [4] = "jayapura";
echo "<br>";
var_dump($kota);
?>  