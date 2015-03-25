<?php

$user = "admin";
$pass = "admin";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=coredump', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
