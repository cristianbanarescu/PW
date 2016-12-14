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
 
 

<!--
<p>text1</p>

<div class="blockquoteTitle">
<h4>Blockquote</h4>
</div>

<blockquote>
<p>text2</p>

</blockquote>

<!--<p><a href="#sitename">Read more...</a></p>

<h2>Headline</h2>

<p>text3</p>

<h3>Headline</h3>
<p>text4</p>
-->
</div>

</div>
<div id="rightcolumn">

<div id="imagecolumn">

<!--<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
<img src="images/image.png" width="100" height="75" alt="Image" />
-->
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

</body>
</html>