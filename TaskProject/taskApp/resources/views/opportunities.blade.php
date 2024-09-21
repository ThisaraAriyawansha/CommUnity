<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Opportunity</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Custom CSS -->
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background: #eef2f3;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            transition: opacity 1s ease-in-out;
            color: #333;
        }

        .fade-in {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
        }

        /* Navbar Styles */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 40px;
            display: flex;
            background: linear-gradient(135deg, #1d2b64, #2a2a72);
            color: white;
            z-index: 1000;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .navbar.scrolled {
            background-color: #1d2b64;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .navbar-brand a {
            font-size: 28px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            letter-spacing: 1px;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .navbar-brand a:hover {
            transform: scale(1.1);
            color: #ffcb00;
        }

        .navbar-links {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            flex-grow: 1;
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease, transform 0.3s ease;
            position: relative;
        }

        .navbar-links a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #ffcb00;
            transition: width 0.3s ease;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        .navbar-links a:hover::after {
            width: 100%;
        }

        .navbar-links a:hover {
            color: #ffcb00;
            transform: scale(1.1);
        }

        /* Container Styles */
        .container {
            margin-top: 80px;
            padding: 20px;
            animation: slideUp 0.5s ease-out;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .form-group label {
            font-weight: 500;
            color: #555;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            background: #f9f9f9;
        }

        .form-control:focus {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            border-color: #ffcb00;
            outline: none;
        }

        /* Map Styles */
        #map {
            height: 400px;
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background: #eeeeee;
        }

        #map:hover {
            transform: scale(1.02);
        }

        /* Footer Styles */
        .footer {
            background: #1d2b64;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
        }

        .footer p {
            margin: 0;
            font-size: 1rem;
            animation: fadeIn 1s ease-out;
        }

        .social-icon {
            display: inline-block;
            margin: 0 15px;
            font-size: 1.6rem;
            color: white;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icon:hover {
            color: #ffcb00;
            transform: scale(1.3);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-links {
                flex-direction: column;
                align-items: center;
            }

            .footer p {
                font-size: 0.9rem;
            }

            .social-icon {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body class="fade-in">

<header>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/"><i class="fas fa-users"></i> CommUnity</a>
        </div>
        <div class="navbar-links">
            <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link" href="javascript:void(0);" onclick="slowScrollTo('.company-overview', 1000)"><i class="fas fa-info-circle"></i> About Us</a>
            <a class="nav-link" href="#"><i class="fas fa-hand-holding-heart"></i> Opportunities</a>
            <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact Us</a>
        </div>
    </nav>
</header>

<div class="container">
    <h1 class="my-4">Register Opportunity</h1>

    <form>
        @csrf
        <div class="form-group">
            <label for="event_name">Event Name</label>
            <input type="text" id="event_name" name="event_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="time">Time</label>
            <input type="time" id="time" name="time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="map">Map</label>
            <div id="map"></div>
            <input type="hidden" id="latitude" name="latitude">
            <input type="hidden" id="longitude" name="longitude">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map').setView([7.8731, 80.7718], 8); // Center of Sri Lanka

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Create a marker and set its position to the center of the map
    var marker = L.marker([7.8731, 80.7718], {draggable: true}).addTo(map);

    // Function to perform reverse geocoding
    function reverseGeocode(lat, lng) {
        var url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                var location = data.display_name || "Location not found";
                document.getElementById('location').value = location;
            })
            .catch(error => {
                console.error('Error fetching location:', error);
            });
    }

    // Event listener for marker drag
    marker.on('dragend', function(event) {
        var latlng = event.target.getLatLng();
        document.getElementById('latitude').value = latlng.lat;
        document.getElementById('longitude').value = latlng.lng;

        // Reverse geocode to auto-fill location
        reverseGeocode(latlng.lat, latlng.lng);
    });

    // Event listener for map click
    map.on('click', function(event) {
        marker.setLatLng(event.latlng);
        document.getElementById('latitude').value = event.latlng.lat;
        document.getElementById('longitude').value = event.latlng.lng;

        // Reverse geocode to auto-fill location
        reverseGeocode(event.latlng.lat, event.latlng.lng);
    });
    
    function slowScrollTo(selector, duration) {
        var element = document.querySelector(selector);
        var targetPosition = element.getBoundingClientRect().top + window.scrollY;
        var startPosition = window.scrollY;
        var distance = targetPosition - startPosition;
        var startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var progress = Math.min(timeElapsed / duration, 1);
            window.scrollTo(0, startPosition + distance * progress);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        requestAnimationFrame(animation);
    }

    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        var fadeInElement = document.querySelector('.fade-in');
        fadeInElement.classList.add('visible');
    });
</script>

<footer class="footer">
    <p>&copy; 2024 CommUnity. All rights reserved.</p>
    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
</footer>
</body>
</html>
