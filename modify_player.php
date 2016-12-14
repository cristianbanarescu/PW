<!DOCTYPE html>
<html>
<head>
	<title>
		Modify Player
	</title>
</head>
<body>



<h2> <font color="fa1f1f">AICI SE MODIFICA informatiile despre jucatori</font></h2>
</br>
<b> Aici vom modifica parola pentru fiecare user din baza noastra de date </b>
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
		if (!mysqli_query($link, $update)) {
		    echo "Error updating record: " . mysqli_error($link);
		}
	
}

?>
<br/>


</body>
</html>