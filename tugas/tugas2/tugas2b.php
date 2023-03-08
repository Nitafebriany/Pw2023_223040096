<?php 

$baris= 10;

for ($nomor = 1; $nomor <= $baris; $nomor++) {
    for ($kolom = 1; $kolom <= $nomor; $kolom++) {
        echo "$kolom ";
    }
    echo "<br>";
}

?>