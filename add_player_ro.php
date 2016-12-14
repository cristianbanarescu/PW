
<html>
<head>
	<title>
Adauga jucator
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
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='add_player.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='add_player_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Adauga jucator</h1>
</div>
</br>
</br>


<?php 


$link= mysqli_connect("localhost","root","","laravellogin");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

//select2
$sql2=mysqli_query($link,'SELECT nume_echipa FROM users');
if(mysqli_num_rows($sql2)){

$select2='<form action="" method="post"> <select name="select2">';
$select2.='<option >'."---".'</option>';
while($rs2=mysqli_fetch_array($sql2)){
	if($rs2['nume_echipa'] != NULL)
      $select2.='<option >'.$rs2['nume_echipa'].'</option>';
  	}
}
$select2.='</select>';
?>

<br/>
<form method="post"  >
Nume echipa:<?php echo $select2; ?></br>
Nume jucator : <input type="text" name="nume_jucator"><br>
Varsta : <input type="text" name="varsta"><br>
Goluri marcate : <input type="text" name="goluri_marcate"><br>
<input type="submit"  name ="form_create" onlcik="reset()";>
</form>
<br/>
<br/>

<?php
if(!empty($_POST["form_create"]))
{

	$link= mysqli_connect("localhost","root","","jucatori");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$link->select_db("jucatori");




	$selected_val2 = $_POST["select2"];
	$var_nume_jucator = $_POST["nume_jucator"];
	$var_varsta = $_POST["varsta"];
	$var_goluri_marcate = $_POST["goluri_marcate"];

	 $query = "INSERT INTO `player` (`id`, `nume_echipa`, `nume_jucator`, `varsta`, `goluri_marcate`) VALUES (NULL, '$selected_val2',
	  '$var_nume_jucator', '$var_varsta', '$var_goluri_marcate');";

	if(!mysqli_query($link,$query))
		echo "<script type='text/javascript'>alert('Eroare adaugare jucator');</script>";
	else
		echo "<script type='text/javascript'>alert('Jucator adaugat');</script>";


	mysqli_close($link);
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
