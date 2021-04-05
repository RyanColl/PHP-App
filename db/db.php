<?php
// Define the constants for host, dbname, username and password
define('DBHOST', 'us-cdbr-east-03.cleardb.com');
define('DBNAME', 'heroku_e555971502714fb');
define('DBUSER', 'b14be9f5ec37a4');
define('DBPASS', '5669a6f6');

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



function getNames() {
    global $pdo;
    global $names;
    if($pdo) {
        $sql = "SELECT first_name FROM users ORDER BY first_name";
        $result = $pdo->query($sql);
        while ($row = $result->fetch()) {
                array_push($names, $row);  
        }
    }
}
 ?>