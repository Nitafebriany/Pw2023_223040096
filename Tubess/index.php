<?php
require('views/index.view.php');
$title = "Home";
?>

<?php $lokasi = query('SELECT * FROM destinasi'); ?>
 <section class="fav" id="fav">

   <div class="row">
     <?php foreach ($lokasi as $lok) { ?>
     <div class="col-md-3 py-8 py-md-0">
         <div class="card" style="">
           <img src=img/<?= $lok['gambar']; ?> alt="poster">
           <div class="card-body" style="margin:11px; padding:6px; height:8rem;">
             <h3 class= card-title styl="margin-top: 10px;"><?= $lok['nama_destinasi']; ?></h3>
             <div class="card-text" style="font-size:1rem; padding-bottom: 20px;"><i class="fas fa-map-marker-alt"></i><?= $lok['location'];?>
             </div>
           </div>
         </div>
        </div>
        <?php } ?>
     </div>
 </section>

<?php require('partials/footer.php'); ?>
   