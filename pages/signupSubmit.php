<?php

// Get form data
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$personality = $_POST['personality'];
$os = $_POST['os'];
$seekingAgeMin = $_POST['seekingAgeMin'];
$seekingAgeMax = $_POST['seekingAgeMax'];

$file = __DIR__ . '/singles.txt';

// Create a new line of data to append to the file
$newUser = "$name,$gender,$age,$personality,$os,$seekingAgeMin,$seekingAgeMax\n";
// Append the new user data to the file
if (file_put_contents($file, $newUser, FILE_APPEND) === false) {
    echo "Error writing to file.";
} else {
    echo "User saved successfully!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nerdluv - Successful Sign Up</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h1>Nerdluv - Successful Sign Up</h1>
    <p>Thank you for signing up!</p>

    <p><a href="../index.php">Return to Home Page</a></p>
</body>
</html>