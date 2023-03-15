<?php 
$binatang = ['🦄', '🐬', '🐿️', '🐒', '🐪' ];
$makanan = ['🍕', '🌭', '🥞', '🍜', '🍚'];
$mahasiswa =['Nita', 'Febriany', 'Melinda', 'eka', 'lolyn'];
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
    <?php foreach($mahasiswa as $i => $m){  ?>
    <ul>
        <li>Nama :<?= $mahasiswa[$i];?></li>
        <li>Makanan: <?= $makanan[$i]; ?></li>
        <li>Hewan :<?=  $binatang[$i]; ?></li>
    </ul>
     
    <?php }  
    //array multidimensi 
    ?>
    
</body>
</html>