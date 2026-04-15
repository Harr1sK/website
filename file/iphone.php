<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone - H.K Incorporated</title>
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
        .details {
            margin-bottom: 20px;
        }
        .details img {
            width: 300px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            margin: 10px;
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
                session_start();
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
            <div class="details">
                <h2>iPhone 15 Pro</h2>
                <img src="iphone.png" alt="iPhone">
                <p>Description: The iPhone is a line of smartphones designed and marketed by Apple Inc. It uses Apple's iOS mobile operating system.</p>
                <p>Specifications:</p>
                <ul>
                    <li>Display: 6.1-inch Liquid Retina HD display</li>
                    <li>Camera: Dual 12MP Ultra Wide and Wide cameras</li>
                    <li>Battery Life: Up to 17 hours of talk time</li>
                    <li>Storage: 64GB, 128GB, 256GB</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 HK Incorporated. All rights reserved.
    </div>
</body>
</html>
