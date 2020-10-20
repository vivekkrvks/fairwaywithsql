<?php

session_start();

unset($_SESSION['login_id']);
unset($_SESSION['designation']);

header('Location:http://fairwaypharmaceuticlas.com/login.php');
exit();

?>