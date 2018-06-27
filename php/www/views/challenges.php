
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
                    <p> Challenges Section !</p>
                </div>
                
                <div id="content_bottom"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>



