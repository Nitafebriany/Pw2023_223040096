<?php 
$destinasi = [
    [
        'img' => 'temple.jpg',
        'name' => 'Candi Borobudur'
    ],
    [
        'img' => 'tumfull.jpg',
        'name' => 'Taman Sari'
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wisata">
<h2>Destinasi Wisata Yogyakarta</h2>
<h3>Yogyakarta dikenal juga sebagai kota pariwisata, itu karena yogyakarta memiliki banyak tempat wisata yang menarik</h3>
    <?php foreach ($destinasi  as $de){  ?>
    <img src="img/<?=$de['img'];?>" alt="Poster">  
    <li><?=$de['name'];?></li>
    <?php } ?>
    </div>
</body>
</html>
<style>
     :root {
     --primary:#d79922;
        --bg: #2c3531;
     }
    body {
        background-color:#c5cbe3; 
        font-family:'Nanum Myeongjo', serif; 
    }
    .wisata h2 {
        position: relative;
        justify-content: center;
        align-items: center;
        height: 100%;
        font-size: 2rem;
        color: #2c3531;
        margin: 2% 30%;
    }
    .wisata h3 {
        font-size: 1.5rem;
        position: relative;
        justify-content: center;
        color: var(--primary);
    }
    .wisata li {
        font-size: 2rem;
    }
    .wisata img {
       position: inline-box;
    }


</style>