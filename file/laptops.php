<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops - H.K Incorporated</title>
    <link rel="stylesheet" href="header.css">
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
        .genre {
            margin-bottom: 20px;
        }
        .genre h2 {
            margin-top: 0;
        }
        .genre img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .genre img:hover {
            transform: scale(1.05);
        }
        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .image-container a {
            text-decoration: none;
            color: #333;
            text-align: center;
            width: 200px;
            margin: 10px;
            border-radius: 10px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .image-container a:hover {
            transform: scale(1.05);
        }
        .image-container a img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .laptop-info {
            flex-grow: 1;
            font-size: 0.9em;
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
            <div>
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
        
        <div class="content">
            <div class="genre">
                <h2>Laptops</h2>
                <div class="image-container">
                    <a href="dell.html">
                        <img src="dell.jpg" alt="Dell">
                        <div class="laptop-info">
                            <div>Dell XPS 15</div>
                            <div>AED 2,799</div>
                        </div>
                    </a>
                    <a href="macbook.html">
                        <img src="macbook.jpg" alt="MacBook">
                        <div class="laptop-info">
                            <div>MacBook Pro 2024</div>
                            <div>AED 5,999</div>
                        </div>
                    </a>
                    <a href="hp.html">
                        <img src="hp.jpg" alt="HP">
                        <div class="laptop-info">
                            <div>HP Spectre x360</div>
                            <div>AED 1,999</div>
                        </div>
                    </a>
                    <a href="lenovo.html">
                        <img src="lenovo.jpg" alt="Lenovo">
                        <div class="laptop-info">
                            <div>Lenovo ThinkPad X1 Carbon</div>
                            <div>AED 2,499</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 HK Incorporated. All rights reserved.
    </div>
</body>
</html>
