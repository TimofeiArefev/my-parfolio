<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website php</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <div class="header__container">
            <div class="header__left-part">
                <img class="header__logo" src=".\img\logo.png" alt="logo">
                <h2 class="header__logo-name font__commodore">Kammaardoor</h2>
            </div>
            <div class="header-right-part">
                <a href="index.html">Home</a>
                <a href="products.html">Products</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </header>
    <main>
        <section class="main__contact-container">
            <div class="main__contact-grid">
                <div>
                <?php

                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                        $name = filter_input(INPUT_POST, "fname");
                        $email = filter_input(INPUT_POST, "email");
                        $subject  = filter_input(INPUT_POST, "subject");
                        $type  = filter_input(INPUT_POST, "type");
                        $yesNo  = filter_input(INPUT_POST, "yes-no");
                        $errorFlag = false;
                        $errors = array();

                        if(empty($name)){
                            $errorFlag = true;
                            array_push($errors, "Please provide your name");
                        }
                        if(empty($email)){
                            $errorFlag = true;
                            array_push($errors, "Please provide your email");
                        }
                        if(empty($subject)){
                            $errorFlag = true;
                            array_push($errors, "Please provide subject");
                        }
                        if(empty($yesNo)){
                            $errorFlag = true;
                            array_push($errors, "Error");
                        }
                        
                       if($errorFlag == true){
                            echo "<h1>Unfortunately you have an error in you form</h1> <ul>";
                            foreach($errors as $error){
                                echo "<p>".$error."</p>";
                            }
                            echo "</ul>";
                            echo '<a href="contact.php"><button class="main__submit">Go back </button></a>';
                        }
                        else{
                            echo "
                            <p>Dear {$name},</p>
                            We have received your {$type} on the subject
                            'A {$subject}'. We will contact you as soon as
                            possible at {$email}.</p>
                            <p> Kind regards,</p>
                            <p>H.T.P Harold</p>
                            <p>Customer Relations Manager</p>
                            ";
                            echo '<img class="main__harold-image-success" src="img\Harold.png" alt="Harold">';

                        }

                    }  
                    else{

                        
                ?>   
                <form class="center" action="contact.php" method="POST">
                    <div class="fieldset__container">  
                        <h1 class="color_red font__commodore">Conatact</h1>

                        <div class="main__conatct-flex">
                            <label for="firstname">Name</label>
                            <input class="main__input main__input-hight-standart" type="text" name="fname" id="firstname">
                        </div>
                        <div class="main__conatct-flex">
                            <label for="email">Email</label>
                            <input class="main__input main__input-hight-standart " type="email" name="email" id="email">
                        </div>
                        <div class="main__conatct-flex">
                            <label for="firstname">Subject</label>
                            <input class="main__input main__input-hight-standart" type="text" name="subject" id="subject">
                        </div>
                        <div class="main__conatct-flex">
                            <label for="type">Type:</label>
                            <select class="main__input main__input-hight-standart" name="type" id="type">
                                <option value="question">Question</option>
                                <option value="praise">Praise</option>
                            </select>
                        </div>
                        <div class="main__conatct-flex">
                            <label  for="message">Message</label>
                            <textarea \id="message" name="message" rows="4" cols="50" class="main__input main__textarea"  ></textarea>
                        </div>
                        
                        <div class="main__conatct-flex">
                            <p>Do you want to receive our newsletter?</p>
                            <p>
                                <input type="radio" name="yes-no" value="yes" id="yes" checked>
                                <label for="yes">Yes</label>
                            </p>
                            <p>
                                <input type="radio" name="yes-no" value="no" id="no">
                                <label for="no">No</label>
                            </p>
                        </div>
                        <input class="main__submit"  type="submit" name="submit" value="Send">

                    </div>  
                </form>
                <?php }?>
                </div>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                </p>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer_container color_white">
            <div class="footer__inf">
                <h1>Contact</h1>
                <p>Somthing</p>
                <p>Somthing</p>
                <p>Somthing</p>
                <p>Somthing</p>
            </div>
            <div class="footer__inf">
                <h1>About us</h1>
                <p>Somthing</p>
                <p>Somthing</p>
                <p>Somthing</p>
                <p>Somthing</p>
            </div>
            <div class="footer__inf">
                <h1>Legal</h1>
                <p>Somthing</p>
                <p>Somthing</p>
                <p>Somthing</p>
                <p>Somthing</p>
            </div>
        </div>
    </footer>
</body>
</html>