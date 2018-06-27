
<!DOCTYPE html>

<html>

	<?php
	include("../protected/access_member.php");
	?>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>CTF 2018</title>
    </head>

    <body>
        <div id="container">
            
            <?php
			if($access_level == 2) {
				include("../protected/header_admin.php");
			} else {
				include("../protected/header_in.php");
			}
			?>   
                        
            <div id="content">

                <div id="content_top"></div>
                
                <div id="content_main">
                    
					<p>&nbsp;</p>
					<h2>Scoreboard 2018</h2>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					
					<table id="maintable" cellpadding="10">
						<tr>
							<th>Rank</th>
							<th>Team Name</th>
							<th>Member 1</th>
							<th>Member 2</th>
							<th>Score</th>
						</tr>
						<?php
						include("../sql/database.php");
						
						$req = $bdd->query('SELECT * FROM teams WHERE nameteam != "admin"
						ORDER BY scoreteam DESC, finalflagdate DESC');
						
						$i = 1;
						while($donnees = $req->fetch()){
						
							echo("
							<tr>
								<td> ".$i." </td>
								<td> ".htmlspecialchars($donnees['nameteam'])." </td>
								<td> ".htmlspecialchars($donnees['member1'])." </td>
								<td> ".htmlspecialchars($donnees['member2'])." </td>
								<td> ".htmlspecialchars($donnees['scoreteam'])." </td>
							</tr>
							");
							
							$i++;
						}
						
						$req->closeCursor();
						?>
					</table>
					
                </div>
                
                <div id="content_bottom"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>



