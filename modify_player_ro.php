<!DOCTYPE html>
<html>
<head>
  <title>
    Modifica jucator
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
    <button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='modify_player.php'"><img id="image" src="img/england.jpg"> </button>
    <button class ="buttons" id="button_ro" onclick="location.href='modify_player_ro.php'"><img id="image" src="img/romania.png"> </button>
  </div>

<div id="header">
</br>
<h1>Modifica jucator</h1>
</div>
</br>
</br>

<form method="post" action="">
Nume jucator : <input type="text" name="nume_jucator"><br>
Goluri marcate : <input type="text" name="goluri_marcate"><br>
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
		    echo "<script type='text/javascript'>alert('Eroare modificare jucator');</script>";
		else
			echo "<script type='text/javascript'>alert('Jucator modificat');</script>";

		
	
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
<li><?php echo "<a href='line-up_team_ro.php'>Echipa de start</a>";?></li>
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