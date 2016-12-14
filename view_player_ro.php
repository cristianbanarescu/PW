<html>
<head>
	

<title>
View Player
</title>


</head>

<body>
<p>
aici se vizualizeaza jucatori

</br>
</br>

</br>

<h2> <font color = "fa1f1f" >AICI SE AFISEAZA jucatorii de la echipa selectata</font></h2>
</br>

<?php 
$link= mysqli_connect("localhost","root","","laravellogin");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$link_players= mysqli_connect("localhost","root","","jucatori");
if (!$link_players) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$sql1=mysqli_query($link,'SELECT nume_echipa FROM users');
if(mysqli_num_rows($sql1)){

$select1='<form action="" method="post"> <select name="select1">';
$select1.='<option >'."---".'</option>';
while($rs1=mysqli_fetch_array($sql1)){
      $select1.='<option >'.$rs1['nume_echipa'].'</option>';
  	}
}

$query = "SELECT * FROM jucatori.`player` INNER JOIN laravellogin.users   
                    ON jucatori.`player`.nume_echipa= laravellogin.users.nume_echipa";
$result = mysqli_query($link_players,$query);


$select1.='</select>';
$select1.='<input type="submit" name="submit" value="Get Players" />
</form>';

if(isset($_POST['submit'])){
$selected_val = $_POST['select1'];  //get the value from the submit :)
}

echo $select1; 
error_reporting(E_ALL & ~E_NOTICE);
echo "</br>";
echo "</br>";  

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	if($row["nume_echipa"]==$selected_val){
		printf("nume_jucator: %s  --- varsta : %d  --- goluri_marcate: %d ", $row["nume_jucator"],$row["varsta"],$row["goluri_marcate"]);
		printf("</br>");  
			}
          }

          mysqli_close($link_players);
          mysqli_close($link);
?>

</p>
          
</body>

</html>