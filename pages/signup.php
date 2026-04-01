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

    <form action="signupSubmit.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="gender">Gender:
            <label><input type="radio" id="gender" name="gender" value="M" /> <label for="gender">Male</label></label>
            <label><input type="radio" id="gender" name="gender" value="F" checked="checked" /> <label for="gender">Female</label></label>
        </label><br><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>
        <label for="personality">Personality Type:</label><br>
        <input type="text" id="personality" name="personality" required><br><br>
        <label for="os">Favorite Operating System:</label><br>
        <select id="os" name="os" required>
            <option value="">Select an OS</option>
            <option value="Windows">Windows</option>
            <option value="Mac OS X">Mac OS X</option>
            <option value="Linux">Linux</option>
        </select><br><br>
        <label for="seekingAge">Seeking Age Range:</label><br>
        <input type="text" id="seekingAgeMin" name="seekingAgeMin" placeholder="min" required>
        <input type="text" id="seekingAgeMax" name="seekingAgeMax" placeholder="max" required><br><br>

        <input type="submit" value="Sign Up">
    </form>

    <br><br>
    <p><a href="../index.php">Return to Home Page</a></p>
</body>
</html>