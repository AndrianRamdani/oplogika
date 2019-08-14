

<?php
//if
/*
cetak gol
total cetak gol >= 10 'medali emas'
total cetak gol >= 8 'medali perak'
total cetak gol >= 4 'medali perunggu'
total cetak gol < 4 'medali emas ngambang'
*/
$gol = 9;

if ($gol >= 10) {
    echo "medali emas,dengan total cetak gol ". $gol;
}elseif ($gol >= 8) {
    echo "medali perak,dengan total cetak gol ". $gol;
}
elseif ($gol >= 4) {
    echo "medali perunggu,dengan total cetak gol ". $gol;
}
elseif ($gol < 4) {
    echo "medali emas ngambang,dengan total cetak gol ". $gol;
}
?>