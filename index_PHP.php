<?php
$link= mysqli_connect("localhost","root","","laravellogin");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//mysqli_select_db("laravellogin");


//mysqli_select_db("jucatori");


//select2
$sql2=mysqli_query($link,'SELECT nume_echipa FROM users');
if(mysqli_num_rows($sql2)){

$select2='<form action="" method="post"> <select name="select2">';
$select2.='<option >'."---".'</option>';
while($rs2=mysqli_fetch_array($sql2)){
      $select2.='<option >'.$rs2['nume_echipa'].'</option>';
  	}
}

$select2.='</select>';




mysqli_close($link);

?>



<html> 	

<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Football Players</title>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" >

</head>
<body>



<div id="maincontainer">
	<div class="login_links">
		<a href="register.php">Register</a>
		<a href="login.php">Login</a>
	</div>
	






<div id="contentwrapper">

<div id="contentcolumn">

<div class=language_buttons>
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='index_PHP.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='index_PHP_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Home</h1>
</div>




<br/>
<br/>
<br/>
<br/>
<br/>



<h2> <font color = "fa1f1f" >AICI SE STERG un jucator de la o echipa selectata sau o echipa intreaga </font></h2>
</br>
Selectati playerul pe care doriti sa il stergeti :
<br/>
<?php
	
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
</br>
Selectati echipa pe care doriti sa o stergeti :
<br/>
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

?>
</br>




<br/>
<br/>
<br/>
<br/>
<br/>

</div>

</div>
<div id="rightcolumn">


<div id="rightcolumnTitle">
Menu

</div>





<div id="menu">

<ul>
<li><?php echo "<a href='index_PHP.php'>Home</a>";?></li>
<li><?php echo "<a href='stats.php'>Stats</a>";?></li>
<li><?php echo "<a href='line-up_team.php'>Team Line-up</a>";?></li>
<li><?php echo "<a href='bets.php'>Bets</a>";?></li>
<li><?php echo "<a href='add_player.php'>Add player</a>";?></li>
<li><?php echo "<a href='add_team.php'>Add team</a>";?></li>
<li><?php echo "<a href='view_player.php'>View player</a>";?></li>
<li><?php echo "<a href='modify_player.php'>Modify player</a>";?></li>
<li><?php echo "<a href='contact.php'>Contact</a>";?></li>
</ul>

</div>
<div style="clear: both;"></div>

</div>

<div id="push"></div>

</div>
</body>
</html>
