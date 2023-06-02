<?php
require('partials/header.php');
require('partials/navbar.php');
?>
<section class="gallary" id="gallary">
  <div class="container">

    <div class="main-txt">
      <h1>GA<span>LLE</span>RY</h1>
    </div>
    <div class="row" style="margin-top: 40px;">
      <?php foreach ($galleri as $gal) { ?>
        <div class="col-md-4 py-6 py-md-5">
          <div class="card">
            <img src="./img/<?= $gal['gambar']; ?>" alt="" height="230px">
          </div>

        </div>
      <?php } ?>
    </div>