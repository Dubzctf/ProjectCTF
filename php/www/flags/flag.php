
<!DOCTYPE html>

<html>

	<?php include("../protected/access_member.php"); ?>

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
                    <div id="flag">

                        <form action="traitement_flags.php" method="post">
							<p>&nbsp;</p>
                            <div class="field-wrap">
                                <h3><label>Flag<span class="req"></span></label></h3>
								<p>&nbsp;</p>
                                <input type="text" name="flag" required autofocus/>
                            </div>
							<p>&nbsp;</p>
                            <button type="submit" class="button"/>Submit</button>
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



