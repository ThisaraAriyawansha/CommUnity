<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 15px;
            transition: color 0.3s ease;
        }

        .navbar-links a:hover {
            color: #c0c0c0;
        }

        /* Contact Section */
        .contact-section {
            padding: 60px 20px;
            background-color: #f8f9fa;
            margin-top: 80px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .map-section {
            height: 400px;
            width: 100%;
            margin-bottom: 30px;
            border-radius: 10px;
            overflow: hidden;
        }

        /* Testimonials Section */
        .testimonials-section {
            background-color: #ffffff;
            padding: 60px 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .testimonial {
            text-align: center;
            margin-bottom: 30px;
        }

        .testimonial p {
            font-size: 1.2em;
            font-style: italic;
            color: #6c757d;
        }

        .testimonial-author {
            margin-top: 10px;
            font-weight: bold;
            color: #343a40;
        }

        /* Newsletter Section */
        .newsletter-section {
            background-color: #f8f9fa;
            padding: 60px 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .newsletter-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8em;
            font-weight: bold;
            color: #343a40;
        }

        .newsletter-form input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .newsletter-form input[type="email"]:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Opening Hours Section */
        .opening-hours-section {
            background-color: #ffffff;
            padding: 60px 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .opening-hours-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8em;
            font-weight: bold;
            color: #343a40;
        }

        .hours {
            text-align: center;
            font-size: 1.3em;
            color: #6c757d;
        }

        /* Footer Styles */
        .footer {
            background: #f7f9fc;
            color: #555;
            padding: 5px 0;
            text-align: center;
            width: 100%;
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.1);
            font-size: 12px;
        }

        .footer p {
            margin: 0;
        }

        .social-icon {
            display: inline-block;
            margin: 0 8px;
            font-size: 1.5rem;
            color: #555;
            transition: color 0.4s ease, transform 0.4s ease;
        }

        .social-icon:hover {
            color: #3498db;
            transform: scale(1.2);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar-links {
                flex-direction: column;
                align-items: center;
            }

            .container {
                padding: 30px;
            }

            .footer p {
                font-size: 10px;
            }

            .social-icon {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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

    <!-- Contact Us Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form id="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" id="map"></section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <h2 class="text-center">What Our Users Say</h2>
        <div class="testimonial">
            <p>"CommUnity has been a game-changer for us. We've connected with like-minded organizations and grown significantly."</p>
            <div class="testimonial-author">- Sarah W.</div>
        </div>
        <div class="testimonial">
            <p>"The platform is user-friendly and has made collaboration much easier!"</p>
            <div class="testimonial-author">- John D.</div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <h2 class="newsletter-title">Subscribe to Our Newsletter</h2>
        <form class="newsletter-form">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </section>

    <!-- Opening Hours Section -->
    <section class="opening-hours-section">
        <h2 class="opening-hours-title">Our Opening Hours</h2>
        <div class="hours">
            Monday - Friday: 9 AM - 5 PM<br>
            Saturday: 10 AM - 4 PM<br>
            Sunday: Closed
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2023 CommUnity. All rights reserved.</p>
        <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
        <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
        <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
    </footer>

    <script>
        function initMap() {
            var location = { lat: 5.955, lng: 80.547 }; // Coordinates for Matara, Sri Lanka
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Welcome to Matara!'
            });
        }

        // Form submission handling
        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Thank you!',
                text: 'Your message has been sent successfully!',
                icon: 'success',
                confirmButtonText: 'OK'
            });
            this.reset(); // Reset the form after submission
        });
    </script>
</body>
</html>
