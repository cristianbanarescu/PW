<!DOCTYPE html>
<html>
<head>
	<title>Delete Team</title>
</head>
<body>

<p>Delete a team
</p>

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
</body>
</html>