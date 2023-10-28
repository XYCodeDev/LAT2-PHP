<?php
$a = 5;
$b = 2;

// Aritmatika
echo"HASIL DARI 5 + 2 ADALAH ". $a + $b. '<br>';
echo"HASIL DARI 5 * 2 ADALAH ".$a * $b. '<br>';
echo"HASIL DARI 5 / 2 ADALAH ".$a / $b. '<br>';
echo"HASIL DARI 5 - 2 ADALAH ".$a - $b. '<br>'; 

echo"<br>";

// Pebanding
$a = 5;
$b = 2;

echo (boolval($a > $b) ? "TRUE":"FALSE") . "<br>";
echo (boolval($a < $b) ? "TRUE":"FALSE"). "<br>";
echo (boolval($a == $b) ? "TRUE":"FALSE"). "<br>";
echo (boolval($a >= $b) ? "TRUE":"FALSE"). "<br>";
echo (boolval($a <= $b) ? "TRUE":"FALSE"). "<br>";

echo"<br>";

// Loop For
 for ($i = 0; $i <= 10; $i++) {
    echo "No ke : $i <br>"; 
 }

 echo"<br>";

//  Loop Bintang

$a = 5;

for($b = $a; $b > 0; $b-- ) {
    for ($c = $a; $c >= $b;  $c-- ) {
        echo"*";
    }
    echo"<br>";
}

echo"<br>";
// IF ELSE

$Nilai = 80;

if ($Nilai > 70) {
    echo "ANDA LULUS";
} else {
    echo "Anda Tidak Lulus";
}
echo "<br>";
// Diskon
$baju = 80000;
$celana = 185000;
$tas = 113000;
$sepatu = 225.000;

$jmlh_baju = 2;
$jmlh_celana = 1;
$jmlh_tas =  3;
$jmlh_sepatu = 2;

$total_belanja = ($baju * $jmlh_baju) + ($celana * $jmlh_celana) + ($tas * $jmlh_tas) + ($sepatu * $jmlh_sepatu);

$diskon = 0.03;
if ($jmlh_baju > 1) {
    $total_belanja -= $celana * $jmlh_celana * $diskon;
}
if ($jmlh_baju > 1) {
    $total_belanja -= $tas * $jmlh_tas * $diskon;
}
if ($jmlh_baju > 1) {
    $total_belanja -= $sepatu * $jmlh_sepatu * $diskon;
}
if ($jmlh_baju > 1) {
    $total_belanja -= $baju * $jmlh_baju * $diskon;
}


// Diskon 5%
$diskon5 = 0.5;
if ($total_belanja > 100000) {
    $kelipatan = floor($total_belanja / 100000);
    $total_belanja -= $kelipatan * 100000 * $diskon5;
}

echo"Total Belanja Adalah : ". $total_belanja; 


?>