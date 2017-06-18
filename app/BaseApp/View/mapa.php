<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple icons</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: {lat: -18.2910457, lng: -49.9014929}
  });
  
 
  var image = 'images/beachflag.png';
  var beachMarker = new google.maps.Marker({
    position: {lat: -22.90114596, lng: -43.55912316},
    map: map
    //icon: image
  });
  
}

</script>
	
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGQwgwjeWHmYhttWfJC-EKoYcG_ZcWs3k&signed_in=true&callback=initMap">
</script>
	
  </body>
</html>

