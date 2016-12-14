<!DOCTYPE html>
<html>
<head>
	<title>
		Adaugare Echipa
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
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='add_team.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='add_team_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Adaugare Echipa</h1>
</div>
</br>
</br>

<br/>
<form method="post" action="">
Nume echipa:<input type="text" name="nume_echipa"></br>
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

	//$var_numeEchipa = $_POST["nume_echipa"];

	//echo "$var_numeEchipa </br>";

	if($_POST["nume_echipa"]!=NULL)
	{
			$var_numeEchipa=$_POST["nume_echipa"];
			$query_addTeam= "INSERT INTO `users` (`nume_echipa`, `username`, `password`, `createDate`) VALUES ('$var_numeEchipa',
	  NULL, NULL, CURRENT_TIMESTAMP);";

	  		if(!mysqli_query($link_addTeam,$query_addTeam))
				echo "<script type='text/javascript'>alert('Eroare adaugare echipa');</script>";
			else
				echo "<script type='text/javascript'>alert('Echipa adaugata');</script>";
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
