<?php
	class Database {
	private $db;
		function Connect(){
			try {
				$this->$db = new PDO("mysql:host=localhost;dbname=coredump","root","");
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				catch (PDOException $e)
				{
				    $message = $e->getMessage();
				}

		}
	}