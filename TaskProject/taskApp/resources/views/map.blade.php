<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Opportunities Map</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background: url("images/map.jpg") no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            opacity: 0; /* Start hidden */
            transition: opacity 0.5s ease-in; /* Smooth fade-in */
        }
        /* Existing styles... */

        /* Add a class for fade-in */
        .fade-in {
            opacity: 1; /* Fully visible */
        }
       /* Navbar Styles */
 .navbar {
    border-radius: 10px;

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

        #map {
            height: 600px;
            width: 100%;
            border-radius: 10px;
            margin-top: 70px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 30px 15px;
        }
        .hero {
            background: linear-gradient(135deg, #2a7dd5, #010e1d); /* Darker blue gradient on hover */
            color: white;
            border-radius: 10px;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .description {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .description h2 {
            color: #007bff;
            margin-bottom: 15px;
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
    </style>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/"><i class="fas fa-users"></i> CommUnity</a>
        </div>
        <div class="navbar-links">
            <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link" href="javascript:void(0);" onclick="slowScrollTo('.company-overview', 1000)"><i class="fas fa-info-circle"></i> About Us</a>
            <a class="nav-link" href="/map"><i class="fas fa-hand-holding-heart"></i> Opportunities</a>
            <a class="nav-link" href="/contactus"><i class="fas fa-envelope"></i> Contact Us</a>
        </div>
    </nav>
</header>
<br><br><br>
<div class="container">
    <div class="hero">
        <h1>Explore Your Opportunities</h1>
        <p>Discover events, volunteer positions, and community activities available in your area.</p>
    </div>

    <div class="description">
        <h2><i class="fas fa-map-marker-alt"></i> What You Can Find</h2>
        <p>
            Click on the markers to get more details about each opportunity and connect with your community.
        </p>
        <p>
            Whether you're looking for volunteer work, events to attend, or ways to get involved, we've got you covered!
        </p>
    </div>

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
        marker.bindPopup(`
            <div>
                <h5>${opportunity.event_name}</h5>
                <p><strong>Date:</strong> ${opportunity.date}</p>
                <p><strong>Time:</strong> ${opportunity.time}</p>
                <p><strong>Location:</strong> ${opportunity.location}</p>
            </div>
        `);
    });

    // Fade in effect
    window.onload = function() {
        document.body.classList.add('fade-in');
    };
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
