<!DOCTYPE html>
<html>
<head>
	<title>
		Stergere echipa
	</title>

	<link rel="stylesheet" type="text/css" href="style.css" media="screen" >
</head>

<div id="maincontainer">

<div class="login_links">
    <a href="register.php">Inregistrare</a>
    <a href="login.php">Autentificare</a>
  </div>
  
<div id="contentwrapper">

<div id="contentcolumn">

<div class=language_buttons>
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='delete_team.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='delete_team_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Stergere echipa</h1>
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
	if($rs10['nume_echipa'] != NULL)
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
		//$delete = "DELETE FROM `users` WHERE `nume_echipa`='$var'";

		$update_liber="UPDATE users SET nume_echipa='Liber de contract' WHERE nume_echipa='$var'";
		
			if (!mysqli_query($link10,$update_liber)) {
		    	  echo "Error deleting record: " . $link->error;
					}

		$var_update  = "UPDATE player SET nume_echipa='Liber de contract' WHERE nume_echipa='$var'";
		//$var_update_users = "INSERT INTO `users` (`nume_echipa`, `username`, `password`, `createDate`) VALUES ('Liber de contract',  	  NULL, NULL, CURRENT_TIMESTAMP);";
		if(!mysqli_query($link_update,$var_update))
			echo "<script type='text/javascript'>alert('Error deleting team');</script>";
		else
			echo "<script type='text/javascript'>alert('Team deleted');</script>";

	}

mysqli_close($link10);	
?>
 
</div>

</div>
<div id="rightcolumn">

<div id="imagecolumn">

</div>

<div id="rightcolumnTitle">
Meniu
</div>

<div id="menu">

<ul>
<li><?php echo "<a href='index_PHP_ro.php'>Acasa</a>";?></li>
<li><?php echo "<a href='stats_ro.php'>Statistici</a>";?></li>
<!--<li><?php echo "<a href='line-up_team_ro.php'>Echipa de start</a>";?></li>-->
<li><?php echo "<a href='bets_ro.php'>Pariuri</a>";?></li>
<li><?php echo "<a href='add_player_ro.php'>Adauga jucator</a>";?></li>
<li><?php echo "<a href='add_team_ro.php'>Adauga echipa</a>";?></li>
<li><?php echo "<a href='delete_team_ro.php'>Sterge echipa</a>";?></li>
<li><?php echo "<a href='view_player_ro.php'>Vezi jucator</a>";?></li>
<li><?php echo "<a href='modify_player_ro.php'>Modifica date jucator</a>";?></li>
<li><?php echo "<a href='delete_player_ro.php'>Sterge jucator</a>";?></li>
<li><?php echo "<a href='contact_ro.php'>Contact</a>";?></li>
</ul>

</div>

<div style="clear: both;"></div>

</div>

<div id="push"></div>

</div>

</body>
</html>
