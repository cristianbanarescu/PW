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


//select3
$sql3=mysqli_query($link,'SELECT nume_echipa FROM users');
if(mysqli_num_rows($sql3)){

$select3='<form action="" method="post"> <select name="select3">';
$select3.='<option >'."---".'</option>';
while($rs3=mysqli_fetch_array($sql3)){
      $select3.='<option >'.$rs3['nume_echipa'].'</option>';
  	}
}

$select3.='</select>';

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
Nume echipa:<?php echo $select2; ?></br>
Nume jucator : <input type="text" name="nume_jucator"><br>
Varsta : <input type="text" name="varsta"><br>
Goluri marcate : <input type="text" name="goluri_marcate"><br>
<input type="submit"  name ="form_create">
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
		echo "inserare cu succes";
	mysqli_close($link);
}

?>

<br/>
<form method="post" action="index_PHP.php">
Nume echipa:<input type="text" name="nume_echipa"></br>
<input type="submit"  name ="form_create2">
</form>

<?php
if(!empty($_POST["form_create2"]))
{

	$link= mysqli_connect("localhost","root","","laravellogin");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	$link->select_db("laravellogin");

	$var_numeEchipa = $_POST["nume_echipa"];


	 $query = "INSERT INTO `users` (`id`, `nume_echipa`, `username`, `password`, `createDate`) VALUES (NULL, '$var_numeEchipa',
	  NULL, NULL, CURRENT_TIMESTAMP);";

	if(!mysqli_query($link,$query))
		echo "inserare cu succes";
	 echo mysqli_query($link,$query) ;
	mysqli_close($link);
}

?>

<h2> <font color = "fa1f1f" >AICI SE AFISEAZA CHESTII(READ)</font></h2>
<br/>
<?php echo $select1; 
error_reporting(E_ALL & ~E_NOTICE);
echo "</br>";
echo "</br>";  

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	if($row["nume_echipa"]==$selected_val){
		printf("nume_jucator: %s  --- varsta : %d  --- goluri_marcate: %d ", $row["nume_jucator"],$row["varsta"],$row["goluri_marcate"]);
		printf("</br>");  
			}
          }?>
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
	$var_goluriMarcate = $_POST["goluri_marcate"];

	
	$update = "UPDATE player  SET goluri_marcate='$var_goluriMarcate' WHERE nume_jucator='$var_numeJucator'";
		if (!mysqli_query($link, $update)) {
		    echo "Error updating record: " . mysqli_error($link);
		}
	
}

?>
<br/>

<h2> <font color = "fa1f1f" >AICI SE STERG CHESTII(DELETE)</font></h2>
</br>
Selectati playerul pe care doriti sa il stergeti :
<br/>
<?php
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
}

$select_player.='</select>';


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
