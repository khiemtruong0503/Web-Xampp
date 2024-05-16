<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Maps Example</title>
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body>
  <h1>My Google Map</h1>
  <div id="map"></div>

  <script>
    // Replace YOUR_API_KEY with your actual Google Maps API key
    const apiKey = 'YOUR_API_KEY';

    // Load the Google Maps API script
    function initMap() {
      const myLatLng = { lat: 37.7749, lng: -122.4194 }; // Set initial map center coordinates

      const map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 12, // Adjust the initial zoom level
      });

      // Create a marker and set its position
      const marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'My Location',
      });
    }

    // Load the Google Maps API script with your API key
    function loadScript() {
      const script = document.createElement('script');
      script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&callback=initMap`;
      script.defer = true;
      script.async = true;
      document.head.appendChild(script);
    }

    // Call the loadScript function to load the Google Maps API
    window.onload = loadScript;
  </script>
</body>
</html>
