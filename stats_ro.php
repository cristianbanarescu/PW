<html> 	

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Jucatori Fotbal</title>
<link rel="stylesheet" type="text/css" href="style_stats.css" />
<link rel="stylesheet" type="text/css" href="qtip-wiki.css" />

<link rel="stylesheet" type="text/css" href="jquery.qtip.css" />

<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="wiki_stats.js"></script>

  <script type="text/javascript" src="jquery.qtip.js"></script>





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
    <button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='stats.php'"><img id="image" src="img/england.jpg"> </button>
    <button class ="buttons" id="button_ro" onclick="location.href='stats_ro.php'"><img id="image" src="img/romania.png"> </button>
  </div>

<div id="header">
</br>
<!--<h1>Your Club</h1>-->
</div>

</br>
</br>
</br>





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

<a href="info_rmadrid.html">OWL</a>



<div class="row">
  <div >
    <img  onclick="openModal(0)" src="img/realmadrid.jpg" style="width:10%" >
  </div>
</br>


  <div  >
    <img onclick="openModal(1)" src="img/barcelona.jpg" style="width:10%" >
  </div>

  </br>

  <div  >
    <img onclick="openModal(2)" src="img/manutd.jpg" style="width:10%" >
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



</body>
</html>
