<?php 
    //ARRAY
    //Membuat ARRAY
 $hari = Array('Senin', 'Selasa', 'Rabu');
 $bulan = ['Januari', 'februari', 'Maret'];
 $myarray =['Nita', 20, False];
$binatang = ['🦄', '🐬', '🐿️', '🐒', '🐪' ];

    //Mencetak array
    //Mencetak 1 elemen didalam ARRAY menggunakan echo
echo $hari[2];
echo "<hr>";
//Mencetak semua isi ARRAY
//var_dump, print_r
var_dump($hari);
echo "<br>";
print_r($bulan);

echo"<br>";
var_dump($myarray);

echo"<br>";
print_r($binatang);

echo"<hr>";

    //Manipulasi array
    //menambahkan elemen menggunakan index
$hari[3] = 'Kamis';
echo"<br>";
    //menambahkan elemen di akhir array menggunakan []
$hari[] = "jum'at";
$hari[] = 'Sabtu';
$hari[] = 'Minggu';
print_r($hari);
echo"<hr>";
    //Menambah elemen di akhir array mengunakan array_push
array_push($bulan, 'April', 'Mei', 'juni');
print_r($bulan);

echo "<br>";
    //Menambah elemen array di awal array array_unshift
array_unshift($binatang, '🐎');
print_r($binatang);
echo"<hr>";
        //Menghapus eleen dibelakang array dengan array_pop
array_pop($hari);
print_r($hari);
echo"<hr>";
    //Menghapus elemen  didepan array dengan array_shift
array_shift($bulan);
print_r($bulan);



?>