<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1 id="naw">Welcome to the Home Page</h1>
        <div class="user-info">
            Logged in as: <?php echo $_SESSION['username']; ?>
        </div>
    </div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="about.html">About</a>
        <a href="services.html">Services</a>
    </div>
    <div class="content">
        <p>This is a protected area of the website.</p>
    </div>
</body>
</html>
