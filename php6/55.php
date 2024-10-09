<?php
$a='var_test_text';
$b=(str_replace('_',' ',$a));
$c=ucwords($b);
$d=(str_replace(' ','',$c));
echo lcfirst($d);