<?php
    ini_set('display_errors', 1); // 0 = uit, 1 = aan
    error_reporting(E_ALL);
    session_start();
require_once 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['username'])) {
        if (isset($_POST['password'])) {
                try {
                    //sql
                    $Database = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
                    $Database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $usersql = "SELECT *
                            FROM login
                            WHERE username = :username
                            AND password = :password";
                    $db = $Database;
                    $statement = $db->prepare($usersql);
                    $statement->bindParam(':username', $_POST['username']);
                    $statement->bindParam(':password', $_POST['password']);
                    $statement->execute();
                    ;
                    var_dump($user);
                    if ($user = $statement->fetch() > 0) {
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['password'] = $_POST['password'];
                        header("Location: index.php");
                    } else {
                        $message = 'invalid username/password. Please try again';
                        header("Location: index.php");
                    }
                }catch(PDOException $e){
                  echo "Error: " . $e->getMessage();
                }
            }
    }
}

?>