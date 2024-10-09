<?php
$a=[1,2,3,4,5,6,7,8,9,10];
$sum=0;
foreach($a as $elem){
    $sum+=$elem;
    if($sum==10){
        break;
    }
}
echo $elem;