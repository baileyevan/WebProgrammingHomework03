<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NerdLuv - Sign Up</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h1>NerdLuv - Sign Up</h1>
    <h2>Create a New Account</h2>

    <form action="signup.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <input type="radio" id="gender" name="gender" value="male" required/>
        <label for="gender">Male</label><br>
        <input type="radio" id="gender" name="gender" value="female" required/>
        <label for="gender">Female</label><br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>