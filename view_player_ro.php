<!DOCTYPE html>
<html>
<head>
  <title>
    Vizualizare jucator
  </title>

  <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
</head>

<div id="maincontainer">

<div class="login_links">
    <a href="register.php">Inregistrare</a>
    <a href="login.php">Autentificare</a>
  </div>
  
<div id="contentwrapper">

<div id="contentcolumn">

<div class=language_buttons>
    <button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='view_player.php'"><img id="image" src="img/england.jpg"> </button>
    <button class ="buttons" id="button_ro" onclick="location.href='view_player_ro.php'"><img id="image" src="img/romania.png"> </button>
  </div>

<div id="header">
</br>
<h1>Vizualizare jucator</h1>
</div>
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
 
</div>

</div>
<div id="rightcolumn">

<div id="imagecolumn">

</div>

<div id="rightcolumnTitle">
Meniu
</div>

<div id="menu">

<ul>
<li><?php echo "<a href='index_PHP_ro.php'>Acasa</a>";?></li>
<li><?php echo "<a href='stats_ro.php'>Statistici</a>";?></li>
<li><?php echo "<a href='line-up_team_ro.php'>Echipa de start</a>";?></li>
<li><?php echo "<a href='bets_ro.php'>Pariuri</a>";?></li>
<li><?php echo "<a href='add_player_ro.php'>Adauga jucator</a>";?></li>
<li><?php echo "<a href='add_team_ro.php'>Adauga echipa</a>";?></li>
<li><?php echo "<a href='delete_team_ro.php'>Sterge echipa</a>";?></li>
<li><?php echo "<a href='view_player_ro.php'>Vezi jucator</a>";?></li>
<li><?php echo "<a href='modify_player_ro.php'>Modifica date jucator</a>";?></li>
<li><?php echo "<a href='delete_player_ro.php'>Sterge jucator</a>";?></li>
<li><?php echo "<a href='contact_ro.php'>Contact</a>";?></li>
</ul>
</div>

<div style="clear: both;"></div>

</div>

<div id="push"></div>

</div>

</body>
</html>