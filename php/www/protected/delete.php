
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>CTF 2018</title>
    </head>

    <body>
        <div id="container">
            
            <?php
			include("../protected/header_management.php"); 
			?>
			
			<div id="leftmenu">

                <div id="leftmenu_top"></div>

                    <div id="leftmenu_main">    

                        <h3>Menu</h3>

                        <ul>
                            <li><a href="../management/manag1.php">Display Teams</a></li>
							<li><a href="../management/manag2.php">Display Flags</a></li>
							<li><a href="../management/manag3.php">Create Flags</a></li>
                            <li><a href="../management/manag4.php">Clear Database</a></li>
                        </ul>
                    </div>
                
                <div id="leftmenu_bottom"></div>
            </div>
                        
            <div id="content">

                <div id="content_top_log"></div>
                
                <div id="content_main_log">
					
					<?php
					
					include("../sql/database.php");
					
					$req = $bdd->query('DELETE FROM teams WHERE nameteam != "admin"');
					
					$req->closeCursor();
					?>
					<div id="traitement">
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>Database Cleared !</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<form action="../views/home_in.php">
							<input type="submit" class="button" value="OK" />
						</form>
						<p>&nbsp;</p>
					</div>		
					
                </div>
                
                <div id="content_bottom_log"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>



