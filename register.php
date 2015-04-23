<?php
ini_set('display_errors', 1); // 0 = uit, 1 = aan
error_reporting(E_ALL);
session_start();
require_once 'database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST['email']/*,$_POST["password"], $_POST["firstname"], $_POST["lastname"], $_POST["adress"], $_POST["phonenumber"]*/)){
        try {
            //sql
            $Database = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
            $Database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $registersql = "INSERT INTO users (email,password,firstname,lastname,adress,phonenumber) Values (:email,:password,:firstname,:lastname,:adress,:phonenumber)";
            $db = $Database;
            echo"testerino";
            $statement = $db->prepare($registersql);
            $result = $statement->execute(array(
                ":email"=>$_POST["email"],
                ":password"=>$_POST["password"],
                ":firstname"=>$_POST["firstname"],
                ":lastname"=>$_POST["lastname"],
                ":adress"=>$_POST["adress"],
                ":phonenumber"=>$_POST["phonenumber"],
            ) );
            if ( $result ){
                echo "<p>Thank you. You have been registered</p>";
            } else {
                echo "<p>Sorry, there has been a problem inserting your details. Please try again. you will be redirected in 5 seconds</p>";
                header("Refresh: 5; Location: register.php");
            }
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }

    } else {
        echo"fail";
        header("Location: register.php");
    }
} else {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Coredump is the best!</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <link href="css/default.css" rel="stylesheet">
    <script src="js/login.js"></script>
</head>

<body>
<div id="login_element">
    <nav>
        <ul>
            <li id="login">
                <a id="login-trigger" href="#">
                    Log in <span>▼</span>
                </a>
                <div id="login-content">
                    <?php
                    if (isset($message))
                    {
                        echo $message;
                    }
                    ?>

                    <form method="POST">
                        <fieldset id="inputs">
                            <input id="username" type="email" name="username" placeholder="Email" required>
                            <input id="password" type="password" name="password" placeholder="Wachtwoord" required>
                        </fieldset>
                        <fieldset id="actions">
                            <input type="submit" id="submit" value="Log in">
                            <label><input type="checkbox" checked="checked">Aangemeld blijven</label>
                        </fieldset>
                    </form>
                </div>
            </li>
            <li id="signup">
                <a href="register.php">Registreren</a>
            </li>
        </ul>
    </nav>
</div>
<div id="header">
    <img src="img/header.jpg">
</div>

<div id="menucontainer">
    <div id='cssmenu'>
        <ul>
            <li><a href='index.php'><span>Home</span></a></li>
            <li><a href='#'><span>Producten</span></a></li>
            <li><a href='#'><span>Over ons</span></a></li>
            <li class='last'><a href='#'><span>Contact</span></a></li>
        </ul>
    </div>
    <div id="winkelmand">
        <p>Winkelmand</p>
    </div>
</div>
<div id="content">

    <div id="sidebar">
        <a href="#"><p>Moederborden</p></a>
        <a href="#"><p>SSD's</p></a>
        <a href="#"><p>Videokaarten</p></a>
        <a href="#"><p>Geheugen</p></a>
        <a href="#"><p>Processoren</p></a>
        <a href="#"><p>Rand apparatuur</p></a>
        <a href="#"><p>Kabels</p></a>
        <a href="#"><p>Software</p></a>
        <a href="#"><p>Voedingen</p></a>
        <a href="#"><p>Harddisk intern</p></a>
        <a href="#"><p>Behuizingen</p></a>
        <a href="#"><p>NAS</p></a>


    </div>

    <div id="shop">
        <div id="register">
            <form method="POST">
                <fieldset id="inputs">
                    <input id="email" type="email" name="email" placeholder="Email" required>
                    <input id="password" type="password" name="password" placeholder="Wachtwoord" required>
                    <input id="firstname" type="firstname" name="firstname" placeholder="firstname" required>
                    <input id="lastname" type="lastname" name="lastname" placeholder="lastname" required>
                    <input id="adress" type="adress" name="adress" placeholder="adress" required>
                    <input id="phonenumber" type="phonenumber" name="phonenumber" placeholder="phonenumber" required>
                </fieldset>
                    <br/>
                    <input type="submit" id="submit" value="register">
                </fieldset>
            </form> <?php
            }
            ?>

        </div>
    </div>
</div>


<div id="footer">
    Copyright: CoreDump.
</div>
</body>
</html>