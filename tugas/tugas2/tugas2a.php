<?php 
$name = "Nita";
$last_name = "Febriany"; 
for ($angka=1; $angka<=100; $angka++){
    if($angka% 3 == 0 && $angka % 5== 0){
        echo "$name $last_name<br>";
    }elseif($angka % 3==0){
        echo "$name<br>";
    }elseif($angka % 5 ==0){
        echo " $last_name<br>";
    } else{
        echo "$angka <br>";
    } 
}
?>