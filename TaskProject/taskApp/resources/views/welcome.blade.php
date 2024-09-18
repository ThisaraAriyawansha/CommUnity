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
    background-color: #f5f5f7;
    padding: 4rem 0;
    display: flex;
    flex-direction: row; /* Side-by-side layout */
    justify-content: space-around;
    align-items: center;
    animation: fadeIn 1.5s ease-in-out;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;

}

.company-overview-text {
    width: 45%;
    text-align: left;
    animation: fadeSlideLeft 2s ease forwards; /* Sliding in from the left */
}

.company-overview-image {
    width: 45%;
    text-align: center;
    animation: fadeSlideRight 2s ease forwards; /* Sliding in from the right */
}

.company-overview h2 {
    font-size: 3rem;
    font-weight: 600;
    margin-bottom: 2rem;
    color: #333;
    opacity: 0;
    transform: translateY(-50px);
    animation: rotateSlideIn 1.5s ease forwards;
}

.company-overview p {
    font-size: 1.3rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    opacity: 0;
    transform: translateY(50px);
    animation: slideUp 2s ease forwards 1s; /* Staggered motion */
}

.company-overview img {
    max-width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transform: scale(0.85) rotate(-5deg); /* Enlarged with rotation */
    opacity: 0;
    animation: zoomRotate 2.5s ease forwards;
    transition: transform 0.4s ease-in-out;
}

.company-overview img:hover {
    transform: scale(0.95) rotate(5deg); /* Rotate on hover for dynamic effect */
}

/* Animations */
@keyframes fadeSlideLeft {
    0% {
        opacity: 0;
        transform: translateX(-100px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeSlideRight {
    0% {
        opacity: 0;
        transform: translateX(100px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes rotateSlideIn {
    0% {
        opacity: 0;
        transform: rotate(-10deg) scale(0.8);
    }
    100% {
        opacity: 1;
        transform: rotate(0) scale(1);
    }
}

@keyframes zoomRotate {
    0% {
        opacity: 0;
        transform: scale(0.75) rotate(-15deg);
    }
    100% {
        opacity: 1;
        transform: scale(1) rotate(0);
    }
}

@keyframes slideUp {
    0% {
        opacity: 0;
        transform: translateY(50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hover Effect for the Entire Section */
.company-overview:hover {
    transform: scale(1.03);
}



/* Dark Theme for Events Section */
.events {
    background-color: #1c1c1e; /* Darker background for a sleek look */
    padding: 4rem 0;
    text-align: center;
    color: #f2f2f7; /* Light text for readability */
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
}

.events h2 {
    font-size: 3rem;
    font-weight: 600;
    margin-bottom: 2.5rem;
    color: #f2f2f7; /* Light title */
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
}

.event {
    background-color: #2c2c2e; /* Dark event card background */
    border-radius: 20px; /* More rounded corners for Apple feel */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); /* Softer shadow with depth */
    margin-bottom: 2rem;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.event:hover {
    transform: translateY(-10px);
    box-shadow: 0 14px 35px rgba(0, 0, 0, 0.6); /* Stronger hover shadow */
}

.event img {
    width: 100%;
    height: auto;
    border-bottom: 4px solid #0a84ff; /* Apple-style blue accent */
    transition: transform 0.3s ease, opacity 0.3s ease;
    border-radius: 20px 20px 0 0; /* Rounded corners on top */
}

.event:hover img {
    transform: scale(1.05);
    opacity: 0.95;
}

.event-details {
    padding: 25px;
}

.event-details h3 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #0a84ff; /* Accent blue color */
    font-weight: 500;
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', sans-serif;
}

.event-details p {
    font-size: 1.2rem;
    color: #e5e5e7; /* Light gray for description text */
    font-family: -apple-system, 'SF Pro Text', 'Helvetica Neue', sans-serif;
    line-height: 1.6;
}

.event-details ul {
    text-align: left;
    list-style-type: none;
    padding: 0;
    margin-top: 1rem;
    font-family: -apple-system, 'SF Pro Text', 'Helvetica Neue', sans-serif;
}

.event-details ul li {
    font-size: 1.1rem;
    margin: 6px 0;
    color: #f2f2f7; /* Light color for event details */
}

.participation-message {
    font-size: 1.1rem;
    margin-top: 1rem;
    color: #0a84ff; /* Accent message */
    font-style: italic;
}

.participate-btn {
    margin-top: 15px;
    padding: 12px 24px;
    background-color: #007aff; /* Apple blue */
    color: white;
    border: none;
    border-radius: 12px; /* Rounded buttons */
    cursor: pointer;
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', sans-serif;
    font-size: 1.1rem;
    transition: background 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 12px rgba(10, 132, 255, 0.4); /* Soft shadow */
}

.participate-btn:hover {
    background-color: #005bbb; /* Darker blue on hover */
    box-shadow: 0 6px 16px rgba(10, 132, 255, 0.6); /* Stronger hover shadow */
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



<!-- Events Section -->
<section class="events">
    <div class="container">
        <h2>Our Upcoming Events</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="event">
                    <img src="images/Community Cleanup Drive.jpg" alt="Community Cleanup Drive" class="event-image">
                    <div class="event-details">
                        <h3>Community Cleanup Drive</h3>
                        <p>Join us in cleaning up our neighborhood to create a better environment.</p>
                        <ul>
                            <li><strong>Location:</strong> Colombo Central Park</li>
                            <li><strong>Date & Time:</strong> 20th September, 9:00 AM - 12:00 PM</li>
                            <li><strong>Bring:</strong> Gloves, Trash Bags, Water Bottle</li>
                        </ul>
                        <button class="participate-btn">"Together, We Build a Beautiful Earth!"</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event">
                    <img src="images/Tree Planting Day.png" alt="Tree Planting Day" class="event-image">
                    <div class="event-details">
                        <h3>Tree Planting Day</h3>
                        <p>Help us plant trees and promote a greener Sri Lanka.</p>
                        <ul>
                            <li><strong>Location:</strong> Galle Fort Park</li>
                            <li><strong>Date & Time:</strong> 25th September, 8:00 AM - 11:00 AM</li>
                            <li><strong>Bring:</strong> Shovel, Seedlings, Water Bottle</li>
                        </ul>
                        <button class="participate-btn">"Join Hands to Help and Beautify Our Planet!"</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event">
                    <img src="images/Charity Fun Run.jpg" alt="Charity Fun Run" class="event-image">
                    <div class="event-details">
                        <h3>Charity Fun Run</h3>
                        <p>Participate in a charity run to raise funds for the underprivileged.</p>
                        <ul>
                            <li><strong>Location:</strong> Negombo Beachfront</li>
                            <li><strong>Date & Time:</strong> 30th September, 7:00 AM - 10:00 AM</li>
                            <li><strong>Bring:</strong> Running Shoes, Energy Drinks, Sun Hat</li>
                        </ul>
                        <button class="participate-btn">"Join the Fun!"</button>
                    </div>
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
