<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <div style="margin-top: 10px;">
            <a href="index.php">Back</a> <!-- Back button to index.php -->
            <a href="register.php" style="margin-left: 10px;">Register Now</a> <!-- Register Now button to register.php -->
        </div>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    $isValid = false;

    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(',', $user);
        if ($storedUsername == $username && password_verify($password, $storedPassword)) {
            $isValid = true;
            break;
        }
    }

    if ($isValid) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: home.php');
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>
