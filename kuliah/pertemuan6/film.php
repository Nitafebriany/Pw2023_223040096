
<?php 
$film = [
[
'img' => 'ant.jpg',
'Judul' => 'Ant-man and the Wasp: Quantumania',
'Tahun' => '2023',
'Genre' => ['Action, ' , 'Petualangan, ' , 'komedi, ' ],
'Pemeran Utama' => ['Paul Rudd, ', 'Evangeline lilly, ', 'Michael Douglas '],
'Sutradara'=> ['Peyton Reed'] ],
[
'img' => 'stranger.jpg',
'Judul' => 'Stranger Things Season 4',
'Tahun' => '2022',
'Genre' => ['Drama, ' , 'Fantasi, ' , 'Horror,'],
'Pemeran Utama' => ['Millie Bobby brown, ' , 'finn wolfhard, ' , 'Winona Ryder'] ,
'Sutradara' => ['Matt Duffer ' ,'Dan ' , 'Ross Duffer'] ],
[
'img' =>'ali ratu.jpg',
'Judul' => 'Ali & the Queens',
'Tahun' => '2021',
'Genre' => ['Komedi, ', 'Drama'],
'Pemeran Utama' => [ 'Iqbaal Diakhfari Ramadhan, ', 'Aurora Ribero, ', 'Nirina Zubir '],
'Sutradara' => ['Lucky Suwardi'] ],
[
'img'=> 'start-up.jpg',  
'Judul' => 'Start Up',
'Tahun' => '2020',
'Genre' => ['Romance'],
'Pemeran Utama' => ['Kim seonho, ', 'Nam joo Hyuk, ', 'Bae suzy, ', 'Kang hana'],
'Sutradara' => ['Oh Choong Hwan']  
],
[  
'img'=> 'Mouse.jpeg',
'Judul' => 'Mouse',
'Tahun' => '2021',
'Genre' => ['Action, ', 'Thriller, ', 'Misteri, ' ,'Science Fiction, ', 'Crime '],
'Pemeran Utama' => ['Lee seung gi, ', 'lee hee joon, ', 'Park ju-Hyun, ', 'Kyung soo jin'],
'Sutradara' => ['Choi Joon-Bae'] 
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
    <h2>Daftar Film </h2>
    <?php foreach ($film  as $fi){  ?>
<ul>
    <img src="img/<?=$fi['img'];?>" alt="Poster" width= 100>  
    <li>Judul   :   <?= $fi['Judul'];?></li>
    <li>Tahun  :  <?= $fi['Tahun'];?></li>
    <li>Genre  : 
    <?php foreach ($fi ['Genre'] as $G) { 
        echo $G; 
    } ?> 
    </li>
    <li>Pemeran Utama : 
        <?php foreach ($fi[ 'Pemeran Utama'] as $p)
        {
            echo $p;
         } ?>
     </li>
     <li>Sutradara : 
        <?php foreach($fi['Sutradara'] as $S)
        {
            echo $S;
        } ?>
    </ul>
 <?php } ?>



 </body>
</html>