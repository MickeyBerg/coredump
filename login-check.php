<?php 
//check of er is ingelogt
session_start();

if(empty( $_SESSION['login'] )) {
	header("Location: index.php");
} 

