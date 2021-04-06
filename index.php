<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'db/db.php';
    require_once 'functions.php';
    $users = [];
    $pdo = db_connect();
    getUsers();
    
?>
<head>
    <meta charset="utf-8">
    <title>RyanCollicutt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/keyframes.css">
    <!-- <link rel="stylesheet" media="screen and (max-device-width: 750px)" href="/assets/style/media.css"> -->
    <script src="./jQuery.js"></script>
  </head>
<body>
    <div class="header-wrap">
        <header>
            <div class="image1">
                <a href="#" class="img">
                    <img src="./assets/fswdrcl.png">
                </a>
            </div>
            <div class="image2">
                <a href="#" class="img">
                    <img src="./assets/comp3.gif">
                </a>
            </div>
        </header>
        <nav class="navbar">
            <a href="about.php" class="about"><p>ABOUT</p></a>
            <a href="#" class="projects"><p class="navpa">
                PROJECTS
                <div class="insert" id="p">
                    <div class="abouthover">
                        <ul>
                            <li>
                                one
                            </li>
                            <li>
                                two
                            </li>
                            <li>
                                three
                            </li>
                        </ul>
                    </div>
                </div>
            </p></a>
            
            <a href="#" class="goals"><p>GOALS</p></a>
            <a href="#" class="interests"><p class="navpi">
                INTERESTS
                <div class="insert" id="i">
                    <div class="interestshover">
                        <ul>
                            <li>
                                one
                            </li>
                            <li>
                                two
                            </li>
                            <li>
                                three
                            </li>
                        </ul>
                    </div>
                </div>
            </p></a>
            <a href="contact.php" class="contact"><p>CONTACT</p></a>
        </nav>
        
        
        
    </div>
    <div class="main-wrap">
        <main>
            <div class="photo-wrap">
                    <div class="photo">
                        <div class="left-arrow"></div>
                        <div class="main-img">
                            <img class="big-img" src="./assets/my-pics/20.png">
                        </div>
                        <div class="right-arrow">
                            <div class="arrow-boxr"></div>
                        </div>
                    </div>
                    <div class="photos">
                        <div id="pho" class="photo1">
                            <a href="#"><img class="img1" src="./assets/my-pics/20.png"></a>
                        </div>
                        <div id="pho" class="photo2">
                            <a href="#"><img class="img2" src="./assets/my-pics/21.png"></a>
                        </div>
                        <div id="pho" class="photo3">
                            <a href="#"><img class="img3" src="./assets/my-pics/22.png"></a>
                        </div>
                        <div id="pho" class="photo4">
                            <a href="#"><img class="img4" src="./assets/my-pics/23.png"></a>
                        </div>
                        <div id="pho" class="photo5">
                            <a href="#"><img class="img5" src="./assets/my-pics/24.png"></a>
                        </div>
                    </div>
            </div>
            <?php 
                // print_names();
            ?>
        </main>
    </div>
</body>
</html>