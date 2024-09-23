<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
            body {
            font-family: 'Times New Roman', Times, serif;
            background: url("images/contact.jpg") no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            opacity: 0; /* Start hidden */
            transition: opacity 0.5s ease-in; /* Smooth fade-in */
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


        .contact-section {
            padding: 60px 0;
            background: rgba(0, 0, 0, 0);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            animation: fadeIn 1s ease forwards;
            margin: 40px auto;
            max-width: 1200px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
            color: #333;
        }

        .contact-info {
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        }

        .contact-info:hover {
            transform: scale(1.02);
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 5px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            padding: 10px 20px;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .map-container {
            margin-top: 40px;
            height: 400px;
            border: 1px solid #ced4da;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease forwards;
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

   /* Footer Styles */
.footer {
    background: rgba(0, 0, 0, 0);
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

<body onload="document.body.style.opacity = 1;">
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
    <section class="contact-section">
        <h2>Contact Us</h2>
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-4">
                    <div class="contact-info">
                        <h4>Get in Touch</h4>
                        <p><i class="fas fa-phone"></i> Phone: +117 321 111</p>
                        <p><i class="fas fa-envelope"></i> Email: info@CommUnity.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Address: Colombo, Sri Lanka</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-md-8">
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="map-container" id="map"></div>
        </div>
    </section>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Leaflet JS for Map -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Initialize Leaflet map
        var map = L.map('map').setView([6.9271, 79.8612], 13); // Coordinates for Colombo
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
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
