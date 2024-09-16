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

            .navbar {
                position: fixed;
                top: 0;
                right: 0;
                min-width: 100%;
                padding: 10px 20px; /* Reduced padding */
                display: flex;
                background: rgba(0, 0, 0, 0); /* Fully transparent background */
                color: white;
                z-index: 1000; /* Ensure it is on top */
                align-items: center; /* Center items vertically */
            }

            .navbar-brand a {
                top: 0;
                right: 100%;
                justify-content: flex-start;
                flex-grow: 4;
                font-size: 24px; /* Reduced font size */
                color: black;
                text-decoration: none;
                font-weight: bold;
                font-family: 'Times New Roman', Times, serif; /* Using Times New Roman for the links */
            }

            .navbar-brand:hover {
                transform: translateY(-3px); /* Subtle lift effect */
            }

            .navbar-links {

                display: flex;
                gap: 10px; /* Adjusted space between links */
                justify-content: flex-end;
                flex-grow: 1;
                font-family: 'Times New Roman', Times, serif; /* Using Times New Roman for the links */
            }

            .navbar-links a {
                position: relative;
                color: black;
                text-decoration: none;
                font-weight: bold;
                font-size: 1em; /* Reduced font size */
                padding: 8px 15px; /* Reduced padding */
                overflow: hidden; /* Hide the overflow to enable animation */
                transition: color 0.3s ease; /* Smooth transition for text color */
            }

            .navbar-links a::before {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px; /* Reduced line height */
                bottom: 0;
                left: -100%;
                background-color: #ffffff; /* White running line */
                transition: left 0.8s ease; /* Smooth running line animation */
            }

            .navbar-links a:hover::before {
                left: 0; /* Slide the line in */
            }

            .navbar-links a:hover {
                color: #c0c0c0; /* Slightly lighter text color on hover */
            }

            @keyframes fadeScale {
                0% {
                    transform: scale(1);
                    opacity: 1;
                }
                50% {
                    transform: scale(1.05);
                    opacity: 0.9;
                }
                100% {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            .navbar-brand {
                animation: fadeScale 3s ease-in-out infinite; /* Apply the subtle fade and scale animation */
            }

            .hero-section {
    background: linear-gradient(to bottom right, #2c3e50, #34495e); /* Dark gradient colors */
    background-size: cover; /* Ensure the background covers the entire section */
    background-position: center center; /* Center the background */
    background-repeat: no-repeat; /* Prevent repeating */
    height: 100vh; /* Full viewport height */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    padding: 0 20px;
    animation: fadeIn 2s ease-in-out;
}




@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.hero-section h1 {
    font-family: 'Times New Roman', Times, serif;

    font-size: 3em;
    margin-bottom: 20px;
    animation: slideInDown 1s ease-in-out;
}

@keyframes slideInDown {
    from { transform: translateY(-50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.hero-section p {
    font-family: 'Times New Roman', Times, serif;
    font-size: 1.5em;
    margin-bottom: 40px;
    animation: slideInUp 1s ease-in-out;
}

@keyframes slideInUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.cta-button1 {
    background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent white */
    color: #ffffff;
    padding: 2px 30px; /* Increased padding for better look */
    text-decoration: none !important; /* Ensure no underline */
    border-radius: 50px;
    font-size: 1.2em;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    border: 2px solid #ffffff;
    transition: background-color 0.3s, transform 0.3s;
    display: inline-block;
}

.cta-button1:hover {
    text-decoration: none !important; /* Ensure no underline */
    color: #ffffff;

    background-color: rgba(255, 255, 255, 0.4); /* Slightly more opaque on hover */
    transform: translateY(-3px); /* Subtle lift effect */
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
    </style>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="index.html"><i class="fas fa-users"></i> CommUnity</a>
            </div>
            <div class="navbar-links">
            <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> About Us</a>
            <a class="nav-link" href="#"><i class="fas fa-hand-holding-heart"></i> Opportunities</a>
            <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>
        </nav>
    </header>


    <section class="hero-section" >
            <h1>Welcome to CommUnity</h1>
            <p>Bringing people together to create a better Sri Lanka.</p>
            <a href="#" class="cta-button1">Get Involved</a>
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

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
              // Change navbar background on scroll
              window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.8)'; // Darken the navbar when scrolled
            } else {
                navbar.style.backgroundColor = 'rgba(0, 0, 0, 0)'; // Transparent when at top
            }
        });
    </script>
</body>
</html>
