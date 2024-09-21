<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CommUnity</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafc;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 70px;
            min-height: 100vh;
            color: #333;
        }

        /* Navbar Styles */
        .navbar {
            border-radius: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            padding: 10px 20px;
            display: flex;
            background: #0c3b6d;
            color: white;
            z-index: 1000;
            align-items: center;
            justify-content: space-between;
            transition: background-color 0.3s ease-in-out;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand a {
            font-size: 24px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-family: 'Times New Roman', serif;
        }

        .navbar-links {
            display: flex;
            gap: 20px;
        }

        .navbar-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            padding: 8px 15px;
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar-links a:hover {
            color: #c0c0c0;
        }

        .contact-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            margin-top: 40px;
            animation: fadeInUp 0.5s ease;
        }

        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .tagline {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 30px;
        }

        .contact-form {
            margin-top: 20px;
        }

        .contact-form h2 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 1rem;
            color: #aaa;
            transition: all 0.3s ease;
            pointer-events: none;
            background: white;
            padding: 0 5px;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label,
        .input-group textarea:focus + label,
        .input-group textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 0.85rem;
            color: #3498db;
        }

        .contact-form button {
            padding: 15px;
            border: none;
            border-radius: 8px;
            background-color: #3498db;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #2980b9;
        }

        .list-unstyled {
            text-align: left;
            margin-bottom: 30px;
            padding-left: 20px;
            color: #555;
        }

        .list-unstyled li {
            margin-bottom: 10px;
        }

        /* Footer Styles */
        .footer {
            background: #f7f9fc;
            color: #555;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.1);
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

        @media (max-width: 768px) {
            .navbar-links {
                flex-direction: column;
                gap: 10px;
            }

            .contact-container {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .tagline {
                font-size: 1rem;
            }

            .contact-form h2 {
                font-size: 1.5rem;
            }

            .footer p {
                font-size: 12px;
            }

            .social-icon {
                font-size: 1.4rem;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
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
    <div class="contact-container">
        <h1>Welcome to CommUnity</h1>
        <p class="tagline">Bringing people together to create a better Sri Lanka.</p>
        
        <p>At <strong>CommUnity</strong>, we believe in fostering a strong sense of togetherness by creating opportunities for volunteers to collaborate on impactful projects that make a difference in society.</p>

        <ul class="list-unstyled">
            <li><strong>Community Development:</strong> We offer volunteer programs that help improve local communities and uplift those in need.</li>
            <li><strong>Skill Development:</strong> Volunteers can enhance their skills by working on projects that benefit both society and their personal growth.</li>
            <li><strong>Opportunities for All:</strong> We connect volunteers with causes they care about, allowing them to make meaningful contributions.</li>
        </ul>

        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="#">
                <div class="input-group">
                    <input type="text" name="name" required placeholder=" ">
                    <label for="name">Name</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required placeholder=" ">
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <textarea name="message" rows="5" required placeholder=" "></textarea>
                    <label for="message">Message</label>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 CommUnity. All rights reserved.</p>
        <div>
            <a href="https://facebook.com" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <!-- Bootstrap and JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
