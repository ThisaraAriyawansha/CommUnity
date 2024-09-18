<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CommUnity</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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


        /* Styles for Features Section */
.features {
    padding: 80px 0;
    background: #f0f4f8;
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
    color: #333;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

.features h2 {
    text-align: center;
    font-size: 3rem;
    margin-bottom: 50px;
    color: #1d1d1f;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: color 0.3s ease, transform 0.3s ease;
}

.features h2:hover {
    color: #007bff;
    transform: scale(1.05);
}

.features-row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
}

.feature-item {
    flex: 1 1 300px;
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.2), -8px -8px 15px rgba(255, 255, 255, 0.9); /* Neumorphic effect */
    text-align: center;
    padding: 40px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.feature-item:hover {
    transform: translateY(-8px);
    box-shadow: 12px 12px 25px rgba(0, 0, 0, 0.3), -12px -12px 25px rgba(255, 255, 255, 0.8);
}

.feature-icon {
    font-size: 3.5rem;
    color: #007bff;
    margin-bottom: 20px;
    transition: color 0.3s ease, transform 0.3s ease;
}

.feature-item:hover .feature-icon {
    color: #005bbb;
    transform: scale(1.1);
}

.feature-item h3 {
    font-size: 2rem;
    margin-bottom: 15px;
    color: #1d1d1f;
    font-weight: 600;
    transition: color 0.3s ease, text-shadow 0.3s ease;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.feature-item p {
    font-size: 1.2rem;
    color: #666;
    line-height: 1.6;
    transition: color 0.3s ease;
}

.feature-item:hover p {
    color: #333;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .features-row {
        flex-direction: column;
        align-items: center;
    }
}

/* Testimonials Section */
.testimonials {
    background: linear-gradient(135deg, #f5f5f7 0%, #e0e0e0 100%), url('path-to-your-background-image.jpg'); /* Add a background image */
    background-size: cover;
    padding: 4rem 2rem; /* Increased padding for spacing */
    text-align: center;
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
    position: relative;
}

.testimonials h2 {
    font-size: 2.5rem;
    font-weight: 700; /* Bolder font weight for emphasis */
    margin-bottom: 2rem;
    color: #222; /* Slightly darker color for better readability */
    letter-spacing: 1px; /* Added letter spacing for modern touch */
    text-transform: uppercase; /* Uppercase for modern styling */
    position: relative;
    padding-bottom: 1rem; /* Padding for decorative element */
}

.testimonials h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: #007bff; /* Accent color */
    margin: 0 auto;
    border-radius: 2px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}

.testimonials-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem; /* Added padding for responsiveness */
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive grid layout */
    gap: 2rem; /* Added gap between testimonials */
}

.testimonial {
    padding: 2rem;
    font-size: 1.2rem;
    color: #444; /* Darker text color for better contrast */
    background: #ffffff;
    border-radius: 15px; /* More rounded corners for a modern feel */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* More prominent shadow */
    margin-bottom: 2rem; /* Increased bottom margin for spacing */
    transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease; /* Added background transition */
    border: 1px solid #ddd; /* Subtle border for definition */
    position: relative; /* Required for positioning pseudo-elements */
}

.testimonial::before {
    content: "\201C"; /* Unicode for left double quotation mark */
    font-size: 4rem;
    color: #007bff; /* Accent color */
    position: absolute;
    top: -1.5rem;
    left: 1rem;
    opacity: 0.5;
}

.testimonial:hover {
    transform: translateY(-10px); /* More pronounced hover effect */
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
    background: #f9f9f9; /* Light background change on hover for subtle effect */
}

.testimonial p {
    font-style: italic;
    margin: 0; /* Remove default margin for better alignment */
    line-height: 1.6; /* Improved line-height for readability */
}

.testimonial small {
    display: block;
    margin-top: 1rem;
    font-size: 1rem;
    color: #777; /* Slightly lighter color for the author */
}

.rating {
    margin-top: 1rem;
}

.rating i {
    color: #ffd700; /* Gold color for stars */
    font-size: 1.2rem;
    margin: 0 0.1rem;
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



/* Light Theme for Events Section */
.events {
    background-color: #f9f9f9; /* Light background for a clean look */
    padding: 4rem 0;
    text-align: center;
    color: #333; /* Dark text for contrast */
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
}

.events h2 {
    font-size: 3rem;
    font-weight: 600;
    margin-bottom: 2.5rem;
    color: #1d1d1f; /* Darker title for contrast */
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
}

.event {
    background-color: #ffffff; /* White event card background for minimalism */
    border-radius: 16px; /* Softer rounded corners */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Light shadow for a subtle effect */
    margin-bottom: 2rem;
    overflow: hidden;
    border: 1px solid #005bbb; /* Dark blue borders */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.event:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 91, 187, 0.3); /* Dark blue shadow on hover */
}

.event img {
    width: 100%;
    height: auto;
    border-bottom: 3px solid #005bbb; /* Dark blue accent line */
    transition: transform 0.3s ease, opacity 0.3s ease;
    border-radius: 16px 16px 0 0;
}

.event:hover img {
    transform: scale(1.03);
    opacity: 0.95;
}

.event-details {
    padding: 20px;
}

.event-details h3 {
    font-size: 1.8rem;
    margin-bottom: 8px;
    color: #005bbb; /* Dark blue accent color */
    font-weight: 500;
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', sans-serif;
}

.event-details p {
    font-size: 1.2rem;
    color: #333; /* Dark text for readability */
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
    color: #555; /* Medium dark for subtle details */
}

.participation-message {
    font-size: 1.1rem;
    margin-top: 1rem;
    color: #005bbb; /* Accent message color */
    font-style: italic;
}

.participate-btn {
    margin-top: 15px;
    padding: 12px 24px;
    background: linear-gradient(135deg, #007aff, #0056b3); /* Modern gradient */
    color: white;
    border: none;
    border-radius: 8px; /* Rounded buttons for a soft feel */
    cursor: pointer;
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', sans-serif;
    font-size: 1.1rem;
    transition: background 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 12px rgba(255, 149, 0, 0.4); /* Soft shadow for depth */
}

.participate-btn:hover {
    background: linear-gradient(135deg, #0056b3, #003a80); /* Darker gradient on hover */
    box-shadow: 0 6px 16px rgba(0, 122, 255, 0.3); /* Slightly stronger shadow */
}

/* Enhanced Styles for Our Events Section */
.events-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f9f9f9 50%, #e0e0e0 50%);
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
    color: #333;
}

.events-container {
    width: 85%;
    margin: 0 auto;
}

.events-section h2 {
    text-align: center;
    font-size: 3rem;
    margin-bottom: 40px;
    color: #1d1d1f;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    transition: color 0.3s ease, transform 0.3s ease, letter-spacing 0.3s ease;
}

.events-section h2:hover {
    color: #005bbb;
    transform: scale(1.05);
    letter-spacing: 2px;
}

.events-row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
}

.event-item {
    flex: 1 1 300px;
    margin: 20px;
    text-align: center;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    padding: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
}

.event-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.25);
    background-color: #f0f8ff; /* Light blue background on hover */
}

.event-item h3 {
    font-size: 2.2rem;
    margin-bottom: 15px;
    color: #007bff;
    font-weight: 600;
    transition: color 0.3s ease, text-shadow 0.3s ease;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.event-item h3:hover {
    color: #005bbb;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.event-item p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: #666;
    line-height: 1.6;
}

/* Enhanced Photo Album Styles */
.photo-album {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.album-images {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
}

.album-image {
    width: 120px;
    height: 120px;
    object-fit: cover;
    cursor: pointer;
    border: 2px solid #ddd;
    border-radius: 16px;
    transition: border-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.album-image:hover {
    border-color: #007bff;
    transform: scale(1.1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Add subtle shadow on hover */
}

/* Modern Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.8);
    padding-top: 80px;
    transition: opacity 0.3s ease;
}

.modal-content {
    position: relative;
    margin: auto;
    padding: 40px;
    width: 90%;
    max-width: 800px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

#modal-image {
    width: 100%;
    height: auto;
    border-radius: 16px;
}

.close-modal {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #fff;
    font-size: 36px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease, transform 0.3s ease;
}

.close-modal:hover,
.close-modal:focus {
    color: #bbb;
    transform: scale(1.1);
}

#modal-caption {
    margin-top: 20px;
    color: #333;
    text-align: center;
    font-size: 1.4rem;
}
/* Footer Styles */
.footer {
    background: white;
    color:  linear-gradient(135deg, #0c3b6d, #021a33, #010c17);
    padding: 20px 0;
    font-family: -apple-system, 'SF Pro Display', 'Helvetica Neue', Helvetica, sans-serif;
    text-align: center;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer p {
    color:#0c3b6d;
    font-size: 1rem;
    margin: 0;
    letter-spacing: 0.5px;
    transition: color 0.3s ease;
}

.footer p:hover {
    color: #007bff;
}

.social-media {
    margin-top: 15px;
}

.social-icon {
    display: inline-block;
    margin: 0 10px;
    font-size: 1.5rem;
    color:#0c3b6d;
    transition: color 0.3s ease, transform 0.3s ease;
}

.social-icon:hover {
    color: #007bff;
    transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .footer p {
        font-size: 0.9rem;
    }

    .social-icon {
        font-size: 1.2rem;
        margin: 0 8px;
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
        <div class="features-row">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>Flexible Volunteering</h3>
                <p>Find opportunities that fit your schedule and make a difference.</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Strong Community</h3>
                <p>Be part of a supportive network dedicated to local impact.</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3>Meaningful Projects</h3>
                <p>Work on projects that matter to you and your community.</p>
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


<section class="events-section">
    <div class="events-container">
        <h2>"Success Achieved!"</h2>
        <div class="events-row">
            <!-- Event 1: Tree Planting Day -->
            <div class="event-item">
                <h3>Tree Planting Day</h3>
                <p>Here's a glimpse of our successful Tree Planting Day event. Thanks to all the volunteers!</p>
                <div class="photo-album">
                    <div class="album-images">
                    <img src="images/spring-tree-planting-1080x1080.jpg" alt="Volunteers planting trees during spring" class="album-image" data-modal="tree-planting-modal">
                        <img src="images/forestry-nurseries-bg.jpg" alt="Forestry nursery with young saplings" class="album-image" data-modal="tree-planting-modal">
                        <img src="images/Tree Panting campaign 4.jpg" alt="Group of people planting trees in a forest" class="album-image" data-modal="tree-planting-modal">
                        <img src="images/samanalawewa_01.jpg" alt="Tree planting event in Samanalawewa" class="album-image" data-modal="tree-planting-modal">
                        <img src="images/omf-tree-planting.jpg" alt="Community tree planting activity organized by CommUnity" class="album-image" data-modal="tree-planting-modal">

                    </div>
                </div>
            </div>
            
            <!-- Event 2: Beach Cleanup Drive -->
            <div class="event-item">
                <h3>Beach Cleanup Drive</h3>
                <p>Our Beach Cleanup Drive was a big success. Thanks to everyone who came out to help keep our beaches clean!</p>
                <div class="photo-album">
                    <div class="album-images">
                            <img src="images/premium_photo-1663039947303-0fad26f737b8.jpeg" alt="Volunteers collecting trash on a beach" class="album-image" data-modal="beach-cleanup-modal">
                            <img src="images/MKT_2341-scaled.jpg" alt="Beach cleanup team working together" class="album-image" data-modal="beach-cleanup-modal">
                            <img src="images/Reasons_Why_Beach_Clean-Ups_Important_1200x1200.webp" alt="Infographic on the importance of beach cleanups" class="album-image" data-modal="beach-cleanup-modal">
                            <img src="images/how-to-organize-a-beach-clean-up-0.png" alt="Guide on organizing a beach cleanup event" class="album-image" data-modal="beach-cleanup-modal">
                            <img src="images/299593ab-386d-41d4-bd8d-6f3018a0c512-TCN_COASTAL_CLEANUP07.webp" alt="Community involved in coastal cleanup activities" class="album-image" data-modal="beach-cleanup-modal">

                    </div>
                </div>
            </div>
            
            <!-- Event 3: Blood Donation Drive -->
            <div class="event-item">
                <h3>Blood Donation Drive</h3>
                <p>Our Blood Donation Drive was a great success, helping many people in need. Thank you to all donors!</p>
                <div class="photo-album">
                    <div class="album-images">
                        <img src="images/Blood-Donation-Campaign-2019-1.jpg" alt="Blood Donation" class="album-image" data-modal="blood-donation-modal">
                        <img src="images/Batticaloa_Blood_Donor_03.jpg" alt="Blood Donation Day" class="album-image" data-modal="blood-donation-modal">
                        <img src="images/Blood-donor-inside-3.jpg" alt="Blood Donation Day" class="album-image" data-modal="blood-donation-modal">
                        <img src="images/main_270_4875.jpg" alt="Blood Donation Day" class="album-image" data-modal="blood-donation-modal">
                        <img src="images/2.jpg" alt="Blood Donation" class="album-image" data-modal="blood-donation-modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div id="image-modal" class="modal">
    <span class="close-modal">&times;</span>
    <div class="modal-content">
        <img id="modal-image" src="" alt="Event Image">
        <div id="modal-caption"></div>
    </div>
</div>




<!-- Testimonials Section -->
<section class="testimonials">
    <div class="testimonials-wrapper">
        <h2>What Our Volunteers Say</h2>
        <div class="testimonials-grid">
            <div class="testimonial">
                <p>"Joining CommUnity was a life-changing experience. I met amazing people and contributed to meaningful causes."</p>
                <small>- Anjali S., Community Leader</small>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="testimonial">
                <p>"The opportunities provided by CommUnity were flexible and aligned with my interests. It's a great platform for getting involved."</p>
                <small>- Priya M., Volunteer Coordinator</small>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="testimonial">
                <p>"I love how CommUnity connects volunteers with projects that have a real impact. It’s fulfilling to see the difference we make."</p>
                <small>- Rajesh K., Project Manager</small>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <p>&copy; 2024 CommUnity. All rights reserved.</p>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
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
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('image-modal');
    const modalImg = document.getElementById('modal-image');
    const captionText = document.getElementById('modal-caption');
    const closeModal = document.querySelector('.close-modal');

    function openModal(imgSrc, caption) {
        modal.style.display = 'block';
        modalImg.src = imgSrc;
        captionText.innerHTML = caption;
    }

    function closeModalFunc() {
        modal.style.display = 'none';
    }

    document.querySelectorAll('.album-image').forEach(img => {
        img.addEventListener('click', function () {
            openModal(this.src, this.alt);
        });
    });

    closeModal.addEventListener('click', closeModalFunc);

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModalFunc();
        }
    });
});
</script>

</body>
</html>
