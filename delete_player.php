<!DOCTYPE html>
<html>
<head>
  <title>
    Delete player
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
    <button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='delete_player.php'"><img id="image" src="img/england.jpg"> </button>
    <button class ="buttons" id="button_ro" onclick="location.href='delete_player_ro.php'"><img id="image" src="img/romania.png"> </button>
  </div>

<div id="header">
</br>
<h1>Delete player</h1>
</div>
</br>
</br>

<?php
	
	error_reporting(E_ALL & ~E_NOTICE);
	
	$link= mysqli_connect("localhost","root","","laravellogin");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$sql3=mysqli_query($link,'SELECT nume_echipa FROM users');
	
	if(mysqli_num_rows($sql3)){

	$select3='<form action="" method="post"> <select name="select3">';
	$select3.='<option >'."---".'</option>';
	while($rs3=mysqli_fetch_array($sql3)){
	      $select3.='<option >'.$rs3['nume_echipa'].'</option>';
	  	}
	}

	$select3.='</select>';
	$select3.='<input type="submit" name="submit3" value="Get Players" />
	</form>';
	echo $select3; 
	$selected_val3 = $_POST["select3"];
	

	$link= mysqli_connect("localhost","root","","jucatori");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}




	$sql4=mysqli_query($link,"SELECT nume_jucator FROM player WHERE `nume_echipa`='$selected_val3'");
	if(mysqli_num_rows($sql4)){
		$select_player = '<form method="post" action="#">';
		$select_player.='<select name="select_player">';
		$select_player.='<option >'."---".'</option>';
		while($rs4=mysqli_fetch_array($sql4)){
		      $select_player.='<option >'.$rs4['nume_jucator'].'</option>';
		  	}
		
		$select_player.='<input type="submit"  name ="cristi"/>';
		$select_player.='</form>';
		$select_player.='</select>';
	}	

	

	echo $select_player;
		if(!empty($_POST["cristi"]))
		{
			$var= $_POST['select_player'];
			$delete = "DELETE FROM `player` WHERE `nume_jucator`='$var'";

				if (!mysqli_query($link,$delete)) {
			    	  echo "Error deleting record: " . $link->error;
						}
		}

mysqli_close($link);	
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