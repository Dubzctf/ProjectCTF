
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
                    <h1>Project Members</h1>
                    <p>&nbsp;</p>
                    <ul>
                        <li> <strong>ACHCHOUBI Yassir</strong> yachchoubi.ir2018@esaip.org </li>
                        <p>&nbsp;</p>
                        <li> <strong>CASTELOT Virgile</strong> vcastelot.ir2018@esaip.org </li>
                        <p>&nbsp;</p>
                        <li> <strong>DIJOUX Ludovic</strong> ldijoux.ir2018@esaip.org </li>
                        <p>&nbsp;</p>
                        <li> <strong>DUBOIS Remi</strong> rdubois.ir2018@esaip.org </li>
                    </ul>
                </div>
                
                <div id="content_bottom"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
    </body>
</html>


