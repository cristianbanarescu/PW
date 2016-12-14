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
<h1>Welcome</h1>
</div>

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
<!--<li><?php echo "<a href='line-up_team.php'>Team Line-up</a>";?></li>-->
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
