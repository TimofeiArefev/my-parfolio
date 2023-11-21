<?php
    function sessionMy(){
        session_start();
        if(empty($_SESSION["comment"])){
            $_SESSION["comment"] = array();
        }
    }
    function topBar(){
        echo
        '<header>
            <div class="links">
                <a class=""color-white" href="./mainPage.php">Home</a>
                <p>Portfolio</p>
                <a href="./socials.php">About</a>
                <a href="./comments.php">Comment</a>
                <a href="./contactForm.php">Contact</a>
                <a href="./myphp.php">PHP</a>
            </div>
        </header>';
    }
    function footerGen(){
        echo '    
    <footer >
        <div class="center">
            <p class="center">&copy 2023 Timofei Arefev</p>
        </div>
    </footer>';
    }

?>