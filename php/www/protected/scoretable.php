
<!DOCTYPE html>

<?php

function selectColor($check) {
	if($check == NULL) {
		return "red";
	} else {
		return "green";
	}
};

function calculScore($flags) {
	$score = 0;
	for($i = 1; $i < 6; $i++){
		if ($flags[$i-1] != NULL){
			$score += $i * 10;
		}
	}
	return $score;
};

?>
<p>&nbsp;</p>
<h2>CTF 2018</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table id="maintable" cellpadding="10">
	<tr>
		<th>Team Name</th>
		<th class="table_mid" colspan="5">Challenges</th>
		<th>Score</th>
	</tr>
	
	<?php
	
	//session_start();
	if(isset($_SESSION['access'])) {
		$access_level = $_SESSION['access'];
	} else {
		$access_level = 0;
	}
	if($access_level == 1  || $access_level == 2) {
		include("../sql/database.php");
	} else {
		include("sql/database.php");
	}
	
	$req = $bdd->query('SELECT * from teams WHERE nameteam != "admin"');
	
	while($donnees = $req->fetch()){
		
		$flags = array(
			$donnees['flag1date'],
			$donnees['flag2date'],
			$donnees['flag3date'],
			$donnees['flag4date'],
			$donnees['flag5date']
		);
		
		echo("
		<tr>
			<td class='noborder'> ".htmlspecialchars($donnees['nameteam'])." </td>
			<td class=".$color = selectColor($donnees['flag1date'])."></td>
			<td class=".$color = selectColor($donnees['flag2date'])."></td>
			<td class=".$color = selectColor($donnees['flag3date'])."></td>
			<td class=".$color = selectColor($donnees['flag4date'])."></td>
			<td class=".$color = selectColor($donnees['flag5date'])."></td>
			<td class='noborder'> ".$score = calculScore($flags)." </td>
		</tr>
		");
		
		
	}
	
	$req->closeCursor();
	?>
</table>