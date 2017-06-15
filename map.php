<!DOCTYPE html>
<?php
$sxe = simplexml_load_file('http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=5', NULL, TRUE);
$x=  $sxe->eventItem->event->Info[1]->showInfo->element['latitude'];
$y=  $sxe->eventItem->event->Info[1]->showInfo->element['longitude'];
echo "<script>var x=" . $x . "</script>";
echo "<script>var y=" . $y . "</script>";
echo '<script>initMap(x,y)</script>';
?>

<html>
  <head>

    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map {height:300px;width:430px;}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_u2fHirU2F-5ZLoM7FK6WC36u5DZXHrc&callback=initMap"
    async defer></script>
    <script>
      var map;
      function initMap() {
        var xnum = Number(x);
        var ynum = Number(y);
        var myLatLng = {lat: xnum, lng: ynum};

        map = new google.maps.Map( document.getElementById('map'), {center: {lat: xnum, lng: ynum},zoom: 19} );

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>

  </head>
  <body>

    <div id="map"></div>

    

      </body>
</html>