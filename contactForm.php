<!DOCTYPE html>
<html lang="en">
<?php require_once 'templates.php'?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2-Part Form</title>
        <link rel="stylesheet" href="./style/style.css">
    </head>

    <body>
        <?php topBar()?>
        <main>
            <h1 class="center">Contact Me</h1>
            <!--
                Everything outside of the form tag, will not be passed as information
            -->
            <form class="center" action="successPage.php" method="POST">
                <fieldset>
                    <div class="fieldset__container">  
                        <h3>Personal Information</h3>
                        <div class="main__personal-info">
            
                                <label for="firstname">First name:</label>
                                <input type="text" name="fname" id="firstname">

                                <label for="lastname">Last name:</label>
                                <input type="text" name="lname" id="lastname">

                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email">
                                
                                <label for="age">Age:</label>
                                <div>
                                    <select name="age" id="age">
                                        <option value="25">16-25</option>
                                        <option value="35">26-35</option>
                                        <option value="45">36-45</option>
                                        <option value="55">46-55</option>
                                    </select>
                                </div>
                        </div>
                        <!--Radio Buttons/ Question Type-->
                        <h3>Question Type</h3>
                        <p>
                            <input type="radio" name="qType" value="basic" id="basic" checked>
                            <label for="basic">General Question</label>
                        </p>
                        <p>
                            <input type="radio" name="qType" value="sports" id="sports">
                            <label for="sports">Business Question</label>
                        </p>
                        <p>
                            <input type="radio" name="qType" value="elite" id="elite" >
                            <label for="elite">Programmming Question</label>
                        </p>

                        <!--Checkboxes-->
                        <h3>Favorite Sports</h3>
                        <p>
                            <input type="checkbox" name="favsport[]" value="f-ball" id="football">
                            <label for="football">Football</label>
                        </p>
                        <p>
                            <input type="checkbox" name="favsport[]" value="tennis" id="tennis">
                            <label for="tennis">Tennis</label>
                        </p>
                        <p>
                            <input type="checkbox" name="favsport[]" value="chess" id="chess">
                            <label for="chess">Chess</label>
                        </p>
                        <p>
                            <input type="checkbox" name="favsport[]" value="b-ball" id="basketball">
                            <label for="basketball">Basketball</label>
                        </p>
                        <p>
                            <input type="checkbox" name="favsport[]" value="LOL" id="League of Legends">
                            <label for="League of Legends">League of Legends</label>
                        </p>

                        <h3>Your message</h3>
                        <p>
                            <textarea id="message" name="message" rows="4" cols="50" style="width: 324px; height: 66px;" placeholder="Type your message here..."></textarea>
        
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
        </main>

        <?php footerGen()?>
    </body>
    
</html>