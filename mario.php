<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'templates.php';
    sessionMy();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/styleMario.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <?php topBar()?>
    <main>
        <div class="main__content">
            <div>
                <?php

                    for( $i = 0; $i < 10; $i ++){
                        echo "*";
                    }
                ?>
            </div>
            <div>
                <?php
                    for( $b = 0; $b < 10; $b ++){

                        for( $i = 0; $i < 10; $i ++){
                            echo "*";
                        }
                        echo "<br>";
                    }
                ?>
                </div>
            <div>

                <?php
                    for( $b = 1; $b < 11; $b ++){

                        for( $i = 0; $i < $b; $i ++){
                            echo "*";
                        }
                        echo "<br>";
                    }
                ?>
            </div>
            <div>
                <?php
                    for( $b = 10; $b > 0; $b --){

                        for( $i = 0; $i < $b; $i ++){
                            echo "*";
                        }
                        echo "<br>";
                    }
                ?>
            </div>
            <div>
                <?php
                    for($i = 0; $i < 6;$i++){
                        for($j = 0; $j <= 10; $j ++){
                            if(  ! ( ( $j <= $i ) or ( $j >= 10 - $i ) )  ){ 
                                echo "*";
                            }
                            else{
                                echo "&ensp;";
                            }

                        }
                        echo "<br>";
                    }
                ?>
            </div>
            <?php
                    for($i = 0; $i < 6;$i++){
                        for($j = 0; $j <= 10; $j ++){
                            if( ( $j <= $i ) or ( $j >= 10 - $i )  ){ 
                                echo "*";
                            }
                            else{
                                echo "&ensp;";
                            }

                        }
                        echo "<br>";
                    }
                ?>
            </div>
        </div>
    </main>
    <?php footerGen()?>
</body>
</html>