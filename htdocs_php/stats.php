<html> 	

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Jucatori Fotbal</title>
<link rel="stylesheet" type="text/css" href="style_stats.css" />
<script type="text/javascript" src="stats_script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>
<div id="maincontainer">

<div id="contentwrapper">

<div id="contentcolumn">

<div id="header">
<h1>Stats</h1>
<span>Inceputuri...</span>
</div>

<h1>Your Club</h1>

<p> 
Aici se va pune un <b>buton/drop list</b> in care cautam un jucator dupa nume/echipa
Cand se da click pe acest drop list se vor afisa automat statistici despre jucator ( goluri marcate,cluburi la care a jucat ,etc)
+++<b>Grafic</b> evolutie jucator
</p>

<p><b>Buton</b> pentru  a compara 2 jucatori in functie de evolutii</p>



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
<li><?php echo "<a href='index_site2.php'>Home</a>";?></li>
<li><?php echo "<a href='about_us.php'>About Us</a>";?></li>
<li><?php echo "<a href='stats.php'>Stats</a>";?></li>
<li><?php echo "<a href='transfers.php'>Transfers</a>";?></li>
<li><?php echo "<a href='bets.php'>Bets</a>";?></li>
<li><?php echo "<a href='contact.php'>Contact</a>";?></li>
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

<div class="row">
  <div class="column" onclick="openModal(0)">
    <img src="/img/realmadrid.jpg" style="width:20%" >
  </div>
  <div class="column" onclick="openModal(1)">
    <img src="img/barcelona.jpg" style="width:20%" >
  </div>


  
  <div class="column" onclick="openModal(2)">
    <img src="/img/manutd.jpg" style="width:20%" >
  </div>
  

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close cursor" onclick="closeModal(0)">&times;</span>
    <div class="mySlides">
      <img src="img/ronaldo.jpg" style="width:100%">
      <div class="caption-container">
      <p>ronaldo</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="img/messi.jpg" style="width:100%">
      <div class="caption-container">
      <p>messi</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="img/zlatan.jpg" style="width:100%">
      <div class="caption-container">
      <p>zoltan</p>
    </div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>


    <div class="column">
      <img class="demo cursor" src="img/ronaldo.jpg" style="width:100%" onclick="currentSlide(1, 0)">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/messi.jpg" style="width:100%" onclick="currentSlide(2, 0)">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/zlatan.jpg" style="width:100%" onclick="currentSlide(3, 0)">
    </div>
	
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal(1)">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="img/ronaldo.jpg" style="width:100%">
      <div class="caption-container">
      <p>ronaldo</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="img/messi.jpg" style="width:100%">
      <div class="caption-container">
      <p>messi</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="img/zlatan.jpg" style="width:100%">
     <div class="caption-container">
      <p>zoltan</p>
    </div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>

    <div class="column">
      <img class="demo cursor" src="img/ronaldo.jpg" style="width:100%" onclick="currentSlide(2, 1)">
    </div>
    
    <div class="column">
      <img class="demo cursor" src="img/messi.jpg" style="width:100%" onclick="currentSlide(1, 1)" >
    </div>
    
    <div class="column">
      <img class="demo cursor" src="img/zlatan.jpg" style="width:100%" onclick="currentSlide(3, 1)">
    </div>
	
  </div>
</div>



<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close cursor" onclick="closeModal(2)">&times;</span>
    <div class="mySlides">
      <img src="img/ronaldo.jpg" style="width:100%">
      <div class="caption-container">
      <p>ronaldo</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="img/messi.jpg" style="width:100%">
      <div class="caption-container">
      <p>messi</p>
    </div>
    </div>

    <div class="mySlides">
      <img src="img/zlatan.jpg" style="width:100%">
      <div class="caption-container">
      <p>zoltan</p>
    </div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>


    <div class="column">
      <img class="demo cursor" src="img/ronaldo.jpg" style="width:100%" onclick="currentSlide(1, 2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/messi.jpg" style="width:100%" onclick="currentSlide(2, 2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/zlatan.jpg" style="width:100%" onclick="currentSlide(3, 2)">
    </div>
  
  </div>
</div>
<div id="push"></div>

</div>

<div id="footer">
&copy; Copyright 2008 by <a href="#sitename">Your Club</a> | <a href="http://www.wfiedler-online.de">Design by wfiedler</a><br />
Lorem ipsum dolor sit amet,<br />
consectetuer adipiscing elit.
</div>

</body>
</html>
