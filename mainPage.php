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
    
    <?php topBar()?>
        
    <main>
        <h1>My partfolio</h1>
        <div class="center">
            <div class="projects-grid">
                <a href="./projects/Assignment 1/index.html" class="hover">
                    <div class="project">
                        <div class="project-img">
                            <img class="project-img-size" src="./img/TIA.png" alt="First website">
                        </div>
                    </div>
                    <div class="project-text">
                        <h2 class="center">Tourist information </h2>
                        <p class="center small-text">It was a project indeed</p>
                    </div>
                </a>

                <a href="./projects/painting/index.html"  class="hover">
                    <div class="project">
                        <div class="project-img">
                            <img class="project-img-size" src="./img/painting.png" alt="Second project">
                        </div>
                    </div>
                    <div class="project-text">
                        <h2 class="center">Painting</h2>
                        <p class="center small-text">It was a project indeed</p>
                    </div>
                </a>

                <a href="./projects/my website/index.html"  class="hover">
                    <div class="project ">
                        <div class="project-img black" ><img class="project-img-size" src="./img/logoNHLfull.png" alt=""></div>
                    </div>
                    <div class="project-text">
                        <h2 class="center">NHL Stenden</h2>
                        <p class="center small-text">It was a project indeed</p>
                    </div>
                </a>

                <a href="./projects/my website 2/index.html"  class="hover">
                    <div class="project">
                        <div class="project-img">
                            <img  class="project-img" src="./img/youtube-logo.png" alt="">
                        </div>
                    </div>
                    <div class="project-text">
                        <h2 class="center"> My Youtube </h2>
                        <p class="center small-text">It was a project indeed</p>
                    </div>
                </a>

                <a href="./video.php"  class="hover">
                    <div class="project">
                        <div class="project-img">
                            <img  class="project-img" src="./img/content_06.jpg" alt="">
                        </div>
                    </div>
                    <div class="project-text">
                        <h2 class="center">Video</h2>
                        <p class="center small-text">It was a project indeed</p>
                    </div>
                </a>
                <a href=".\projects\website\index.php"  class="hover">
                    <div class="project">
                        <div class="project-img">
                            <img  class="project-img" src=".\img\Harold.png" alt="">
                        </div>
                    </div>
                    <div class="project-text">
                        <h2 class="center">Super cool website</h2>
                        <p class="center small-text"> yes it is cool</p>
                    </div>
                </a>
                
            </div>
        </div>
    </main>
 <?php footerGen() ?>
</body>
</html>