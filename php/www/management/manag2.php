
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
					<h2>Registered Flags</h2>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<table id="maintable" cellpadding="10">
						<tr>
							<th rowspan="2" style="border-right: 2px dashed black;">Computer</th>
							<th colspan="5" style="border-bottom: 2px dashed black;">Flags</th>
						</tr>
						<tr>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
						</tr>
						<?php
						include("../sql/database.php");
						
						$req = $bdd->query('SELECT namepc, flag1value, flag2value, flag3value, flag4value,
						flag5value FROM teams WHERE namepc != "PCadmin" ORDER BY namepc');
						
						while($donnees = $req->fetch()){
							?>
							<tr>
								<td> <?php echo(htmlspecialchars($donnees['namepc'])); ?> </td>
								<td> <?php echo(htmlspecialchars($donnees['flag1value'])); ?> </td>
								<td> <?php echo(htmlspecialchars($donnees['flag2value'])); ?> </td>
								<td> <?php echo(htmlspecialchars($donnees['flag3value'])); ?> </td>
								<td> <?php echo(htmlspecialchars($donnees['flag4value'])); ?> </td>
								<td> <?php echo(htmlspecialchars($donnees['flag5value'])); ?> </td>
							</tr>
							<?php
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



