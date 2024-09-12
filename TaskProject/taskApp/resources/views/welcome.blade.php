<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CommUnity')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'San Francisco', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            overflow-x: hidden;
        }

        /* Transparent Navbar */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 100;
            background-color: rgba(255, 255, 255, 0); /* Semi-transparent */
            backdrop-filter: blur(10px); /* Apple-like blur effect */
            transition: background-color 0.3s ease-in-out;
        }
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.9); /* Solid background on scroll */
        }
        .navbar-brand, .nav-link {
            color: #333;
            font-size: 1.2rem;
            transition: color 0.3s ease-in-out;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #007aff; /* Apple blue hover effect */
        }
        .nav-link i {
            margin-right: 8px; /* Space between icon and text */
        }

        /* Fullscreen Background Image */
        .hero-section {
            background: url('{{ asset('images/cover-image.jpg') }}') no-repeat center center/cover;
            height: 100vh; /* Fullscreen */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        /* Hero Content */
        .hero-content {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6); /* Slightly darker overlay */
            padding: 2rem;
            border-radius: 15px;
            animation: fadeIn 1.5s ease-in-out; /* Fade-in animation */
        }
        .hero-content h1 {
            font-size: 4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: 1px;
            animation: fadeInUp 2s ease-in-out;
        }
        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #f5f5f7;
            animation: fadeInUp 2s ease-in-out;
        }
        .hero-content a {
            padding: 12px 36px;
            background-color: #007aff; /* Apple blue */
            border-radius: 25px;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            box-shadow: 0 8px 15px rgba(0, 122, 255, 0.4);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 2.5s ease-in-out;
        }
        .hero-content a:hover {
            background-color: #005bbb;
            box-shadow: 0 12px 20px rgba(0, 122, 255, 0.6);
        }

        /* Feature Section */
        .features {
            padding: 4rem 0;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }
        .features h2 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #333;
        }
        .feature {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            animation: fadeInUp 2s ease-in-out;
        }
        .feature h3 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #007aff;
        }
        .feature p {
            color: #555;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Testimonials Section */
        .testimonials {
            background-color: #f5f5f7;
            padding: 4rem 0;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }
        .testimonials h2 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #333;
        }
        .testimonial {
            padding: 2rem;
            font-size: 1.2rem;
            color: #555;
            animation: fadeInUp 2s ease-in-out;
        }
        .testimonial p {
            font-style: italic;
        }

        /* Footer */
        footer {
            background-color: #2c2c2e;
            color: #f5f5f7;
            padding: 20px 0;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }
    </style>
</head>
<body>

    <!-- Transparent Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-globe"></i> CommUnity</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-hand-holding-heart"></i> Opportunities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Background Image -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to CommUnity</h1>
            <p>Bringing people together to create a better Sri Lanka.</p>
            <a href="#">Get Involved</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Why Join Us?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <h3><i class="fas fa-calendar-check"></i> Flexible Volunteering</h3>
                        <p>Find opportunities that fit your schedule and make a difference.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <h3><i class="fas fa-users"></i> Strong Community</h3>
                        <p>Be part of a supportive network dedicated to local impact.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <h3><i class="fas fa-project-diagram"></i> Meaningful Projects</h3>
                        <p>Work on projects that matter to you and your community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>What Our Volunteers Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"Joining CommUnity was a life-changing experience. I met amazing people and contributed to meaningful causes."</p>
                        <small>- Anjali S.</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"The flexibility and range of opportunities offered here allowed me to balance volunteering with my personal life."</p>
                        <small>- Ravi K.</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"I love the community spirit and the impactful projects. CommUnity truly makes a difference in Sri Lanka."</p>
                        <small>- Nisha W.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 CommUnity. All rights reserved.</p>
    </footer>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
