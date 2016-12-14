<!DOCTYPE html>
<html>
<head>
	<title>Delete Player</title>
</head>
<body>


</br>
Selectati playerul pe care doriti sa il stergeti :
<br/>
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


		header("location : index_PHP.php");
		exit;

mysqli_close($link);	


?>


</body>
</html>