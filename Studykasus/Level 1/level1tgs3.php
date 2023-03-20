<?php

$angka1 = 19;
$angka2 = 1;
$angka3 = 18;
$angka4 = 90;

$max = $angka1;

if($angka2 > $max){
     $max = $angka2;
}
if ($angka3 > $max) {
     $max = $angka3;
}
if ($angka4 > $max) {
     $max = $angka4;
} 

echo "Bilangan terbesar adalah" . $max;
?>