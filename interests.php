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
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/keyframes.css">
    <link rel="stylesheet" href="./assets/styles/contact-styles.css">
    <script src="./jQuery-interests.js"></script>
    <title>My Interests!</title>
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
            <a href="#" class="projects"><p class="navpa">
                PROJECTS
                <div class="insert" id="p">
                    <div class="projects-hover">
                        <ul>
                            <a href="#"><li>
                                GitHub
                            </li></a>
                            <li><b class="lines">&nbsp||&nbsp</b></li>
                            <a href="#"><li>
                                LinkedIn
                            </li></a>
                        </ul>
                    </div>
                </div>
            </p></a>
            <a href="interests.php" class="interests"><p class="navpi">INTERESTS</p></a>
            <a href="contact.php" class="contact"><p class="navc">CONTACT</p></a>
        </nav>
    </div>
    <div class="body-wrap-interests">
        <div class="code-block">
            <div id="headers-low">
                <div><h3 id="h3-1" class="ryan"><code><b class="i">function</b> <b class="y">hi_Im_Ryan</b>() {</code></h3></div>
                <div><h3 id="h3-2"><code>&nbsp&nbsp<b class="b">var</b> <b class="p">fullStack</b> = ["<b class="r">Me</b>"];</code></h3></div>
                <div><h3 id="h3-3"><code>&nbsp&nbsp<b class="i">while</b>(<b class="p">fullStack</b>) { </code></h3></div>
                <div><h3 id="h3-4"><code>&nbsp&nbsp&nbsp&nbsp<b class="p">fullStack</b>.<b class="y">push</b>("<b class="r">toPrototype</b>");</code></h3></div>
                <div><h3 id="h3-5"><code>&nbsp&nbsp}</code></h3></div>
                <div><h3 id="h3-6"><code>&nbsp&nbsp<b class="i">if</b>(<b class="p">you</b>.<b class="y">interested</b>() == <b class="b">true</b>) {</code></h3></div>
                <div><h3 id="h3-7"><code>&nbsp&nbsp&nbsp&nbsp<b class="p">console</b>.<b class="y">log</b>(<a href="contact.php"><b class="u">contactMe</b></a>);</code></h3></div>
                <div><h3 id="h3-8"><code>&nbsp&nbsp} // Enjoy!</code></h3></div>
                <div><h3 id="h3-9"><code>}</code></h3></div>
            </div>
        </div>
            <div class="photo-wrap-interests">
                    <div class="photo">
                        <div class="left-arrow">
                            <a id="a-left" href="#">
                                <div class="arrow-boxl">                               
                                    <div class="arrowl"></div>
                                </div>
                            </a>    
                        </div>
                        <div class="main-img">
                            <img class="big-img" src="./assets/my-pics/25.png">
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
                            <a href="#"><img class="img1" src="./assets/my-pics/25.png"></a>
                        </div>
                        <div id="pho" class="photo2">
                            <a href="#"><img class="img2" src="./assets/my-pics/26.png"></a>
                        </div>
                        <div id="pho" class="photo3">
                            <a href="#"><img class="img3" src="./assets/my-pics/27.png"></a>
                        </div>
                        <div id="pho" class="photo4">
                            <a href="#"><img class="img4" src="./assets/my-pics/28.png"></a>
                        </div>
                    </div>
            </div>
    </div>
    <?php 
        allWork();
    ?>
</body>
</html>