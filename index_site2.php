<?php
$link= mysqli_connect("localhost","root","","laravellogin");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql1=mysqli_query($link,'SELECT nume_echipa FROM users');
if(mysqli_num_rows($sql1)){
$select1= '<select name="select1">';
while($rs1=mysqli_fetch_array($sql1)){
      $select1.='<option value="team_name">'.$rs1['nume_echipa'].'</option>';
  	}
}
$select1.='</select>';
//echo $select1;


mysqli_close($link);







?>
<html> 	

<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Football Players</title>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" >

</head>
<body>





<div id="maincontainer">

<button onclick="location.href='index_site.html'">EN</button>
	

<button onclick="location.href='pages/ro.html'">RO</button>

<?php echo $select1; ?>

<div id="contentwrapper">

<div id="contentcolumn">

<div id="header">
<h1>Home</h1>
<span>Beginnings...</span>
</div>

<h1>Your Club</h1>

<p>Pe pagina aceasta se vor afisa urmatoarele meciuri + orele de start + un countdown pana la inceputul meciului</p>

<div class="blockquoteTitle">
<h4>Blockquote</h4>
</div>

<blockquote>
<p>text2</p>

</blockquote>

<!--<p><a href="#sitename">Read more...</a></p>
-->
<h2>Headline</h2>

<p>text3</p>

<h3>Headline</h3>
<p>text4</p>

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
<li><a href="index.html">Home</a></li>
<li><a href="pages/about_us.html">About Us</a></li>
<li><a href="pages/stats.html">Stats</a></li>
<li><a href="pages/transfers.html">Transfers</a></li>
<li><a href="pages/bets.html">Bets</a></li>
<li><a href="pages/contact.html">Contact</a></li>
</ul>

</div>

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

<div style="clear: both;"></div>

</div>

<div id="push"></div>

</div>



</body>
</html>
