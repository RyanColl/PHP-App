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
            <a href="about.php" class="about"><p class="nava">ABOUT</p></a>
            <a href="#" class="github"><p class="navpa">GITHUB
                <div class="git-card">
                    <div class="github-card" data-github="RyanColl" data-width="400" data-height="150" data-theme="default"></div>
                    <script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
                </div>
            </p></a>
            <a href="interests.php" class="interests"><p class="navpi">INTERESTS</p></a>
            <a href="contact.php" class="contact"><p class="navc">CONTACT</p></a>
        </nav>
    </div>
    <?php 
        allWork();
    ?>
</body>
</html>