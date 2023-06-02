<?php
require('partials/header.php');
require('partials/navbar.php');
?>
<section class="services" id="services">
  <div class="container">

    <div class="main-txt">
      <h1>Kuliner<span> Khas </span>Yogyakarta</h1>
    </div>
    <?php foreach ($kuliner as $kul) { ?>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-6 py-2 py-md-4">
          <div class="card">
            <img src=img/<?= $kul['gambar'] ?> alt="">
            <div class="card-body">
              <h3><?= $kul['nama']; ?></h3>
              <p><?= $kul['desk']; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>