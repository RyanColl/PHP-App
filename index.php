<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'db/db.php';
    require_once 'functions.php';
    $users = [];
    $license = [];
    $name = '';
    $pdo = db_connect();
    getLicenseData();
    handleContactForm();  
?>
<head>
    <meta charset="utf-8">
    <title>RyanCollicutt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> // jquery </script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <link rel="stylesheet" href="./assets/styles/style.css">
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
                <a href="index.php" class="img">
                    <img src="./assets/comp3.gif">
                </a>
            </div>
        </header>
        <nav class="navbar">
            <div class="circle-dashed" display="none">
                <div class="circle__spin">
                    <svg display="none">
                        <circle cx="50%" cy="50%" r="67px"></circle>
                    </svg>
                </div>
            </div>
            <a href="about.php" class="about"><p class="nava">ABOUT</p></a>
            <a href="#" class="github"><p class="navpa">GITHUB
                <div class="git-card">
                    <div class='github-card' data-github='RyanColl' data-width='400' data-height='317' data-theme='medium'></div>
                    <script src='//cdn.jsdelivr.net/github-cards/latest/widget.js'></script>
                </div>
            </p></a>
            <a href="interests.php" class="interests"><p class="navpi">INTERESTS</p></a>
            <a href="contact.php" class="contact"><p class="navc">CONTACT</p></a>
        </nav>
    </div>
    <h1 class="me" id="hello">Hi, I'm Ryan!</h1>
    <h1 class="me" id="like">I like building prototypes and meeting new people.</h1>
    <div class="main-wrap">
        <main>
            <div class="photo-wrap">
                    <div class="photo">
                        <div class="left-arrow">
                            <a id="a-left" href="#">
                                <div class="arrow-boxl">                               
                                    <div class="arrowl"></div>
                                </div>
                            </a>    
                        </div>
                        <div class="main-img">
                            <img class="big-img" src="./assets/my-pics/20.png">
                        </div>
                        <div class="right-arrow">
                            <a id="a-right" href="#">
                                <div class="arrow-boxr">                               
                                    <div class="arrowr"></div>
                                </div>
                            </a>                          
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
                allWork();
            ?>
        </main>
    </div>
</body>
</html>