
<html>
<head>
	
</head>

<body>

	<form method="post">
		Username : <input type="text" name="username"><br>
		Password : <input type="text" name="password"><br>
		Repeat Password : <input type="text" name="rep_password"><br>
		<input type="submit"  name ="form_register">
	</form>





<?php

$link= mysqli_connect("localhost","root","","laravellogin");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}




if(!empty($_POST["form_register"]))
{

	/*$link= mysqli_connect("localhost","root","","laravellogin");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}*/

	$link->select_db("laravellogin");



	$var_username = $_POST["username"];
	$var_password = $_POST["password"];
	

	 $query = "INSERT INTO `users` (`id`, `nume_echipa`, `username`, `password`, `createDate`) VALUES (NULL, NULL,
	  '$var_username', '$var_password', CURRENT_TIMESTAMP);";

	//mysqli_query($link,$query);
	//echo "inserare cu succes";
	if(mysqli_query($link,$query))
		echo '<meta http-equiv="refresh" content="0; url=index_PHP.php" >';
	mysqli_close($link);
}

?>	





	
</body>
</html>