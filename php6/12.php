<?php
$a=substr('https://onlinephp.io/',0,7);
if($a=='http://' or $a=='https:/') echo 'Да';
    else echo 'Нет';