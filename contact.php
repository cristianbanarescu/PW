<html> 	

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Contact</title>

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
    <button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='contact.php'"><img id="image" src="img/england.jpg"> </button>
    <button class ="buttons" id="button_ro" onclick="location.href='contact_ro.php'"><img id="image" src="img/romania.png"> </button>
  </div>

<div id="header">
</br>
</br>
<i> <center><font color = "#5151c7 " size = "5">Here you will find us. Good luck !</font></center>
</i>
</div>




<p>

</p>

<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 53%;
        width:99%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 21.3165, lng: -157.8590},
          zoom: 12
        });
         var marker = new google.maps.Marker({
            position:{lat: 21.3164, lng: -157.8590} ,
            map: map,
            title: "Kuan Yin Temple"
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqbL1gcLBNwvPKaZI_P6YsLaoUkpmGlcY&callback=initMap"
    async defer></script>
  </body>
</html>
</br>

<p>
<i>	<font color = "#5151c7 " size = "5">Working hours :</font>
</i>
</br>
Monday - Friday : 12-16 (including <b><font color = "#358e14 ">praying</b></font> breaks)</br> 
Saturday : You wish!</br>
Sunday : Don't think about it!</br>


</p>


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
