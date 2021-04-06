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
            <a href="#" class="contact"><p>CONTACT</p></a>
        </nav>
        <div class="code-block">
            <div id="headers-low">
                <div><h3 id="h3-1" class="ryan"><code><b class="i">function</b> <b class="y">hi_Im_Ryan</b>() {</code></h3></div>
                <div><h3 id="h3-2"><code>&nbsp<b class="b">var</b> <b class="p">available</b> = ["<b class="r">Me</b>"];</code></h3></div>
                <div><h3 id="h3-3"><code>&nbsp<b class="i">while</b>(<b class="p">available</b>) { </code></h3></div>
                <div><h3 id="h3-4"><code>&nbsp&nbsp&nbsp<b class="p">available</b>.<b class="y">push</b>("<b class="r">toFindAJob</b>");</code></h3></div>
                <div><h3 id="h3-5"><code>&nbsp}</code></h3></div>
                <div><h3 id="h3-6"><code>&nbsp<b class="i">if</b>(<b class="p">you</b>.<b class="y">hiring</b>() == <b class="b">true</b>) {</code></h3></div>
                <div><h3 id="h3-7"><code>&nbsp&nbsp&nbsp<b class="p">console</b>.<b class="y">log</b>(<a href="contact.php"><b class="u">contactMe</b></a>);</code></h3></div>
                <div><h3 id="h3-8"><code>&nbsp}</code></h3></div>
                <div><h3 id="h3-9"><code>}</code></h3></div>
            </div>
        </div>
        
        
    </div>
    <div class="main-wrap">
        <main>
            <div class="photo-wrap">
                    <div class="photo">
                        <div class="left-arrow"></div>
                        <div class="main-img">
                            <img src="./assets/my-pics/20.png">
                        </div>
                        <div class="right-arrow"></div>
                    </div>
                    <div class="photos">

                    </div>
            </div>
            <?php 
                // print_names();
            ?>
        </main>
    </div>
</body>
</html>