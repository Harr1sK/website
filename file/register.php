<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('clouds.jpg'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background for the form */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        .container form {
            display: flex;
            flex-direction: column;
        }
        .container form label {
            text-align: left;
            margin-bottom: 5px;
        }
        .container form input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        .container form button {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .container form button:hover {
            background-color: #555;
        }
        .links {
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }
        .links a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Register</button>
        </form>
        <div class="links">
            <a href="index.php">Back</a> <!-- Back button to index.php -->
            <a href="login.php">Login</a> <!-- Login button to login.php -->
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $file = fopen('users.txt', 'a');
        fwrite($file, "$username,$password\n");
        fclose($file);

        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    }
    ?>
</body>
</html>
