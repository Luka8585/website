<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="name"></label>
        <input type="text" name="name" id="name" pattern="[\p{L}]+(\s[\p{L}]+)*" title="Only letters and spaces are allowed" placeholder="Enter your name" required>

        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>

        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>

        <label for="confirm_password"></label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>

        <label for="photo"></label>
        <input type="file" name="photo" id="photo" accept="image/*">

        <input type="submit" value="register">

        <p>Already have an account? <a href="./login.php">Login here</a></p>
    </form>
</body>
</html>