<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <?php topBar()?>
    <main>
        <?php
            $userAge = 18; 
            $isFemale = true; 
            $recentlyVisited = true; 
            if ($userAge < 18 && $isFemale && $recentlyVisited) {
                echo "<p style='color: red;'>Error: You do not meet the conditions for this offer.</p>";
            }
            else{
                if ($userAge < 18) {
                    echo "<h1>Welcome to the Children's Section</h1>";
                }
                
                if ($isFemale) {
                    echo "<p>Join us for the Lady's Night event starting soon!</p>";
                }

                if ($recentlyVisited) {
                    echo "<p>Enjoy a special discount for your recent visit!</p>";
                }
            }
        ?>
    </main>
    <?php footerGen()?>
</body>
</html>
