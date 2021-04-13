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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/about-styles.css">
    <!-- <link rel="stylesheet" media="screen and (max-device-width: 750px)" href="/assets/style/media.css"> -->
    <script src="./jQuery.js"></script>
</head>
<body>
<div class="header-wrap">
        <header>
            <div class="image1">
                <a href="index.php" class="img">
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
            <a href="about.php" class="about"><p class="nava" style="color: rgb(153, 153, 153)">ABOUT</p></a>
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
    <main class="main-wrap-about">
        <div class="about-image">
            <img src="./assets/me.png" alt="" class="about-me">
        </div>
        <div class="about-bio">
            <h1>About Ryan</h1>
            <p>
                I don’t fit into most boxes. I’m both creative and tech-minded, but have one of the most people-focused attitudes you've ever seen. Thats what makes me a Full Stack Developer, not a programmer.
                As an inspirationist, I love helping others grow and do their best work. On top of my 9-5, I am a full-time boyfriend, gamer, and cook. Much of my inspiration comes from my life experience; I
                tend to cover topics about habit building, community balance, personal development, and share the things I think would be helpful to others.  Beyond that, I’m probably spending time with family 
                and friends, driving, listening to podcasts, or tinkering on my next side project. 
            </p>
        </div>
        
    </main>
    <?php 
        allWork();
    ?>
</body>
</html>