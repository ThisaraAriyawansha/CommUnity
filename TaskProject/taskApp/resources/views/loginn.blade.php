<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font for Professional Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Framer Motion CSS for Animations -->
    <link href="https://unpkg.com/framer-motion/dist/framer-motion.css" rel="stylesheet">
    <!-- Custom CSS for Modern Professional Design -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            border-radius: 16px;
            padding: 50px;
            width: 100%;
            max-width: 1000px;
            transition: transform 0.4s ease;
        }

        .left-section {
            background: linear-gradient(135deg, #003399 , #002266 );
            color: white;
            padding: 50px;
            border-radius: 16px 0 0 16px;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.4s ease;
        }


        .left-section h1 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 40px; /* Increased title gap */
            letter-spacing: 1px;
        }

        .left-section p {
            font-size: 18px;
            text-align: center;
        }

        .right-section {
            padding: 50px;
            width: 60%;
            transition: transform 0.4s ease;
        }

        .auth-form h5 {
            font-size: 28px;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border-radius: 10px;
            padding: 18px;
            font-size: 18px;
            border: 1px solid #ddd;
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #003399;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #003399;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #002266;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        .btn-social {
            background-color: #f9f9f9;
            color: #333;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: border-color 0.3s ease, transform 0.3s ease;
        }

        .btn-social img {
            width: 22px;
            margin-right: 12px;
        }

        .btn-social:hover {
            border-color: #003399;
            transform: translateY(-3px);
        }

        .nav-tabs .nav-link {
            font-size: 20px;
            color: #555;
            font-weight: 500;
            padding-bottom: 12px;
            transition: color 0.3s;
        }

        .nav-tabs .nav-link.active {
            font-weight: 600;
            color: #003399;
            border-bottom: 3px solid #003399;
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-spinner {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #003399;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 30px;
            }

            .left-section {
                width: 100%;
                border-radius: 16px 16px 0 0;
            }

            .right-section {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>

    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <h1>Welcome to CommUnity</h1>
            <p>Log in to your account or sign up to join our professional community</p>
        </div>
        <!-- Right Section -->
        <div class="right-section">
            <ul class="nav nav-tabs" id="authTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login"
                        type="button">Login</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register"
                        type="button">Register</button>
                </li>
            </ul>

            <!-- Tab Content with Animation -->
            <div class="tab-content">
                <!-- Login Form -->
                <div class="tab-pane fade show active" id="login">
                  <br/>
                    <h5>Login to your account</h5>
                    <form method="POST" action="#">
                        <div class="mb-4">
                            <input type="email" class="form-control" id="login-email" placeholder="Email address" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" id="login-password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn-custom mb-3">Login</button>
                        <button class="btn-social">
                            <img src="./images/google.webp" alt="Google Icon">Login with Google
                        </button>
                    </form>
                </div>

                <!-- Registration Form -->
                <div class="tab-pane fade" id="register"><br/>
                    <h5>Create a new account</h5>
                    <form method="POST" action="#">
                        <div class="mb-4">
                            <input type="text" class="form-control" id="register-name" placeholder="Full Name" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control" id="register-email" placeholder="Email address" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" id="register-password" placeholder="Password" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" id="register-password-confirm" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="btn-custom mb-3">Register</button>
                        <button class="btn-social">
                            <img src="./images/google.webp" alt="Google Icon">Sign up with Google
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Framer Motion JS for Animations -->
    <script src="https://unpkg.com/framer-motion/dist/framer-motion.umd.js"></script>
    <script>
        // Hide loading overlay when page is fully loaded
        window.addEventListener('load', function() {
            document.getElementById('loadingOverlay').style.display = 'none';
        });

        // Example Framer Motion animation
        document.querySelectorAll('.tab-pane').forEach((tabPane) => {
            tabPane.addEventListener('show.bs.tab', () => {
                tabPane.style.opacity = 0;
                setTimeout(() => {
                    tabPane.style.transition = 'opacity 0.5s ease';
                    tabPane.style.opacity = 1;
                }, 10);
            });
        });
    </script>
</body>

</html>
