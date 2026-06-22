<?php
    // $x=10;
    // echo "BEfore condition <br/>";

    // if($x==20){
    //     goto jump;
    // }
    // $name="Saurabh  <br/>";
    // echo $name;
    

    // jump:
    // echo "After codition <br/>";


    // $i=1;

    // start:
    // echo $i . "<br/>";

    // $i++;


    // if($i<=5){
    //     goto start;
    // }


    for($i=1; $i<10; $i++){
        echo "$i <br/>";

        if($i==5){
            goto outsideloop;
        }
    }

    outsideloop:
    echo "Loop is break";
    ?>