<html> 	

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Echipa</title>

<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
<div id="maincontainer">

<div class="login_links">
    <a href="register.php">Inregistrare</a>
    <a href="login.php">Autentificare</a>
  </div>
  
<div id="contentwrapper">

<div id="contentcolumn">

<div class=language_buttons>
		<button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='line-up_team.php'"><img id="image" src="img/england.jpg"> </button>
		<button class ="buttons" id="button_ro" onclick="location.href='line-up_team_ro.php'"><img id="image" src="img/romania.png"> </button>
	</div>

<div id="header">
</br>
<h1>Line-up echipa</h1>
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

  <h5 class="primul11"> &emsp; Primul 11 al echipei	&emsp; &emsp; &emsp;  Rezervele</h5>

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
Meniu
</div>

<div id="menu">

<ul>
<li><?php echo "<a href='index_PHP_ro.php'>Acasa</a>";?></li>
<li><?php echo "<a href='stats_ro.php'>Statistici</a>";?></li>
<li><?php echo "<a href='line-up_team_ro.php'>Echipa de start</a>";?></li>
<li><?php echo "<a href='bets_ro.php'>Pariuri</a>";?></li>
<li><?php echo "<a href='contact_ro.php'>Contact</a>";?></li>
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