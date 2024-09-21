<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .contact-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            text-align: center;
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
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: #3498db;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 1rem;
            color: #aaa;
            transition: all 0.3s ease;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label,
        .input-group textarea:focus + label,
        .input-group textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 0.85rem;
            color: #3498db;
            background-color: white;
            padding: 0 5px;
        }

        .input-group textarea {
            height: 120px;
            resize: none;
        }

        .contact-form button {
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #2980b9;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            .tagline {
                font-size: 1rem;
            }

            .contact-form h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="contact-container">
        <h1>Welcome to CommUnity</h1>
        <p class="tagline">Bringing people together to create a better Sri Lanka.</p>

        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="#">
                <div class="input-group">
                    <input type="text" name="name" id="name" placeholder=" " required>
                    <label for="name">Your Name</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder=" " required>
                    <label for="email">Your Email</label>
                </div>
                <div class="input-group">
                    <textarea name="message" id="message" placeholder=" " required></textarea>
                    <label for="message">Your Message</label>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

</body>
</html>
