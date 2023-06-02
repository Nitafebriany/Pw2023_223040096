 <?php require('partials/header.php') ?>
 <section class="fav" id="fav">
   <div class="container">

     <div class="row" style="margin-top: 30px;">
       <?php foreach ($wisata  as $wi) { ?>
         <div class="col-md-4 py-3 py-md-0">
           <div class="card">
             <img src=img/<?= $wi['img'] ?> alt="">
             <div class="card-body">
               <h3><?= $wi['Lokasi'] ?></h3>
               <div class="icon">
                 <i class="fa-regular fa-location-dot"></i><?= $wi['lok'] ?>
                </div>
              </div>
           </div>
         </div>
       <?php } ?>
     </div>
     <div class="icon">
       <a href="wisata.php"><i class="fas fa-arrow-right"></i></a>
     </div>

 </section>
 <?php require('partials/footer.php'); ?>