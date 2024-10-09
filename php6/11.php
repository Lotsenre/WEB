<?php
$a=substr('https://onlinephp.io/',0,8);
if($a=='https://') echo 'Это ссылка';
else echo 'Это не ссылка';