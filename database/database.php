<?php
require 'config.php';

// Should return a PDO
function db_connect() {

  try {
    // TODO
    // try to open database connection using constants set in config.php
    // return $pdo;
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;
    $pdo = new PDO($connectionString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}

// Handle form submission
function handle_form_submission() {
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // TODO
    if(isset($_POST['email']) && isset($_POST['mood']) && isset($_POST['comment'])) 
    {
      $new_date = date('Y-m-d');
      $sql = 'INSERT INTO comments (email, mood, date, commentText) VALUES (:email, :mood, :date, :commentText)';
      $stmnt = $pdo->prepare($sql);
      $stmnt->bindValue(':email', $_POST['email']);
      $stmnt->bindValue(':mood', $_POST['mood']);
      $stmnt->bindValue(':date', $new_date); 
      $stmnt->bindValue(':commentText', $_POST['comment']);
      $stmnt->execute();
    }
  }
}

// Get all comments from database and store in $comments
function get_comments()
{
  global $pdo;
  global $comments;

  @$email = $_GET['email']; 
  if ($email) {
    $sql = "SELECT * FROM comments WHERE email='$email' ORDER BY ID DESC";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
      array_push($comments, $row);
    }
  } else {
    $sql = "SELECT * FROM comments ORDER BY ID DESC";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
      array_push($comments, $row);
    }
  }
}


// Get unique email addresses and store in $commenters
function get_commenters() {
  global $pdo;
  global $commenters;

  //TODO
  $sql = "SELECT * FROM comments GROUP BY email";
  $result = $pdo->query($sql);
  while ($row = $result->fetch()) {
    array_push($commenters, $row);  
  }
}
