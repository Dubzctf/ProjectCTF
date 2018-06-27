
<?php
// Data base Connexion
try
{
	// change here your host, depend of your docker configuration
	$bdd = new PDO('mysql:host=172.55.0.5;port=3306;dbname=ctf2018;charset=utf8', 'dev', 'dev');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
