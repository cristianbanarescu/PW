<html>
<head>
	

<title>
Add Player
</title>


</head>

<body>
<p>
aici se adauga jucatori

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
      $select2.='<option >'.$rs2['nume_echipa'].'</option>';
  	}
}
$select2.='</select>';
?>

<h2> <font color="fa1f1f">AICI SE CREEAZA JUCATORI si se adauga la echipa selectata </font></h2>
<br/>
<form method="post"  action="add_player.php">
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
		echo "eroare";

	header("location: index_PHP_ro.php");
	exit;

	mysqli_close($link);
}

?>


</p>
</body>

</html>