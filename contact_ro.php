<html>  

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Contact</title>

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
    <button class ="buttons" id="button_en" style="margin-left: 37px;" onclick="location.href='contact.php'"><img id="image" src="img/england.jpg"> </button>
    <button class ="buttons" id="button_ro" onclick="location.href='contact_ro.php'"><img id="image" src="img/romania.png"> </button>
  </div>

<div id="header">
</br>
</br>
<i> <center><font color = "#5151c7 " size = "5">Aici ne veti gasi. Bafta !</font></center>
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
<i> <font color = "#5151c7 " size = "5">Orar de functionare :</font>
</i>
</br>
Luni - Vineri : 12-16 (cu tot cu pauzele de <b><font color = "#358e14 ">rugaciune</b></font>)</br>
Sambata : Ati vrea voi!</br>
Duminica : Nu te gandi!</br>


</p>


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
<!--<li><?php echo "<a href='line-up_team_ro.php'>Echipa de start</a>";?></li>-->
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
