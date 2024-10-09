<?php
$str='1234567890';
$arr=str_split($str,2);
$a=implode('-',$arr);
echo $a;