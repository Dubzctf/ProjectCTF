
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>CTF 2018</title>
    </head>

    <body>
        <div id="container">
            
            <?php include("protected/header_out.php"); ?>   
            
            <div id="content">

                <div id="content_top_log"></div>
                
                <div id="content_main_log">
                    <div id="login">

                        <form action="protected/traitement_login.php" method="post">
							<p>&nbsp;</p>
                            <div class="field-wrap">
                                <label>Team Name<span class="req">*</span></label>
                                <input type="text" name="team" required/>
                            </div>
							<p>&nbsp;</p>
                            <div class="field-wrap">
                                <label>Password<span class="req">*</span></label>
                                <input type="password" name="pass" required/>
                            </div>
							<p>&nbsp;</p>
                            <p class="forgot"><a href="#">Forgot Password ?</a></p>
							<p>&nbsp;</p>
                            <button type="submit" class="button"/>Submit</button>
							<p>&nbsp;</p>
                        </form>

                    </div> 
                </div>
                
                <div id="content_bottom_log"></div>

                <div id="footer"><h3></h3></div>
                
              </div>
            
        </div>
		
		<script  src="javasript/index.js"></script>
		
    </body>
</html>




