<!DOCTYPE html>
<html>
<head>
	<title>
		Add Team
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
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='add_team.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='add_team_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Add Team</h1>
</div>
</br>
</br>

<br/>
<form method="post" action="">
Team name:<input type="text" name="nume_echipa"></br>
<input type="submit"  name ="form_create2">
</form>

<?php
if(!empty($_POST["form_create2"]))
{

	$link_addTeam= mysqli_connect("localhost","root","","laravellogin");
	if (!$link_addTeam) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$link_addTeam->select_db("laravellogin");

	if($_POST["nume_echipa"]!=NULL)
	{
			$var_numeEchipa=$_POST["nume_echipa"];
			$query_addTeam= "INSERT INTO `users` (`nume_echipa`, `username`, `password`, `createDate`) VALUES ('$var_numeEchipa',
	  NULL, NULL, CURRENT_TIMESTAMP);";

	  		if(!mysqli_query($link_addTeam,$query_addTeam))
				echo "<script type='text/javascript'>alert('Error adding team');</script>";
			else
				echo "<script type='text/javascript'>alert('Team added');</script>";
	}
	mysqli_close($link_addTeam);
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
