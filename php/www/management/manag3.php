
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
				include("../protected/header_management.php");
			} else {
				include("../protected/header_in.php");
			}
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

                <div id="content_top"></div>
                
                <div id="content_main">
                    
					<p>&nbsp;</p>
					<h2>Create New Flags</h2>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				
                    <div id="flag">

                        <form action="../protected/create.php" method="post">
							<p>&nbsp;</p>
							<p>Set up Flags ?</p>
							<p>&nbsp;</p>
                            <button class="button button-block"/>CREATE</button>
							<p>&nbsp;</p>
                        </form>

                    </div>
					
                </div>
                
                <div id="content_bottom"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>



