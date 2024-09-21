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
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Flatpickr CSS for Time Selection -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Custom CSS -->
    <style>
  /* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to bottom right, #f7f9fc, #e2e9f0); /* Gradient background */
    color: #333;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
    transition: all 0.3s ease-in-out;
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
            padding: 10px 20px;
            display: flex;
            background: linear-gradient(135deg, #0c3b6d, #021a33, #010c17);
            color: white;
            z-index: 1000;
            align-items: center;
            transition: background-color 0.3s ease-in-out;
        }

        .navbar:hover {
            background: linear-gradient(135deg, #0c3b6d, #021a33, #010c17);
            transition: background-color 0.3s ease, transform 0.3s ease;  
            transform: translateY(-3px); /* Subtle lift effect */
        }
        

        .navbar-brand a {
            font-size: 24px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }

        .navbar-links {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            flex-grow: 1;
            font-family: 'Times New Roman', Times, serif;
        }

        .navbar-links a {
            position: relative;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1em;
            padding: 8px 15px;
            overflow: hidden;
            transition: color 0.3s ease;
        }

        .navbar-links a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: -100%;
            background-color: #ffffff;
            transition: left 0.8s ease;
        }

        .navbar-links a:hover::before {
            left: 0;
        }

        .navbar-links a:hover {
            color: #c0c0c0;
        }


/* Container Styles */
.container {
    margin-top: 120px; /* Increased margin-top for more space below navbar */
    padding: 40px; /* Increased padding for a spacious feel */
    animation: slideUp 0.5s ease-out;
    background: #fff;
    border-radius: 15px; /* More rounded corners */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
    transition: transform 0.3s ease-in-out;
}

.container:hover {
    transform: translateY(-5px); /* Slightly less hover lift */
}

/* Form Styles */
.form-group label {
    font-weight: 600;
    color: #2c3e50;
    font-size: 16px;
    margin-bottom: 8px;
}

.form-control {
    width: 100%;
    border-radius: 15px;
    border: 1px solid #ddd;
    padding: 12px 18px;
    font-size: 15px;
    background: #f5f5f5;
    box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.4s ease, border-color 0.4s ease;
}

.form-control:focus {
    box-shadow: 0 0 12px rgba(52, 152, 219, 0.4); /* Brighter focus shadow */
    border-color: #3498db;
    outline: none;
}

/* Map Styles */
#map {
    height: 400px;
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background: #e9ecef;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#map:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* Footer Styles */
.footer {
    background: #f7f9fc;
    color: #555;
    padding: 5px 0; /* Decreased padding for a more compact look */
    text-align: center;
    width: 100%;
    box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.1);
    font-size: 12px; /* Smaller font size for compactness */
}

.footer p {
    margin: 0;
    animation: fadeIn 1s ease-out;
}

.social-icon {
    display: inline-block;
    margin: 0 8px; /* Decreased margin for tighter spacing */
    font-size: 1.5rem; /* Adjusted size for a more subtle look */
    color: #555;
    transition: color 0.4s ease, transform 0.4s ease;
}

.social-icon:hover {
    color: #3498db;
    transform: scale(1.2); /* Slightly smaller scale for hover */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .navbar-links {
        flex-direction: column;
        align-items: center;
    }

    .container {
        padding: 30px; /* Adjusted padding for smaller screens */
    }

    .footer p {
        font-size: 10px; /* Even smaller font size for mobile */
    }

    .social-icon {
        font-size: 1.4rem; /* Further adjusted size for mobile */
    }
}
.unique-btn {
    padding: 12px 24px; /* Comfortable padding */
    background: linear-gradient(90deg, #3498db, #9b59b6); /* Gradient background */
    color: #fff; /* Text color */
    border: none; /* No border */
    border-radius: 30px; /* Fully rounded corners */
    font-size: 16px; /* Font size */
    font-weight: 700; /* Bold text for emphasis */
    text-transform: uppercase; /* Uppercase text */
    letter-spacing: 1px; /* Spacing for modern touch */
    cursor: pointer; /* Pointer cursor */
    transition: all 0.3s ease; /* Smooth transitions */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Subtle shadow */
}

.unique-btn:hover {
    transform: translateY(-3px); /* Slight lift effect */
    background: linear-gradient(90deg, #2980b9, #8e44ad); /* Darker gradient on hover */
}

.unique-btn:active {
    transform: translateY(1px); /* Slight drop effect on click */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Adjusted shadow on click */
}

.unique-btn:focus {
    outline: none; /* Remove default outline */
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.5); /* Custom focus outline */
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
                <input type="text" id="time" name="time" class="form-control" required>
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

        <button type="submit" class="btn unique-btn">Register</button>
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



<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    // Initialize Flatpickr for Time Selection
    flatpickr("#time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: false // You can set this to false for 12-hour AM/PM format
    });
</script>
<br>

<footer class="footer">
    <p>&copy; 2024 CommUnity. All rights reserved.</p>
    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
</footer>
</body>
</html>
