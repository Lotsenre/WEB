<?php
$str='abcabc';
echo strtr($str,['a'=>'1','b'=>'2','c'=>'3']);
echo '<br>';
echo strtr($str,'abc','123');