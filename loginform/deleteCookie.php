<?php
setcookie('user', $user['login'], time() - 3600, "/");
header('Location: /loginform/login.php');
?>
