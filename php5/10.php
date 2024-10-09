<?php
$a = array();
$i=1;
while($i<=10){
    $a[$i] = mt_rand(1,10);
    $i++;
}
print_r($a);