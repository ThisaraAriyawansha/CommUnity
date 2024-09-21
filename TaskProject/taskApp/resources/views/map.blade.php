<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Opportunities Map</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f9fc;
        }
        #map {
            height: 600px;
            width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="my-4">Saved Opportunities</h1>
    <div id="map"></div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map').setView([7.8731, 80.7718], 8); // Center of Sri Lanka

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Opportunities data from PHP
    var opportunities = @json($opportunities);

    // Add markers for each opportunity
    opportunities.forEach(function(opportunity) {
        var marker = L.marker([opportunity.latitude, opportunity.longitude]).addTo(map);
        marker.bindPopup(`<strong>${opportunity.name}</strong><br>${opportunity.details}`);
    });
</script>

</body>
</html>
