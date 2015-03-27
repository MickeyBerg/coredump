<?php
    ini_set('display_errors', 1); // 0 = uit, 1 = aan
    error_reporting(E_ALL);
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if (isset($_POST['username']) && trim($_POST['username']) != '' &&
            isset($_POST['password']) && trim($_POST['password']) != '')
	{
		try{
			$db = new PDO("mysql:host=localhost;dbname=coredump","root","");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			//sql
			$checkusers = "
			SELECT usernameid
			FROM login
			WHERE username = :username 
			AND password = :password
			";
			$usercheck = $db->prepare($checkusers);
			$usercheck->execute(array(
				':username' => $_POST['username'],
                ':password' => $_POST['password']));
			$user = $usercheck->fetchAll();

			if (count($user) == 1)
                {
                    //pagina waar naartoe nadat er succesvol is ingelogd
                    header('Location: index.php');
                    die;
                }
                else
                    {
                        $message = 'invalid username/password. Please try again';
                    }
		}
		catch (PDOException $e)
            {
                $message = $e->getMessage();
            }
            $db = NULL;
        }
        
	}
