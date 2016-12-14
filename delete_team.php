<!DOCTYPE html>
<html>
<head>
	<title>
		Delete team
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
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='delete_team.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='delete_team_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Delete team</h1>
</div>
</br>
</br>

<?php 

$link10= mysqli_connect("localhost","root","","laravellogin");
if (!$link10) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$link_update= mysqli_connect("localhost","root","","jucatori");
if (!$link_update) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql10=mysqli_query($link10,'SELECT nume_echipa FROM users');
if(mysqli_num_rows($sql10)){
$select_sterg='<form action="" method="post"> <select name="select_sterg">';
$select_sterg.='<option >'."---".'</option>';
while($rs10=mysqli_fetch_array($sql10)){
      $select_sterg.='<option >'.$rs10['nume_echipa'].'</option>';
  	}
}
$select_sterg.='</select>';
$select_sterg.='<input type="submit" name="sterge" value="DELETE TEAM" />
</form>';



echo $select_sterg;
	if(!empty($_POST["sterge"]))
	{
		$var= $_POST['select_sterg'];
		$delete = "DELETE FROM `users` WHERE `nume_echipa`='$var'";

			if (!mysqli_query($link10,$delete)) {
		    	  echo "Error deleting record: " . $link->error;
					}

		$var_update  = "UPDATE player SET nume_echipa='liber_contract' WHERE nume_echipa='$var'";
		if(!mysqli_query($link_update,$var_update))
		{
			echo "eroare update team NULL";
		}


	}
	


mysqli_close($link10);	


echo "<a href='index_PHP.php'>Go Home</a>";
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
<li><?php echo "<a href='line-up_team.php'>Team line-up</a>";?></li>
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