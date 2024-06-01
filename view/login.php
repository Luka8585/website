<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller/controller.php" method="post">
        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="Enter your email">

        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Enter your password">

        <input type="submit" value="login">
        
        <p>Don't have an account? <a href="./register.php">Register here</a></p>
    </form>
</body>
</html>