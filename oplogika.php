<?php

$gol = 9;

if ($gol >= 10) {
    echo "medali emas,dengan total cetak gol : ". $gol;
}
elseif ($gol >= 7) {
    echo "medali perak,dengan total cetak gol : ". $gol;
}
elseif ($gol >= 4) {
    echo "medali perunggu,dengan total cetak gol : ". $gol;
}
elseif ($gol < 4) {
    echo "medali emas ngambang,dengan total cetak gol : ". $gol;
}

switch ($gol) {
    case 20:
        echo " ,mendapatkan bonus 100jt";
        break;
    case 9:
        echo " ,mendapatkan bonus 80jt";
        break;
    case 5:
        echo " ,mendapatkan bonus 50jt";
        break;
    default:
        echo " ,tidak mendapatkan bonus";
        break;
}
?>