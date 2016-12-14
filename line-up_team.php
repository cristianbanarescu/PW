<html> 	

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Team</title>

<link rel="stylesheet" type="text/css" href="style.css" />

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
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='line-up_team.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='line-up_team_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Team line-up</h1>
</div>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Connect lists</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  } );
  </script>

  <h5 class="primul11"> &emsp;First team	&emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; Reserves</h5>

  <ul id="sortable1" class="connectedSortable">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
  <li class="ui-state-default">Item 6</li>
  <li class="ui-state-default">Item 7</li>
  <li class="ui-state-default">Item 8</li>
  <li class="ui-state-default">Item 9</li>
  <li class="ui-state-default">Item 10</li>
  <li class="ui-state-default">Item 11</li>
</ul>
 
<!--<h5 class="rezerve">Rezervele echipei</h5>
-->
<ul id="sortable2" class="connectedSortable">
  <li class="ui-state-highlight">Item 1</li>
  <li class="ui-state-highlight">Item 2</li>
  <li class="ui-state-highlight">Item 3</li>
  <li class="ui-state-highlight">Item 4</li>
  <li class="ui-state-highlight">Item 5</li>
  <li class="ui-state-highlight">Item 6</li>
  <li class="ui-state-highlight">Item 7</li>
  <li class="ui-state-highlight">Item 8</li>
  <li class="ui-state-highlight">Item 9</li>
  <li class="ui-state-highlight">Item 10</li>
  <li class="ui-state-highlight">Item 11</li>
  <li class="ui-state-highlight">Item 12</li>

</ul>
 
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
<li><?php echo "<a href='line-up_team.php'>Team line-up</a>";?></li>
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