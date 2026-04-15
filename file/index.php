<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H.K inc</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            background-image: url('clean.jpg'); 
            background-size: cover;
            background-position: center;
            padding-bottom: 60px;
        }
        .border {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .left-border {
            left: 0;
        }
        .right-border {
            right: 0;
        }
        .content {
            z-index: 2;
            width: 100%;
            max-width: 1200px;
            background-color: rgba(248, 248, 248, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 98%;
            padding: 10px 20px;
            background-color: rgba(248, 248, 248, 0.5);
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .logo {
            height: 50px;
        }
        .brand-name {
            flex-grow: 1;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            color: #333;
            text-shadow: 2px 2px 0 #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
        }
        .menu {
            display: flex;
            justify-content: center;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .menu a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
        .slideshow-container {
            width: 100%;
            max-width: 1200px;
            position: relative;
            margin: auto;
            overflow: hidden;
            border: 2px solid #ccc;
            border-radius: 10px;
            height: 500px;
            margin-bottom: 20px;
        }
        .slides {
            display: none;
            height: 100%;
            position: absolute;
            width: 100%;
            transition: opacity 1s ease-in-out;
        }
        .active {
            display: block;
            opacity: 1;
        }
        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        .input-section {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
            background-color: rgba(248, 248, 248, 0.8);
        }
        .input-section input {
            width: calc(50% - 20px);
            padding: 10px;
            margin: 5px 10px;
            box-sizing: border-box;
        }
        .footer {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="border left-border"></div>
    <div class="border right-border"></div>
    <div class="content">
        <div class="header">
            <img src="logo.png" id="hk" alt="Logo" class="logo">
            <div class="brand-name" id="me">H.K Incorporated</div>
            <div id="name">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "Welcome, " . $_SESSION['username'];
                }
                ?>
            </div>
        </div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="services.php">Services</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>
        
        <div class="slideshow-container">
            <div class="slides active">
                <img src="electronic.png" alt="Accessory 1">
            </div>
            <div class="slides">
                <img src="books.jpg" alt="Accessory 2">
            </div>
            <div class="slides">
                <img src="beauty.jpg" alt="Accessory 3">
            </div>
            <div class="slides">
                <img src="fashion.png" alt="Accessory 4">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="input-section">
            <h2>Contact Us</h2>
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email">
        </div>
    </div>
    <div class="footer">
        &copy; 2024 HK Incorporated. All rights reserved.
    </div>
    <script>
        let slideIndex = 0;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("slides");
            if (n >= slides.length) {slideIndex = 0}
            if (n < 0) {slideIndex = slides.length - 1}
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active');
            }
            slides[slideIndex].classList.add('active');
        }
    </script>
</body>
</html>
