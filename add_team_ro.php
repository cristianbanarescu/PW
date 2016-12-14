<!DOCTYPE html>
<html>
<head>
	<title>
		Add Team
	</title>
</head>
<body>

<p> ADAUGARE DE ECHIPE
</p>


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
				echo "eroare";	
	}
	
	
		

	$_POST["nume_echipa"]=array();
	header("location: index_PHP.php");
	exit;

	
	mysqli_close($link_addTeam);
}

?>

</body>
</html>