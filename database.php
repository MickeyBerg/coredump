<?php
<<<<<<< HEAD
//connect.php
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=coredump', $user, $pass);
    foreach($dbh->query('SELECT * from login') as $row) {
        print_r($row);
    }
=======

$user = "admin";
$pass = "admin";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=coredump', $user, $pass);
>>>>>>> a698b705583d1360e038a04f2a01c1046e5376f5
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
