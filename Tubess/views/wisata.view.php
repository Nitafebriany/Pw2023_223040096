<?php
require('partials/header.php');
require('partials/navbar.php');
require('functions.php');
?>

<?php $lokasi = query('SELECT * FROM destinasi'); ?>
<section class="packages" id="packages">
  <div class="main-txt">
    <h1>Destinasi <span>Wisata</span>Yogyakarta</h1>
    </div>
    <section class="row" style="padding: 20px;" id="packages">
      <?php foreach ($lokasi as $lok) { ?>
      <div class="col-md-4 py-3 py-my-7">
        <div class="card" style="width: 25rem; height:100%;">
          <img src=img/<?= $lok['gambar']; ?> alt="Gambar">
          <div class="card-title" style="margin:1px;">
            <h3 class=card-title><?= $lok['nama_destinasi']; ?></h3>
          </div>
          <div class="card-text" style="margin:10px;">
            <p><?= $lok['desk']; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </section>

  <?php require('partials/footer.php'); ?>