<?php

$name = $_GET['name'];

function getMatches($target) {
    $matches = array();

    $lines = file(__DIR__ . '/all-matches.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $parts = array_map('trim', explode(',', $line));

        if ($parts[0] == $target || $parts[1] == $target) {
            if ($parts[0] == $target) {
                $matches[] = $parts[1];
            } elseif ($parts[1] == $target) {
                $matches[] = $parts[0];
            }
        }
    }

    return array_values(array_unique($matches));
}

function getSingles() {
    $singles = array();
    $lines = file('../data/singles.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts[] = explode(',', $line);
        $singles[] = array(
            'name' => $parts[0],
            'gender' => $parts[1],
            'age' => $parts[2],
            'personality' => $parts[3],
            'os' => $parts[4],
            'seeking_age_min' => $parts[5],
            'seeking_age_max' => $parts[6]
        );
    }
    return $singles;
}

function getUserInfo($name) {
    $lines = file(__DIR__ . '/singles.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $parts = array_map('trim', explode(',', $line));

        if ($parts[0] == $name) {
            return [
                'name' => $parts[0],
                'gender' => $parts[1],
                'age' => $parts[2],
                'personality' => $parts[3],
                'os' => $parts[4],
                'seekingMin' => $parts[5],
                'seekingMax' => $parts[6]
            ];
        }
    }

    return null; 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches for <?php echo $name; ?></title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>


    <h1 id="matchesTitle">Matches for <?php echo $name; ?></h1>
    <ul>
        <?php
            $matchesNames = getMatches($name);
        
            foreach ($matchesNames as $matchName) {
                $user = getUserInfo($matchName);

                if ($user !== null) {
                    echo "<div class='match'>";
                    echo "<div class='match-info'>";
                    echo "<h2>" . htmlspecialchars($user['name']) . "</h2>";
                    echo "<p>Gender: " . htmlspecialchars($user['gender']) . "</p>";
                    echo "<p>Age: " . htmlspecialchars($user['age']) . "</p>";
                    echo "<p>Personality: " . htmlspecialchars($user['personality']) . "</p>";
                    echo "<p>OS: " . htmlspecialchars($user['os']) . "</p>";
                    echo "<p>Seeking Age: " . htmlspecialchars($user['seekingMin']) . " - " . htmlspecialchars($user['seekingMax']) . "</p>";
                    echo "</div>";
                    echo "<div class='match-image'>";
                    if ($user['gender'] == 'M') {
                        echo "<img src='../images/male.png' alt='male profile picture'>";
                    } else {
                        echo "<img src='../images/female.png' alt='female profile picture'>";
                    }
                    echo "</div>";
                    echo "</div><br><br>";
                }
            }
        ?>
    </ul>
    <br><br>
    <p><a href="../index.php">Return to Home Page</a></p>
    
</body>
</html>