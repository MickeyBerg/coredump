<?php

        $dbhost 	= "localhost";
        $dbname		= "coredump";
        $dbuser		= "root";
        $dbpass		= "";

	// class Database {
	// private $db;
	// 	function Connect(){
	// 		try {
	// 			$this->$db = new PDO("mysql:host=localhost;dbname=coredump","root","");
	// 			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 			}
	// 			catch (PDOException $e)
	// 			{
	// 			    $message = $e->getMessage();
	// 			}

// <<<<<<< HEAD
// =======
// if ($_SERVER["REQUEST_METHOD"] == "POST"){
// 	if (isset($_POST['username']) && trim($_POST['username']) != '' &&
//             isset($_POST['password']) && trim($_POST['password']) != '')
// 	{
// 		try{
// 			$db = new PDO("mysql:host=localhost;dbname=coredump","admin","admin");
// 			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 			//sql
// 			$checkusers = "
// 			SELECT usernameid
// 			FROM login
// 			WHERE username = :username 
// 			AND password = :password
// 			";
// 			$usercheck = $db->prepare($checkusers);
// 			$usercheck->execute(array(
// 				':username' => $_POST['username'],
//                 ':password' => $_POST['password']));
// 			$user = $usercheck->fetchAll();

// 			if (count($user) == 1)
//                 {
//                     //pagina waar naartoe nadat er succesvol is ingelogd
//                     $message = 'Welkom';
//                     header('Location: index.php');

//                     die;
//                 }
//                 else
//                     {
//                         $message = 'invalid username/password. Please try again';
//                     }
// >>>>>>> 5ccc220b0213180ebbfc355ea176b281e9966082
// 		}
// 	}