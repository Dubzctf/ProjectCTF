
<!DOCTYPE html>

<?php
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

<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>CTF 2018</title>
    </head>

    <body>
        <div id="container">
            
            <?php include("../protected/header_flags.php"); ?>   
            
			<div id="leftmenu">

                <div id="leftmenu_top"></div>

                    <div id="leftmenu_main">    

                        <h3>Menu</h3>

                        <ul>
                            <li><a href="../flags/flag.php">Flag</a></li>
                        </ul>
                    </div>
                
                <div id="leftmenu_bottom"></div>
            </div>
            
            <div id="content">

                <div id="content_top"></div>
                
                <div id="content_main">
                    
					<?php
					
					include("../sql/database.php"); 
					
					session_start();
					$nameteam = $_SESSION['nameteam'];
					
					$req = $bdd->prepare('SELECT * FROM teams WHERE nameteam LIKE :nameteam');
					
					$req->execute(array('nameteam' => $nameteam));
					
					while($donnees = $req->fetch()){
					
						$output = 0;
					
						if($donnees['flag1value'] == $_POST['flag'] && $donnees['flag1date'] == NULL){
							
							$req = $bdd->prepare('UPDATE teams SET flag1date = NOW() WHERE nameteam LIKE :nameteam');
							
							$req->execute(array('nameteam' => $nameteam));
							
						} else if($donnees['flag2value'] == $_POST['flag'] && $donnees['flag2date'] == NULL){
							
							$req = $bdd->prepare('UPDATE teams SET flag2date = NOW() WHERE nameteam LIKE :nameteam');
							
							$req->execute(array('nameteam' => $nameteam));
						
						} else if($donnees['flag3value'] == $_POST['flag'] && $donnees['flag3date'] == NULL){
							
							$req = $bdd->prepare('UPDATE teams SET flag3date = NOW() WHERE nameteam LIKE :nameteam');
							
							$req->execute(array('nameteam' => $nameteam));
							
						} else if($donnees['flag4value'] == $_POST['flag'] && $donnees['flag4date'] == NULL){
							
							$req = $bdd->prepare('UPDATE teams SET flag4date = NOW() WHERE nameteam LIKE :nameteam');
							
							$req->execute(array('nameteam' => $nameteam));
						
						} else if($donnees['flag5value'] == $_POST['flag'] && $donnees['flag5date'] == NULL){
							
							$req = $bdd->prepare('UPDATE teams SET flag5date = NOW() WHERE nameteam LIKE :nameteam');
							
							$req->execute(array('nameteam' => $nameteam));
						
						} else if($donnees['flag1value'] == $_POST['flag'] && $donnees['flag1date'] != NULL) {
						
							$output = 1;
						
						} else if($donnees['flag2value'] == $_POST['flag'] && $donnees['flag2date'] != NULL) {
						
							$output = 1;
						
						} else if($donnees['flag3value'] == $_POST['flag'] && $donnees['flag3date'] != NULL) {
						
							$output = 1;
						
						} else if($donnees['flag4value'] == $_POST['flag'] && $donnees['flag4date'] != NULL) {
						
							$output = 1;
						
						} else if($donnees['flag5value'] == $_POST['flag'] && $donnees['flag5date'] != NULL) {
						
							$output = 1;
						
						} else {	
							
							$output = 2;
						
						}
						
						//--------------------------------------------------------
						?>
						<div id="traitement">
							<p>&nbsp;</p>
							<p>&nbsp;</p>
						<?php
						if($output == 0) {
						
							echo('
							<h2>Well Done !</h2>
							<p>&nbsp;</p>
							<p>Flag validated !</p>
							');
						
						} else if($output == 1) {
						
							echo('<h2>Flag Already Validated !</h2>');
						
						} else {
						
							echo('
							<h2>Wrong Flag !</h2>
							<p>&nbsp;</p>
							<p>Try again.</p>
							');
						
						}
						
						$flags = array(
							$donnees['flag1date'],
							$donnees['flag2date'],
							$donnees['flag3date'],
							$donnees['flag4date'],
							$donnees['flag5date']
						);
						
						$score = calculScore($flags);
						
						$req = $bdd->prepare('UPDATE teams SET scoreteam = :scoreteam WHERE nameteam LIKE :nameteam');
						
						$req->execute(array('scoreteam' => $scoreteam), 'nameteam' => $nameteam);
						
						$req = $bdd->prepare('UPDATE teams SET finalflagdate = NOW() WHERE nameteam LIKE :nameteam');
						
						$req->execute(array('nameteam' => $nameteam);
						
						?>
							<p>&nbsp;</p>
							<form action="../views/challenges.php">
								<input type="submit" class="button" value="OK" />
							</form>
							<p>&nbsp;</p>
						</div>
						<?php
					}
					
					?>
					
                </div>
                
                <div id="content_bottom"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>



