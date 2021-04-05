<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once 'db/db.php';
    $names = [];
    $pdo = db_connect();
    getNames();

    function print_names() {
        echo "
            <h3>Here are a list of all the names of the users.</h3>
            <ul>
            ";
            foreach($names as $name) 
            {
              echo        "<li>$name</li>";
            }
            echo     "</ul>";
    }
?>