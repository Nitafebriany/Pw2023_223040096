<?php 
    //array multidimensi
    //array didalam array
    //Array numeric adalah array yang indeks angka
    //Array asosiasi adalah array yang indeks nya bisa kita buat sendiri
$mahasiswa = [
['Nita','🦄','🍕' ],
['Febriany', '🐿️','🥞'],
['Melinda', '🐬', '🌭'],
['eka','🐒',  '🍚' ], 
['lolyn','🐪', '🍜'  ]
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
        <li>Nama :<?= $mhs[0];?></li>
        <li>Makanan Favorit: <?= $mhs[2]; ?></li>
        <li>Hewan Peliharaan :<?=  $mhs[1]; ?></li>
    </ul>
     
    <?php }  
    //array multidimensi 
    ?>
    
</body>
</html>