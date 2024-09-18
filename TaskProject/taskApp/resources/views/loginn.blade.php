<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for Minimalist Design -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .split-section {
            background-color: #ffffff;
            border-radius: 10px;
            display: flex;
            width: 100%;
            max-width: 900px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .left-section {
            background: linear-gradient(135deg, #0c3b6d, #021a33, #010c17);
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            width: 40%;
        }
        .left-section h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .left-section p {
            font-size: 16px;
        }
        .right-section {
            padding: 40px;
            width: 60%;
        }
        .auth-form {
            width: 100%;
        }
        .auth-form h5 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: normal;
        }
        .btn-google, .btn-apple {
            background-color: #f4f4f4;
            color: black;
            border: none;
            width: 100%;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .btn-google img, .btn-apple img {
            width: 20px;
            margin-right: 10px;
        }
        .btn-google:hover, .btn-apple:hover {
            background-color: #e0e0e0;
        }
        .form-control {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="split-section">
            <!-- Left Section for Greeting Message -->
            <div class="left-section">
                <h1>Welcome Back!</h1>
                <p>Login or Register to continue</p>
            </div>

            <!-- Right Section for Forms -->
            <div class="right-section">
                <ul class="nav nav-tabs" id="authTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Register</button>
                    </li>
                </ul>
                <div class="tab-content auth-form" id="authTabsContent">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel">
                        <h5>Login</h5>
                        <form method="POST" action="{{ route('login') }}">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                            <!-- Social Login Buttons -->
                            <button class="btn btn-google">
                                <img src="./images/google.webp" alt="Google Icon">Login with Google
                            </button>
                            <button class="btn btn-apple">
                                <img src="./images/apple.png" alt="Apple Icon">Login with Apple
                            </button>
                        </form>
                    </div>

                    <!-- Registration Form -->
                    <div class="tab-pane fade" id="register" role="tabpanel">
                        <h5>Register</h5>
                        <form method="POST" action="{{ route('register') }}">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100 mb-2">Register</button>
                            <!-- Social Register Buttons -->
                            <button class="btn btn-google">
                                <img src="google-icon.png" alt="Google Icon">Register with Google
                            </button>
                            <button class="btn btn-apple">
                                <img src="apple-icon.png" alt="Apple Icon">Register with Apple
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
