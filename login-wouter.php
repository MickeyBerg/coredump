<?php 
$loginerror1 = "";
$loginerror2 = "";
$loginerror3 = "";

if ( isset( $_POST['submit'] ) ) { //Als de submit knop wordt ingedrukt wordt de onderstaande code uitgevoerd.
	
	//inloggegevens voor de database
	$dbhostname = "localhost";
	$dbusername = "root";
	$dbpassword = ""; // <<<------- Vul hier je database wachtwoord in
	$dbdatabase = "login"; // <<<------- Vul hier je database naam in
	
	//verbinding maken met de database
	mysql_connect("$dbhostname", "$dbusername", "$dbpassword") or die(mysql_error());
	mysql_select_db("$dbdatabase") or die(mysql_error());
	
	//ingevulde velden (gebruikersnaam en wachtwoord) in de variabelen stoppen
	$username = $_POST['username'];
	$password = $_POST['wachtwoord'];
	
	//tabel selecteren en gegevens uit de database halen
	$query = mysql_query("SELECT * FROM login WHERE username = '$username'");
	
	$array = mysql_fetch_array($query);
	
	//gebruikersnaam en wachtwoord verifieren
	if ($username != "" && $password != "") {
		if ($username == $array['username']) {
			if ($password == $array['password']) {
				session_start();
				$_SESSION['login'] = 'true';
				header('Location: index.php');
			} else {
				$loginerror1 = "Wachtwoord onjuist!";
			}
		} else {
			$loginerror2 = "Gebruikersnaam onjuist!";
		}
	} else {
		$loginerror3 = "Geen velden ingevuld!";
	}	
}

?>

<html>
	<body>
		<form id="login" name="login" method="POST">
			<table>
				<tr>
					<td>Gebruikersnaam:</td>
					<td><input type="text" name="username"></td>
					<td><p><?php if ($loginerror2 !="") {echo $loginerror2;}?></p></td>
				</tr>
				<tr>
					<td>Wachtwoord:</td>
					<td><input type="password" name="wachtwoord"></td>
					<td><p><?php if ($loginerror1 !="") {echo $loginerror1;}?></p></td>
				</tr>
				<tr>
					<td><input type="submit" value="Log In" name="submit"></td>
					<td><p><?php if ($loginerror3 != "") {echo $loginerror3;} ?></p></td>
				</tr>
			</table>
		</form>
	</body>
</html>