<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CommUnity</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
            background: linear-gradient(135deg, #0c3b6d, #021a33, #010c17);
            color: white;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar Styles */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 10px 20px;
            display: flex;
            background: rgba(0, 0, 0, 0);
            color: white;
            z-index: 1000;
            align-items: center;
            transition: background-color 0.3s ease-in-out;
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

        /* Hero Section */
        .heroo {
            min-height: 750px;
            background: linear-gradient(135deg, #0c3b6d, #021a33, #010c17);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            height: calc(100vh - 100px);
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .hero-text {
            max-width: 50%;
            animation: slideInLeft 2s ease-in-out;
        }

        @keyframes slideInLeft {
            0% { transform: translateX(-100px); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }

        .hero-text h1 {
            font-size: 64px;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .hero-text button {
            padding: 15px 30px;
            background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent white */
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;





  
        }

        .hero-text button:hover {
            background-color: rgba(255, 255, 255, 0.4); /* Slightly more opaque on hover */
            transform: translateY(-3px); /* Subtle lift effect */
        }

        /* Image Animation */
        #myImage {
            width: 430px;
            height: 430px;
            animation: zoomIn 2s ease-in-out;
        }

        @keyframes zoomIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* Scrolling Background Change */
        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.8);
        }


           /* Feature Section */
           .features {
            background-color: white; /* Semi-transparent white */
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
            padding: 4rem 2rem; /* Increased padding */
            text-align: center;
        }

        .testimonials h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #333;
        }

        .testimonial {
            padding: 2rem;
            font-size: 1.2rem;
            color: #555;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
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



        /* Company Overview Section */
.company-overview {
    background-color: #f5f5f7; /* Light background to differentiate */
    padding: 4rem 0;
    text-align: left;
    animation: fadeIn 2s ease-in-out;
}

.company-overview h2 {
    font-size: 3rem;
    font-weight: 600;
    margin-bottom: 2rem;
    text-align: center;
    color: #333;
}

.company-overview img {
    max-width: 100%;
    height: auto;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.company-overview p {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 1rem;
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
                <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> About Us</a>
                <a class="nav-link" href="#"><i class="fas fa-hand-holding-heart"></i> Opportunities</a>
                <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="heroo">
        <div class="hero-text">
            <h1>Welcome to CommUnity</h1>
            <p>Bringing people together to create a better Sri Lanka.</p>
            <button class="cta-button1">Get Involved</button>
        </div>
        <img id="myImage" src="images/together-people-love-icon-logo-community-black-circle-white-design-vector-removebg.png" alt="Placeholder Image">
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


<!-- Company Overview Section -->
<section class="company-overview">
    <div class="container">
        <h2>About CommUnity</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="images/cover-image - Copy.jpg" alt="Company Overview" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <p>
                    At CommUnity, we believe in fostering a strong sense of togetherness by creating opportunities 
                    for volunteers to collaborate on impactful projects that make a difference in society. Our goal 
                    is to bridge the gap between individuals and meaningful causes that improve local communities.
                </p>
                <p>
                    Founded in 2022, we have worked with thousands of volunteers who have contributed to various 
                    initiatives, from education to environmental conservation. We are driven by the desire to create 
                    a better tomorrow by uniting people for a common purpose.
                </p>
                <p>
                    Join us and become part of a movement that empowers people to do more and be more for their communities.
                </p>
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
                        <p>"The opportunities provided by CommUnity were flexible and aligned with my interests. It's a great platform for getting involved."</p>
                        <small>- Priya M.</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <p>"I love how CommUnity connects volunteers with projects that have a real impact. It’s fulfilling to see the difference we make."</p>
                        <small>- Rajesh K.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 CommUnity. All rights reserved.</p>
    </footer>




    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Navbar Scroll Animation -->
    <script>
        window.addEventListener('scroll', function () {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
