<?php require('partials/header.php'); ?>
 <?php require('partials/nav.php'); ?>
<div class="container">
    <h1>halaman Home</h1>
    <?php foreach ($students as $stu) :?>
    <ul>
    <li>Nama : <?= $stu['nama']; ?></li>
    <li>NPM : <?= $stu['npm']; ?></li>
</ul>
    <?php endforeach; ?>
       
</div>
    <?php require('partials/footer.php') ;?>