<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <?php topBar()?>
    </header>  
    <main>
    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $name = filter_input(INPUT_POST, "fname");
            $lname = filter_input(INPUT_POST, "lname");
            $email = filter_input(INPUT_POST, "email");
            $age = filter_input(INPUT_POST, "age");
            $qType = filter_input(INPUT_POST, "qType");
            $sports = filter_input(INPUT_POST, "favsport", FILTER_DEFAULT ,FILTER_REQUIRE_ARRAY);
            $message = filter_input(INPUT_POST, "message");

            $errorFlag = false;
            $redFlag = false;
            $errors = array();

            if(empty($name)){
                $errorFlag = true;
                array_push($errors, "Please provide your first name");
            }
            if(empty($lname)){
                $errorFlag = true;
                array_push($errors, "Please provide your last name");
            }
            if(empty($qType)){
                $errorFlag = true;
                array_push($errors, "An error occurred, please try again");
            }
            if(empty($age)){
                $errorFlag = true;
                array_push($errors, "An error occurred, please try again");
            }
            if(!empty($sports) && in_array("LOL", $sports)){
                $redFlag = true;              
            }

            if($redFlag){
                echo "<h1>You play League of Legends. Access denied.</h1>";
                echo "<p>We find out that you play League of Legends. From this point on you are not allowed to visit this website. Please return to a Google page. </p>";
                echo '<a href="https://www.google.com/"><button >Go back</button></a>';
            }
            elseif($errorFlag == true){
                echo "<h1>Unfortunately you have an error in you form</h1> <ul>";
                foreach($errors as $error){
                    echo "<p>".$error."</p>";
                }
                echo "</ul>";
                echo '<a href="./contactForm.php"><button >Go back to forms</button></a>';
            }
            else{
                echo "<h1>Congratulations on signing up ".$name. " ". $lname, "</h1>";
                echo "<p>We will definitely write you back in the next 6 years.</p>";
                echo '<p> Your messege was : "', $message, '"</p>';
                echo '<a href="./mainPage.php"><button >Go back</button></a>';
            }

        }  

?>
    </main>
    <?php footerGen()?>
</body>
</html>