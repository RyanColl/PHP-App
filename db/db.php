<?php
// Define the constants for host, dbname, username and password
define('DBHOST', 'us-cdbr-east-03.cleardb.com');
define('DBNAME', 'heroku_e555971502714fb');
define('DBUSER', 'b14be9f5ec37a4');
define('DBPASS', '5669a6f6');

function db_connect() {

    try {
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

    

function getUsers() {
    global $pdo;
    global $users;
    $sql = "SELECT * FROM users ORDER BY first_name";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
        array_push($users, $row);  
    }
}

function getLicenseData() {
    global $pdo;
    global $license;
    $sql = "SELECT * FROM license";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
      array_push($license, $row);  
  }
} 
  function handleContactForm() {
    global $pdo;
    global $name;
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if(isset($_POST['first_name']) && isset($_POST['last_name']) &&isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['msg'])) 
      {
        $name = $_POST['first_name'];
        $sql = "INSERT INTO heroku_e555971502714fb.contact (first_name, last_name, email, subject, message) VALUES (:first_name, :last_name, :email, :subject, :msg)";
        $stmnt = $pdo->prepare($sql);
        $stmnt->bindValue(':first_name', $_POST['first_name']);
        $stmnt->bindValue(':last_name', $_POST['last_name']);
        $stmnt->bindValue(':email', $_POST['email']);
        $stmnt->bindValue(':subject', $_POST['subject']);
        $stmnt->bindValue(':msg', $_POST['msg']);
        $stmnt->execute();
      }
    }
  }


 ?>