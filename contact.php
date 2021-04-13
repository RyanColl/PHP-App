<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'db/db.php';
    require_once 'functions.php';
    $users = [];
    $license = [];
    $pdo = db_connect();
    getLicenseData();
    handleContactForm(); 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/keyframes.css">
    <script src="./jQuery.js"></script>
    <title>Contact Me!</title>
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
            <a href="about.php" class="about"><p class="nava">ABOUT</p></a>
            <a href="#" class="github"><p class="navpa">GITHUB
                <div class="git-card">
                    <div class='github-card' data-github='RyanColl' data-width='400' data-height='317' data-theme='medium'></div>
                    <script src='//cdn.jsdelivr.net/github-cards/latest/widget.js'></script>
                </div>
            </p></a>
            <a href="interests.php" class="interests"><p class="navpi">INTERESTS</p></a>
            <a href="contact.php" class="contact"><p class="navc" style="color: rgb(153, 153, 153)">CONTACT</p></a>
        </nav>
    </div>
    <div class="body-wrap-contact">
        <div class="headers-contact">
            <h1>Have something you'd like to discuss? <br>UX, web design or full-stack connection request?<br>Just here to say hello? Let's chat.</h1>
        </div>
        <form id="contact-form" method="POST" action="post-contact.php" class="contact-form">
            <fieldset id="fs-name">
                <div class="div-form-name">
                    <legend id="leg-name">Name *</legend>
                    <div class="name-inputs">
                        <label id="fn-label" for="first_name">
                        <input type="text" name="first_name" id="first_name" required>
                        <p class="fn">First Name</p></label>
                        <label id="ln-label" for="last_name">
                        <input type="text" name="last_name" id="last_name" required>
                        <p class="ln">Last Name</p></label>
                    </div>
                </div>               
            </fieldset>
            <div class="div-form-email">
                <label for="email" class="email">Email *</label>    
                <input type="text" name="email" id="email" required>
            </div>
            <div class="div-form-subject">
                <label for="subject" class="subject">Subject *</label>
                <input type="text" name="subject" id="subject" required>
            </div>
            <div class="div-form-msg">
                <label for="msg" class="msg">Message *</label>
                <textarea name="msg" id="msg" cols="90" rows="10" class="msg" required></textarea>
            </div>
            <div class="button-form-submit">
                <input id="submit" type="submit" class="button" value="submit">
            </div>
        </form>
    </div>
    <?php 
        // footer();
        allWork();
    ?>
</body>
</html>