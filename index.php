<!-- index.php -->
<?php
// Start session if needed for future enhancements
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHub - Your Ultimate Book Repository</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Container Styling */
        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            max-width: 800px;
            width: 100%;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }

        /* Site Name Styling */
        .site-name {
            font-size: 3em;
            margin-bottom: 20px;
            font-weight: bold;
            color: #ffcc00;
        }

        /* Creator's Name Styling */
        .creator {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #ccc;
        }

        /* Description Styling */
        .description {
            font-size: 1.1em;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        /* Button Styling */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #ffcc00;
            color: #333;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn:hover {
            background-color: #e6b800;
            color: #fff;
        }

        /* Footer Styling */
        .footer {
            margin-top: 40px;
            font-size: 0.9em;
            color: #aaa;
        }

        /* Responsive Adjustments */
        @media (max-width: 600px) {
            .site-name {
                font-size: 2.5em;
            }

            .description {
                font-size: 1em;
            }

            .btn {
                width: 100%;
                padding: 15px 0;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="site-name">BookHub</div>
        <div class="creator">Created by Mohamed Lassoued</div>
        <div class="description">
            Welcome to <strong>BookHub</strong>, your ultimate repository for a wide variety of books in all formats. Whether you're looking to download your favorite novels, explore new genres, or share your own literary creations, BookHub provides a seamless and secure platform for all your reading needs.
        </div>
        <div class="navigation">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 BookHub. All rights reserved.
    </div>
</body>
</html>
