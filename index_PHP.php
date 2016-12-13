<?php
$link= mysqli_connect("localhost","root","","laravellogin");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//mysqli_select_db("laravellogin");

$link_players= mysqli_connect("localhost","root","","jucatori");
if (!$link_players) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//mysqli_select_db("jucatori");


$sql1=mysqli_query($link,'SELECT nume_echipa FROM users');
if(mysqli_num_rows($sql1)){

$select1='<form action="" method="post"> <select name="select1">';
$select1.='<option >'."---".'</option>';
while($rs1=mysqli_fetch_array($sql1)){
      $select1.='<option >'.$rs1['nume_echipa'].'</option>';
  	}
}



$select1.='</select>';
$select1.='<input type="submit" name="submit" value="Get Players" />
</form>';

if(isset($_POST['submit'])){
$selected_val = $_POST['select1'];  //get the value from the submit :)
}


$query = "SELECT * FROM jucatori.`player` INNER JOIN laravellogin.users   
                    ON jucatori.`player`.nume_echipa= laravellogin.users.nume_echipa";
$result = mysqli_query($link_players,$query);




mysqli_close($link);
mysqli_close($link_players);

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
<!--<span>Beginnings...</span>
--></div>




<!--
<div class="blockquoteTitle">
<h4>Blockquote</h4>
</div>

<blockquote>
<p>text2</p>

</blockquote>

<!--<p><a href="#sitename">Read more...</a></p>
-
<h2>Headline</h2>

<p>text3</p>

<h3>Headline</h3>
<p>text4</p>
-->
<h2> <font color="fa1f1f">AICI SE CREEAZA CHESTII(CREATE) </font></h2>
<br/>
<form method="post" action="index_PHP.php">
Nume_echipa:<input type="text" name = "nume_echipa"></br>
Username : <input type="text" name="username"><br>
Password : <input type="text" name="password"><br>
<input type="submit"  name ="form_create">
</form>
<br/>
<br/>

<?php
if(!empty($_POST["form_create"]))
{

	$link= mysqli_connect("localhost","root","","laravellogin");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$link->select_db("laravellogin");



	$var_nume_echipa= $_POST["nume_echipa"];
	$var_username = $_POST["username"];
	$var_password = $_POST["password"];

	 $query = "INSERT INTO `users` (`id`, `nume_echipa`, `username`, `password`, `createDate`) VALUES (NULL, '$var_nume_echipa',
	  '$var_username', '$var_password', CURRENT_TIMESTAMP);";

	mysqli_query($link,$query);
	echo "inserare cu succes";
	mysqli_close($link);
}

?>



<h2> <font color = "fa1f1f" >AICI SE AFISEAZA CHESTII(READ)</font></h2>
<br/>
<?php echo $select1; 
echo "You have selected :" .$selected_val;
echo "</br>";
echo "</br>";  
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			if($row["nume_echipa"]==$selected_val){

           printf("nume_jucator: %s  --- varsta : %d  --- goluri_marcate: %d ", $row["nume_jucator"],$row["varsta"],$row["goluri_marcate"]);	
			printf("</br>");  
			}
           
          // printf("nume echipa %s ",$row["nume_echipa"]);
          }// Displaying Selected Value?>
<br/>
<br/>
<br/>
<br/>
<br/>


<h2> <font color="fa1f1f">AICI SE MODIFICA CHESTII(UPDATE)</font></h2>
</br>
<b> Aici vom modifica parola pentru fiecare user din baza noastra de date </b>
</br>
</br>

<form method="post" action="index_PHP.php">
Username : <input type="text" name="username"><br>
Password : <input type="text" name="password"><br>
<input type="submit" name="form_update" >
</form>





<?php
if(!empty($_POST["form_update"]))
{

	$link= mysqli_connect("localhost","root","","laravellogin");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}


	$var_username = $_POST["username"];
	$var_password = $_POST["password"];

	if($var_password!="")
	{
		$update = "UPDATE users  SET password='$var_password' WHERE username='$var_username'";
			if (mysqli_query($link, $update)) {
			    echo "Record updated successfully";
			} else {
			    echo "Error updating record: " . mysqli_error($link);
			}
	}
	else
	{
		echo "Password field can't be empty<br>";
		echo "Please refresh the page and enter another password";
		echo "<br>";
	}
}

?>
<br/>

<h2> <font color = "fa1f1f" >AICI SE STERG CHESTII(DELETE)</font></h2>
</br>
Selectati userul pe care doriti sa il stergeti :
<br/>
<?php
	
	$link= mysqli_connect("localhost","root","","laravellogin");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}




$sql1=mysqli_query($link,'SELECT username FROM users');
if(mysqli_num_rows($sql1)){
$select2 = '<form method="post" action="index_PHP.php">';
$select2.='<select name="select2">';
while($rs1=mysqli_fetch_array($sql1)){
      $select2.='<option >'.$rs1['username'].'</option>';
  	}
}

$select2.='</select>';
$select2.='<input type="submit"  name ="cristi"/>';
$select2.='</form>';


	if(!empty($_POST["cristi"]))
	{
		$var= $_POST['select2'];
		$delete = "DELETE FROM `users` WHERE `username`='$var'";

			if (!mysqli_query($link,$delete)) {
		    	  echo "Error deleting record: " . $link->error;
					}
	}

mysqli_close($link);	

echo $select2;
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
<li><?php echo "<a href='contact.php'>Contact</a>";?></li>
</ul>

</div>
<!--
<p>
<strong>Last match:</strong><br />
Your Team - Team 2:0
</p>

<p>
<strong>Next match:</strong><br />
Team - Your Team
</p>

<ul id="table">
<li class="head1">League</li>
<li class="pos head2">Pos</li>
<li class="team head2">Team</li>
<li class="pts head2">Pts</li>
<li class="pos">1.</li>
<li class="team">Team 1</li>
<li class="pts">9</li>
<li class="pos own">2.</li>
<li class="team own">Your Team</li>
<li class="pts own">6</li>
<li class="pos">3.</li>
<li class="team">Team 3</li>
<li class="pts">1</li>
<li class="pos">4.</li>
<li class="team">Team 4</li>
<li class="pts">1</li>

</ul>
-->
<div style="clear: both;"></div>

</div>

<div id="push"></div>

</div>
<!--
<div id="footer">
&copy; Copyright 2008 by <a href="#sitename">Your Club</a> | <a href="http://www.wfiedler-online.de">Design by wfiedler</a><br />
Lorem ipsum dolor sit amet,<br />
consectetuer adipiscing elit.
</div>
-->
</body>
</html>
