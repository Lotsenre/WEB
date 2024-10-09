<?php
$a=sqrt(587);
$b=floor($a);
$c=ceil($a);
$arr=array("floor"=>"$b","ceil"=>"$c");
echo $arr["floor"].'<br>';
echo $arr["ceil"]."<br>";