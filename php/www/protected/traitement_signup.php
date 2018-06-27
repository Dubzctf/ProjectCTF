
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
                  
					<?php
					
					include("../sql/database.php");

					//check if all field is full
					if(empty($_POST['user1'])){
						//user1 is missing
						header("Location: ../signup.php ");
						
					} else if(empty($_POST['user2'])) {
						//user2 is missing
						header("Location: ../signup.php ");

					} else if(empty($_POST['team'])) {
						//team is missing
						header("Location: ../signup.php ");
					
					} else if(empty($_POST['email'])) {
						//email is missing
						header("Location: ../signup.php ");
						
					} else if(empty($_POST['namepc'])) {
						//namepc is missing
						header("Location: ../signup.php ");
						
					} else if(empty($_POST['pass1']) OR empty($_POST['pass2'])) {
						//pass1 or pass2 is missing
						header("Location: ../signup.php ");
															
					} else { // all field is full
						
						//check if teamname already used
						$req = $bdd->query('SELECT nameteam,email FROM teams');
					
						while($donnees = $req->fetch()){
							if($donnees['nameteam'] == $_POST['team']){
								$req->closeCursor();
								$used = true;
								?>
								<div id="traitement">
									<p>&nbsp;</p>
									<p>&nbsp;</p>
									<p>Teamname already used !</p>
									<p>&nbsp;</p>
									<p>&nbsp;</p>
									<form action="../signup.php">
										<input type="submit" class="button" value="OK" />
									</form>
									<p>&nbsp;</p>
								</div>
								<?php
								break;
							} else if($donnees['email'] == $_POST['email']){
								$req->closeCursor();
								$used = true;
								?>
								<div id="traitement">
									<p>&nbsp;</p>
									<p>&nbsp;</p>
									<p>Email already used !</p>
									<p>&nbsp;</p>
									<p>&nbsp;</p>
									<form action="../signup.php">
										<input type="submit" class="button" value="OK" />
									</form>
									<p>&nbsp;</p>
								</div>
								<?php
								break;
							} else {
								$used = false;
							}					
						}
						
						//check if pass1 equals to pass2
						if(htmlspecialchars($_POST['pass1']) == htmlspecialchars($_POST['pass2']) && $used == false) {
							
							$member1 = htmlspecialchars($_POST['user1']);
							$member2 = htmlspecialchars($_POST['user2']);
							$nameteam = htmlspecialchars($_POST['team']);
							$email = htmlspecialchars($_POST['email']);
							$namepc = htmlspecialchars($_POST['namepc']);
							$password = htmlspecialchars($_POST['pass1']);
							
							$flag1value = "";
							$flag2value = "";
							$flag3value = "";
							$flag4value = "";
							$flag5value = "";
							
							$flag1date = NULL;
							$flag2date = NULL;
							$flag3date = NULL;
							$flag4date = NULL;
							$flag5date = NULL;
							
							//secure the password to not see in database
							//$password = password_hash($password, PASSWORD_DEFAULT);

							$req = $bdd->prepare('INSERT INTO teams(nameteam, member1, member2, email, password, namepc,
							created, flag1value, flag2value, flag3value, flag4value, flag5value, flag1date, flag2date,
							flag3date, flag4date, flag5date) VALUES(:nameteam, :member1, :member2, :email, :password,
							:namepc, NOW(), :flag1value, :flag2value, :flag3value, :flag4value, :flag5value, :flag1date,
							:flag2date, :flag3date, :flag4date, :flag5date)');

							$req->execute(array(
								'member1' => $member1,
								'member2' => $member2,
								'nameteam' => $nameteam,
								'email' => $email,
								'password' => $password,
								'namepc' => $namepc,
								'flag1value' => $flag1value,
								'flag2value' => $flag2value,
								'flag3value' => $flag3value,
								'flag4value' => $flag4value,
								'flag5value' => $flag5value,
								'flag1date' => $flag1date,
								'flag2date' => $flag2date,
								'flag3date' => $flag3date,
								'flag4date' => $flag4date,
								'flag5date' => $flag5date));
							
							?>
							<div id="traitement">
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<p>Successful Sign Up !</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>
								<form action="../login.php">
									<input type="submit" class="button" value="OK" />
								</form>
								<p>&nbsp;</p>
							</div>
							<?php
						} else {
							if($used = false){
								//pass1 is not equals to pass2
								header("Location: ../signup.php ");
							}
						}
					}
					?>

				</div>
                
                <div id="content_bottom_log"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>