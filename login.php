<?php 
require_once __DIR__ . "/config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="./api/auth.php" method="POST">
        <input type="text" name='email'>
        <input type="text" name='password'>
        <button type="submit" name='login-btn'>register</button>
    </form>
    <a href="register.php">register</a>
</body>
</html>