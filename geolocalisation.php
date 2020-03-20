<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Géolocalisation</title>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/googlemap.js"></script>
<style type="text/css">
  .container {
    height: 450px;
  }
  #map {
    width: 100%;
    height: 100%;
    border: 1px solid blue;
  }
  #data, #allData {
    display: none;
  }
</style>
</head>
<body>

  <div class="container">
  		<center><h1>Géolocalisation de crèches</h1></center>
  		<?php
  			require 'creche.php';
  			$creche = new creche;
  			$cre = $creche->getCrechesBlankLatLng();
  			$cre = json_encode($cre, true);
  			echo '<div id="data">' . $cre . '</div>';

  			$allData = $creche->getAllCreches();
  			$allData = json_encode($allData, true);
  			echo '<div id="allData">' . $allData . '</div>';
  		 ?>
  		<div id="map"></div>
  	</div>
  </body>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key={VOTRE CLE API}&callback=initMap">
</script>

</html>
