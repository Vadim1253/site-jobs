<?php
setcookie('user',$user['name'].time()-3600,"/");//вычитается время куков
header('Location: index.php')//переадресация
?>