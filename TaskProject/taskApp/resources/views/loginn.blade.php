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
            padding: 40px;
            width: 100%;
            max-width: 900px;
        }
        .left-section {
            background-color: #003399;
            color: white;
            padding: 40px;
            border-radius: 16px 0 0 16px;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .left-section h1 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        .left-section p {
            font-size: 16px;
            text-align: center;
        }
        .right-section {
            padding: 40px;
            width: 60%;
        }
        .auth-form h5 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
            padding: 15px;
            font-size: 16px;
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
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #002266;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .btn-social {
            background-color: #f9f9f9;
            color: #333;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: border-color 0.3s ease, transform 0.3s ease;
        }
        .btn-social img {
            width: 20px;
            margin-right: 10px;
        }
        .btn-social:hover {
            border-color: #003399;
            transform: translateY(-3px);
        }
        .nav-tabs .nav-link {
            font-size: 18px;
            color: #555;
            font-weight: 500;
            padding-bottom: 10px;
            transition: color 0.3s;
        }
        .nav-tabs .nav-link.active {
            font-weight: 600;
            color: #003399;
            border-bottom: 2px solid #003399;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 20px;
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
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <h1>Welcome Back</h1>
            <p>Log in to your account or sign up to join our professional community</p>
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <ul class="nav nav-tabs" id="authTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button">Login</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button">Register</button>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Login Form -->
                <div class="tab-pane fade show active" id="login">
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
                <div class="tab-pane fade" id="register">
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
</body>
</html>
