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
    <link rel="stylesheet" href="./assets/styles/post-contact-styles.css">
    <script src="./jQuery-post-contact.js"></script>
    <title>Loading...</title>
</head>
<body>
    <div class="body-block">
        <div class="code-block">
            <div id="headers-low">
                <div><h3 id="h3-0" class="ryan"><code>...</code></h3></div>
                <div><h3 id="h3-1"><code>Inserting methods and implementations...</code></h3></div>
                <div><h3 id="h3-2"><code>Creating correct algoritm structure...</code></h3></div>
                <div><h3 id="h3-3"><code>Documenting latest work flows...</code></h3></div>
                <div><h3 id="h3-4"><code>Downloading latest systems specifics...</code></h3></div>
                <div><h3 id="h3-5"><code>Protecting system from critical injection...</code></h3></div>
                <div><h3 id="h3-6"><code>Overiding background flush terminal...</code></h3></div>
                <div><h3 id="h3-7"><code>PHP code detected...</code></h3></div>
                <div><h3 id="h3-8"><code>Searching database for best configuration...</code></h3></div>
                <div><h3 id="h3-9" ><code>Best configuration found!</code></h3></div>
                <div><h3 id="h3-10" ><code>Implementing schemas and protocols...</code></h3></div>
                <div><h3 id="h3-11" ><code>Connecting to workbench...</code></h3></div>
                <div><h3 id="h3-12" ><code>Connection success! Logging in now...</code></h3></div>
                <div><h3 id="h3-13" ><code>Welcome <b><?php postContactName(); ?></b>!</code></h3></div>
                <div><h3 id="h3-14" ><code>Now logged into MySQL workbench</code></h3></div>
                <div><h3 id="h3-15" ><code>Connecting to database heroku_e555971502714</code></h3></div>
                <div><h3 id="h3-16" ><code>Preparing insert statement for pdo execution...</code></h3></div>
                <div><h3 id="h3-17" ><code>pdo variables set...</code></h3></div>
                <div><h3 id="h3-18" ><code>injection checks complete...</code></h3></div>
                <div><h3 id="h3-19" ><code>loading...</code></h3></div>
                <div><h3 id="h3-20" ><code>loading...</code></h3></div>
                <div><h3 id="h3-21" ><code>loading...</code></h3></div>
                <div><h3 id="h3-22" ><code>loading...</code></h3></div>
                <div><h3 id="h3-23" ><code>Content successfully delivered...</code></h3></div>
                <div><h3 id="h3-24" ><code>Redirecting...</code></h3></div>
            </div>
        </div>
    </div>
    
    <?php 
        allWork();
    ?>
</body>    
</html>