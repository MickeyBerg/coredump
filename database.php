<?php
//connect.php
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=coredump', $user, $pass);
    foreach($dbh->query('SELECT * from login') as $row) {
        print_r($row);
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>