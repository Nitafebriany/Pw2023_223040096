<?php 
$wisata =
[
  [
  'img' => 'tumfull.jpg',
  'Lokasi' => 'Taman Sari',
  'Desk' => 'Taman Sari Yogyakarta adalah situs bekas taman atau kebun istana Keraton NGayogyakarta Hadiningrat, Kebun ini dibangun pada zama sultan Hamengku Buwono I pada tahun 1758-1765/9'],
[
  'img' => 'jamthum.jpg',
  'Lokasi' => 'Malioboro',
  'Desk' => 'Maliboro Adalah Salah satu kawasan dari tiga jalan di kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke persimpangan Titik 0 km Yogyakarta.'
],
[
'img' => 'bg.jpg',
'Lokasi' =>'Tugu Jogja',
'Desk' => ''
],
[
'img' => 'tentang.jpg',
'Lokasi' =>'Candi Prambanan',
'Desk' => ''
],
[
'img' => 'borobudur.jpg',
'Lokasi' =>'Candi Borobudur',
'Desk' => ''
],
[
'img' => '',
'Lokasi' =>'Museum Benteng Vredeburg',
'Desk' => ''
],
[
'img' => '',
'Lokasi' =>'Pantai Parangtritis',
'Desk' => ''
],
[
'img' => '',
'Lokasi' =>'',
'Desk' => ''
],

] ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NitaFebriany.| <?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<body>
  <div class="card col-md-3">
    <?php foreach ($wisata  as $wi) { ?>
  <img src="img/<?= $wi['img'] ?>" class="card-img-top img-thumbnail"  alt="Poster" width="200px">
  <div class="card-body">
    <h5 class="card-title"> 
        <?= $wi['Lokasi'];?>
      </h5>
      <p class="card-text">
      <?= $wi['Desk']; ?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <?php } ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>