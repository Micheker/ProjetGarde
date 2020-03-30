<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php if (!empty($title)) {
            echo $title;
        } else {
            echo '';
        } ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css" rel='stylesheet'/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" media="screen and (max-width: 700px)" href="./css/style.css" type="text/css" /> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<style>
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
 /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 100%;
    }
</style>
  <header>
      <nav>
          <a href="index.php"><img src="assets/img/image2vector.svg" class="logo"></a>
          <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">

              </ul>
          </div>
      </nav>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </header>
