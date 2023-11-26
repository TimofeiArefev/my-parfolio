<?php
    require_once 'templates.php';
    sessionMy();
?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2-Part Form</title>
        <link rel="stylesheet" href="./style/style.css">
        <?php
        



        function isValidEmail($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        $showContactForm = true;
        $errorFlag = false;
        $redFlag = false;
        $errors = array();
        $name;
        $email; 
        $qType; 
        $message;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $showContactForm = false;
            $name = filter_input(INPUT_POST, "name");
            $email = filter_input(INPUT_POST, "email");
            $qType = filter_input(INPUT_POST, "qType");
            $message = filter_input(INPUT_POST, "message");



            if(empty($name) ){
                $errorFlag = true;
                array_push($errors, "Please provide your first name");
            }
            
            if(empty($email) ){
                $errorFlag = true;
                array_push($errors, "Please provide email");
            }

            if(empty($qType)){
                $errorFlag = true;
                array_push($errors, "An error occurred, please try again");
            }

            if(!$errorFlag){
                if(strlen($name) < 3){
                    $errorFlag = true;
                    array_push($errors, "Please provide longer name");
                }
                if(!isValidEmail($email)){
                    $errorFlag = true;
                    array_push($errors, "Please provide valid email");
                }
                if( count(explode(" ", $message)) < 6){
                    $errorFlag = true;
                    array_push($errors, "Please provide message with more than 6 words");
                }
                if(!$errorFlag){
                    array_push( $_SESSION["comment"] ,"Dear  $name ,<br>
                    You will post comments as $qType with the following e-mail address: $email.<br>
                    The comment is as follows: $message.<br>
                    All users will be notified of this.");
                }
            }

        }  

        ?>  
    </head>

    <body>
        <?php topBar()?>
        <main>
            <h1 class="center">Leave your comment</h1>

            
            <form class="center" action="comments.php" method="POST">
                <fieldset>
                    <div class="fieldset__container">  
                        <div class="main__personal-info">
                                <label for="firstname">Name:</label>
                                <input type="text" name="name" id="firstname">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email">
                        </div>
                        <p>
                            <input type="radio" name="qType" value="student" id="student" checked>
                            <label for="basic">Student</label>

                            <input type="radio" name="qType" value="teacher" id="teacher">
                            <label for="sports">Teacher</label>
                        </p>

                        <h3>Your message</h3>
                        <p>
                            <textarea id="message" name="message" rows="4" cols="50" placeholder="Type your message here..."></textarea>
        
                        </p>
                        <div  class="center-button " >
                            <input  type="submit" name="submit" value="submit">
                        </div>
                        <div class="center-button">
                            <input type="reset" name="submit" value="reset">
                        </div>
                    </div>  
                </fieldset>
            </form>

            <?php
            if(!$errorFlag){

                    foreach($_SESSION["comment"] as $comment){
                        echo "<p>".$comment."</p>";
                    }
                    
            }
            else{
                echo '<div class="center">
                        <fieldset class="main__errors">';
                foreach($errors as $error){
                    echo "<p>".$error."</p>";
                }
                echo "</fieldset>
                    </div>";
            }
            ?>
        </main>

        <?php footerGen()?>
    </body>
    
</html>