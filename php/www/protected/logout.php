

<?php

session_start();

//Delete all session variables
$_SESSION = array();
session_destroy();

//Delete cookies from auto-login
setcookie('teamname', '');
setcookie('password', '');

header("Location: ../home_out.php ");

?>