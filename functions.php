<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  
    function postContactName() {
        global $name;
        echo $name;
    }
    function print_names() {
        global $users;
        echo "
            <h3>Here are a list of all the names of the users.</h3>
            <ul>
            ";
            foreach($users as $user) 
            {
              echo        "<li>$user[first_name]</li>";
            }
            echo     "</ul>";
    }
    function allWork() {
        global $license;
        foreach($license as $lis)
        {
            echo "<p class='all-work'>all work © $lis[full_name] $lis[year_start]-$lis[year_current] • all rights reserved</p>";
        }
    }
   
?>