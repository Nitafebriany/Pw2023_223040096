<?php 
$NRP = 96;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1b</title>
</head>
<body>
    <?php echo "Aku adalah angka <b> $NRP </b> ";?><br>
    <?php echo "Jika aku dikali 5, maka aku sekarang menjadi";?> <b><?php echo $NRP *= 5; ?></b><br>
    <?php echo "Jika aku di bagi 2, maka aku sekarang menjadi";?> <b><?php echo $NRP /= 2; ?> </b><br>
    <?php echo "Jika aku ditambah 75, maka aku sekarang menjadi";?> <b><?php echo $NRP += 75; ?></b><br>
    <?php echo "Jika aku dikurang 20, maka aku sekarang menjadi";?> <b><?php echo $NRP -=20; ?></b>
   
    
    
</body>
</html>