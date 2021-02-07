<?php
setcookie("new_login","",time()-3600,"/");
header("location:Login.php");

?>