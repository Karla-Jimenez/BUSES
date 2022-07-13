<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mapa</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <title>BUSES</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          float: right;
          margin: 0;
          padding: 0;
          height: 600px;
          width: 875px;
          
        }
    </style>
</head>
    
<body>  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: [], lng: [] };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Rajkot!",
          });
        }
  
        window.initMap = initMap;
    </script>
  
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('AIzaSyDYSTkbL3Cq6ajRoDRFbpWnEL-tL0sj0sU') }}&callback=initMap" ></script>
  
</body>
</html>