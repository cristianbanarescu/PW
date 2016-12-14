<!DOCTYPE html>
<html>
<head>
  <title>
    Modify player
  </title>

  <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
</head>

<div id="maincontainer">

<div class="login_links">
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
  </div>
  
<div id="contentwrapper">

<div id="contentcolumn">

<div class=language_buttons>
    <button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='modify_player.php'"><img id="image" src="img/england.jpg"> </button>
    <button class ="buttons" id="button_ro" onclick="location.href='modify_player_ro.php'"><img id="image" src="img/romania.png"> </button>
  </div>

<div id="header">
</br>
<h1>Modify player</h1>
</div>
</br>
</br>

<form method="post" action="">
Player name : <input type="text" name="nume_jucator"><br>
Goals scored : <input type="text" name="goluri_marcate"><br>
<input type="submit" name="form_update" >
</form>

<?php
if(!empty($_POST["form_update"]))
{

	$link= mysqli_connect("localhost","root","","jucatori");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}


	$var_numeJucator = $_POST["nume_jucator"];
	//$var_numeEchipa = $_POST["nume_echipa"];
	//$var_varsta = $_POST["varsta"];
	$var_goluriMarcate = $_POST["goluri_marcate"];

	
	$update = "UPDATE player  SET goluri_marcate='$var_goluriMarcate' WHERE nume_jucator='$var_numeJucator'";
		if (!mysqli_query($link, $update)) 
		    echo "<script type='text/javascript'>alert('Error updating player');</script>";
		else
			echo "<script type='text/javascript'>alert('Player updated');</script>";

		
	
}

?>
</div>

</div>
<div id="rightcolumn">

<div id="imagecolumn">

</div>

<div id="rightcolumnTitle">
Menu
</div>

<div id="menu">

<ul>
<li><?php echo "<a href='index_PHP.php'>Home</a>";?></li>
<li><?php echo "<a href='stats.php'>Stats</a>";?></li>
<!--<li><?php echo "<a href='line-up_team.php'>Team line-up</a>";?></li>-->
<li><?php echo "<a href='bets.php'>Bets</a>";?></li>
<li><?php echo "<a href='add_player.php'>Add player</a>";?></li>
<li><?php echo "<a href='add_team.php'>Add team</a>";?></li>
<li><?php echo "<a href='delete_team.php'>Delete team</a>";?></li>
<li><?php echo "<a href='view_player.php'>View player</a>";?></li>
<li><?php echo "<a href='modify_player.php'>Modify player</a>";?></li>
<li><?php echo "<a href='delete_player.php'>Delete player</a>";?></li>
<li><?php echo "<a href='contact.php'>Contact</a>";?></li>
</ul>

</div>

<div style="clear: both;"></div>

</div>

<div id="push"></div>

</div>

</body>
</html>