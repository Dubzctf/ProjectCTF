
<?php
session_start();
$access_level = $_SESSION['access'];
if(empty($access_level)) {
	header("Location: ../login.php ");
}
if($access_level != 1 && $access_level != 2) {
	header("Location: ../login.php ");
}
?>



