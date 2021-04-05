<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'db/db.php';
?>
<head>
    <meta charset="utf-8">
    <title>Assignment 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" media="screen and (max-device-width: 750px)" href="media.css">
    <script src="./jQuery2.js"></script>
    <script src="./classes-jq.js"></script>
  </head>
<body>
    <div class="header-wrap">
        <header>
            <div class="image">
                <a href="#" class="img">
                    <img src="./assets/comp3.gif">
                </a>
            </div>
        </header>
        <nav class="navbar">
            <a href="#" class="about"><p>ABOUT</p></a>
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
        <h3>Hi, I’m Ryan!</h3>
        <h3>I like making apps and meeting new people.</h3>
    </div>
    <div class="main-wrap">
        <main>

        </main>
    </div>
</body>
</html>