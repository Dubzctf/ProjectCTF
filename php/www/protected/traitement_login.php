
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>CTF 2018</title>
    </head>

    <body>
        <div id="container">
            
            <?php include("header_out.php"); ?>   
                        
            <div id="content">

                <div id="content_top_log"></div>
                
                <div id="content_main_log">
					
					<div id="traitement">
					
					<?php

					//check if all field is full
					if(empty($_POST['team'])) {
						//team is missing
						header("Location: ../login.php ");
					
					} else if(empty($_POST['pass'])) {
						//pass is missing
						header("Location: ../login.php ");
						
					} else { // all field is full
						
						include("../sql/database.php");
						
						$nameteam = htmlspecialchars($_POST['team']);
						$password = htmlspecialchars($_POST['pass']);
						
						$req = $bdd->prepare('SELECT idteam,nameteam,password FROM teams WHERE nameteam = :nameteam');
						$req->execute(array(
							'nameteam' => $nameteam));
							
						$resultat = $req->fetch();
																		
						if (!$resultat) {
							header("Location: ../login.php ");
						} else {
							if ($password == $resultat['password']) {
								session_start();
								if($nameteam == "admin"){
									$_SESSION['access'] = 2;
								} else if(empty($nameteam)) {
									$_SESSION['access'] = 0;
								} else {
									$_SESSION['access'] = 1;
								}
								$_SESSION['nameteam'] = $nameteam;
								?>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>Successful Log In !</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<form action="../views/home_in.php" method="post">
									<input type="submit" class="button" value="OK" />
								</form>
								<p>&nbsp;</p>
								<?php
							} else {
								header("Location: ../login.php ");	
							}
						}
						
					}
					?>
					
					</div>

				</div>
                
                <div id="content_bottom_log"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>