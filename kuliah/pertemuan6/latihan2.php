<?php 
    //array multidimensi
    //array didalam array
    //Array numeric adalah array yang indeks angka
    //Array associative adalah array yang indeks nya adalah string yang bisa kita buat sendiri
$mahasiswa = [
[
'nama'=>'Nita',
'binatang'=>'🦄', 
'makanan'=>['🍕', '🍟', '🧇']
 ],
['nama'=>'Febriany',
'binatang'=> '🐿️',
'makanan'=>['🥞']
],
[
'nama'=>'Melinda',
'binatang'=> '🐬', 
'makanan'=>['🌭']],
[
'nama'=>'eka',
'binatang'=>'🐒',
'makanan'=>  ['🍚'] ], 
[
'nama'=>'lolyn',
'binatang'=>'🐪',
'makanan'=> ['🍜']]
];


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs){  ?>
    <ul>
        <li>Nama             :  <?= $mhs['nama'];?></li>
        <li>Makanan Favorit  :
        <?php foreach($mhs['makanan']as $i) 
        {
            echo $i; 
        } ?> 
        
    </li>
        <li>Hewan Peliharaan :  <?=  $mhs['binatang']; ?></li>
    </ul>
     
      <?php }

    ?>
    
</body>
</html>