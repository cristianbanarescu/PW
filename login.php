
<html>
<head>
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
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='login.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='login.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Log in</h1>
</div>
</br>
</br>
</br>



<form method="post" action="">
		Username : <input type="text" name="username"><br>
		Password : <input type="password" name="password"><br>
		<input type="submit"  name ="form_login">
	</form>
 
 <?php
if(!empty($_POST["form_login"]))
{

	$link_login= mysqli_connect("localhost","root","","laravellogin");
	if (!$link_login) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$link_login->select_db("laravellogin");

	if(($_POST["username"]!=NULL) && ($_POST["password"]!=NULL) )
	{
			$var_username=$_POST["username"];
			$var_password=$_POST["password"];

			$query_username= "SELECT * FROM  `users` WHERE `username`='$var_username' ";
	  		if(!mysqli_query($link_login,$query_username))
				echo "<script type='text/javascript'>alert('Error finding user');</script>";
			
			$query_pass= "SELECT * FROM `users` WHERE `password`='$var_password'";
			if(!mysqli_query($link_login,$query_pass))
				echo "<script type='text/javascript'>alert('Error finding user');</script>";
			
	}

	$result = mysqli_query($link_login,$query_username);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$result_pass = mysqli_query($link_login,$query_pass);
	$row_pass=mysqli_fetch_array($result_pass, MYSQLI_ASSOC);

	if($row_pass["password"]==$var_password)
		echo "Te-ai conectat cu user-ul : ".$row["username"];
	else 
		echo "parola gresita/user gresit ";
	mysqli_close($link_login);
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
	
