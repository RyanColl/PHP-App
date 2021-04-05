<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// global array of posts, to be fetched from database
$comments = [];
// global array of unique commenter email addresses to be fetched from db
$commenters = [];



require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';

//connect to database: PHP Data object representing Database connection
$pdo = db_connect();
// submit comment to database
handle_form_submission();


// Get comments from database
get_comments();
// Get commenters from database
get_commenters();

// include the template to display the page
include 'templates/index1.php';
