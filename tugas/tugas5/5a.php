<?php 
$Profil= [
[
'pict' => '5.jpg',
'Nama' => 'Nita Febriany',
'NRP' => '223040096',
'Prodi' => 'Teknik Informatika',
'Email' => 'NitaFebriany@gmail.com'
],
[
'pict' => '1.jpg',
'Nama' => 'Melinda Sulaeman',
'NRP' => '223040091',
'Prodi' => 'Teknik Informatika',
'Email' => 'Mell@gmail.com'
 ],
[
'pict' => '2.jpg',
'Nama' => 'Maria Oa Paulina Memen Loly',
'NRP' => '223040099',
'Prodi' => 'Teknik Informatika',
'Email' => 'MariaPaulina@gmail.com'
],
[
'pict' => '3.jpg',
'Nama' => 'Andiana Eka Riyanto',
'NRP' => '223040115',
'Prodi' => 'Teknik Informatika',
'Email' => 'EkaRiyanto@gmail.com'
],
[
'pict' => '4.jpg',
'Nama' => 'Nova Asyifa',
'NRP' => '223040112',
'Prodi' => 'Teknik Informatika',
'Email' => 'Novaaa@gmail.com'
],
[
'pict' => '6.jpg',
'Nama' => 'Syerli Aryanti Nurafifa',
'NRP' => '223040100',
'Prodi' => 'Teknik Informatika',
'Email' => 'Syerliiii@gmail.com'
],
[
'pict' => '9.jpg',
'Nama' => 'Fadhila Nur islami',
'NRP' => '223040082',
'Prodi' => 'Teknik Informatika',
'Email' => 'Dhilaaa@gmail.com'
],
[
'pict' => '10.jpg',
'Nama' => 'Syahbrina Dinova',
'NRP' => '223040074',
'Prodi' => 'Teknik Informatika',
'Email' => 'Binaaa@gmail.com'
],
[
'pict' => '8.jpg',
'Nama' => 'Irsan Moch. Taufik Febrian',
'NRP' => '223040075',
'Prodi' => 'Teknik Informatika',
'Email' => 'Irsannn@gmail.com'
],
[
'pict' => '7.jpg',
'Nama' => 'Naufal Zul Faza',
'NRP' => '223040131',
'Prodi' => 'Teknik Informatika',
'Email' => 'NaufalZul@gmail.com'
]
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
    <h2>PROFIL MAHASISWA </h2>
    <?php foreach ($Profil  as $pr){  ?>
<ul>
    <img src="img/<?=$pr['pict'];?>" alt="Profil" width= 100>  
    <li>Nama  :   <?= $pr['Nama'];?></li>
    <li>NRP     :   <?= $pr['NRP'];?></li>
    <li>Prodi : <?= $pr['Prodi']; ?></li>
    <li>Email : <?= $pr['Email']; ?></li>
    
 </ul>
     <?php } ?>
</body>
</html>
