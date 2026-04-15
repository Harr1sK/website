<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Name Website</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            background-color: #f8f8f8;
        }
        .logo {
            height: 50px;
        }
        .brand-name {
            flex-grow: 1;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .menu {
            display: flex;
            justify-content: center;
            width: 100%;
            background-color: #333;
            overflow: hidden;
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
        }
        .slides {
            display: none;
        }
        .slides img {
            width: 100%;
            height: auto;
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
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        .content {
            padding: 20px;
            width: 100%;
            max-width: 1200px;
        }
        .genre {
            margin-bottom: 20px;
        }
        .genre h2 {
            margin-top: 0;
        }
        .input-section {
            margin-top: 40px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            max-width: 600px;
        }
        .input-section input {
            width: calc(50% - 20px);
            padding: 10px;
            margin: 5px 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="hk.jpeg" id="hk" alt="Logo" class="logo">
        <div class="brand-name">H.K Incorporated</div>
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
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
    
    <div class="slideshow-container">
        <div class="slides">
            <img src="accessory1.jpg" alt="Accessory 1">
        </div>
        <div class="slides">
            <img src="accessory2.jpg" alt="Accessory 2">
        </div>
        <div class="slides">
            <img src="accessory3.jpg" alt="Accessory 3">
        </div>
        <div class="slides">
            <img src="accessory4.jpg" alt="Accessory 4">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    
    <div class="content">
        <div class="genre">
            <h2>Electronics</h2>
            <p>List of items for Electronics...</p>
        </div>
        <div class="genre">
            <h2>Books</h2>
            <p>List of items for Books...</p>
        </div>
        <div class="genre">
            <h2>Beauty Products</h2>
            <p>List of items for Beauty Products...</p>
        </div>
        <div class="genre">
            <h2>Genre 4</h2>
            <p>List of items for genre 4...</p>
        </div>
    </div>
    <div class="input-section">
        <h2>Contact Us</h2>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
    </script>
</body>
</html>
