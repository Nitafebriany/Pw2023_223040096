<?php
require('partials/header.php');
require('partials/navbar.php');
?>
<!-- <div class="container"> -->
<section class="culiner" id="culiner">
  <div class="main-txt">
    <h1>Kuliner<span> Khas </span>Yogyakarta</h1>
  </div>
  <div class="row"  style="padding: 30px;">
    <?php foreach ($kuliner as $kul) { ?>
    <div class="col-md-4 py-5 py-md-0">
        <div class="card" style="width: 25rem; margin-bottom:30px;">
          <img src=img/<?= $kul['gambar'] ?> alt="Gambar">
          <div class="card-title">
            <h3 class="card-title"><?= $kul['nama']; ?></h3>
            <div class="card-text" style="height:7rem.5;">
              <p><?= $kul['desk']; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>
<?php require('partials/footer.php'); ?>