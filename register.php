<?php 
require_once __DIR__ . "/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>register</h1>
    <form action="./api/auth.php" method="POST">
        <input type="text" name='firstname'>
        <input type="text" name='lastname'>
        <input type="text" name='email'>
        <input type="text" name='password'>
        <input type="text" name='c_password'>
        <input type="text" name='tel'>
        <button type="submit" name='register-btn'>register</button>
    </form>
    <a href="login.php">login</a>
</body>
</html>