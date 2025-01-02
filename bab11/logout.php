<?php
setcookie("user", "", time() - 3600, "/");
header("location: frm_login.php");
exit();
?>
