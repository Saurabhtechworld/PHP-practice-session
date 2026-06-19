<!-- <?php  
// for($start=0; $start<=10; $start++){
//     echo "The number is: $start <br>";
// } 


// $table = 5;
// for($start=1; $start<=10; $start++){
//     echo $table*$start . "<br>";
// }
 ?> -->




<!-- BREAK AND CONTINUE STATEMENT  -->

<!-- <?php

// $user_need=5;
//  for($i=0;$i<=10; $i++){
//     echo $i;
//     echo "<br>";
//     if($i==$user_need){
//         break;
//     }
//  }




 for($i=0; $i<=10; $i++){
    If($i==3){
        continue;
    }
    echo $i;
    echo "<br>";
 }
?> -->



<!-- NESTED FOR LOOP -->

<?php
 
 for($i=1; $i<=3; $i++){
    for($j=1; $j<=3; $j++){
        echo "$i    $j <br>";
    }
 }
?>



