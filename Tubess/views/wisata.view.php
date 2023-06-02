<?php
require('partials/header.php');
require('partials/navbar.php');
?>
<section class="packages" id="packages">
  <div class="container">
  <div class="main-txt">
      <h1>Destinasi<span> Wisata </span>Yogyakarta</h1>
    </div>
    <div class="row" style="margin-top: 30px;">
      <?php foreach ($wisata  as $wi) { ?>
        <div class="col-md-6 py-4 py-md-5">
          <div class="card">
            <img src=img/<?= $wi['img'] ?> alt="">
            <div class="card-body">
              <h3><?= $wi['Lokasi'] ?></h3>
              <p><?= $wi['Desk'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
</section>
<?php require('partials/footer.php'); ?>