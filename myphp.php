<?php 
    require_once 'templates.php';
    sessionMy();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <link rel="stylesheet" href="./style/style.css">

    </head>
    <body>
        <?php topBar()?>
        <main>
        <?php
            function kilometersToMiles($kilometer){
                return  $kilometer *  0.6214;
            }
            $kilometer = 10;
            echo "<p>", $kilometer, "KM = ", kilometersToMiles($kilometer), "M<p>" ;
            function func($num){
                if($num < 100){
                    echo "<p>",$num, "  < 100</p>";
                }
                elseif($num  > 100){
                    echo "<p>", $num, "  > 100</p>";
                }
                else{
                    echo "<p>", $num, " = 100</p>";
                }
            }   
            func(20);
        
        ?>
        </main>
        <?php footerGen()?>
        
    </body>
</html>