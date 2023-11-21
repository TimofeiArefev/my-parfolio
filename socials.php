<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'templates.php';
    sessionMy();
?>
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socials</title>
    <link rel="stylesheet" href="./style/style.css">

</head>
<body>
    <?php topBar()?>
    <main>
        <div>
            <h1>Not my socials:</h1>
            <?php
            $socialImg = ["facebook.png", "twitter.png", "instagram.png", "linkedin.png"];
            $socialName = ["Facebook", "Twitter", "Instagram", "LinkedIn"];
            $socialURL = ["www.facebook.com", "www.twitter.com", "www.instagram.com", "www.linkedin.com"];
            if(count($socialImg) != count($socialName)  && count($socialImg) != count($socialURL)){
                echo "error";
            }
            else{
                echo '<div class="main__socials">';
                for($i = 0; $i < count($socialImg); $i++ ){
                    echo
                    '<a href="https://',$socialURL[$i],'">
                        <img class="manage-size" src="./img/',$socialImg[$i],'" alt="photo">
                        <p class="color-black">', $socialName[$i], '</p>
                    </a>';
                }
                echo '</div>';
            }

            ?>
            
    </main>
    <?php FooterGen()?>

</body>
</html>