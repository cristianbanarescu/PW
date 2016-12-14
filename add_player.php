
<html>
<head>
	<title>
Add Player
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
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='add_player.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='add_player_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Add player</h1>
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
Team name:<?php echo $select2; ?></br>
Player name: <input type="text" name="nume_jucator"><br>
Age: <input type="text" name="varsta"><br>
Goals scored: <input type="text" name="goluri_marcate"><br>
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
		echo "<script type='text/javascript'>alert('Error adding player');</script>";
	else
		echo "<script type='text/javascript'>alert('Player added');</script>";

	mysqli_close($link);
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
	


<html>
<head>
	

<title>
Add Player
</title>


</head>

<body>
<p>
aici se adauga jucatori



</p>
</body>

</html>
