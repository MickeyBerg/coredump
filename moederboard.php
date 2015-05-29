<?php
require("database.php");
?>
<?php
require_once("login.php")
?>
<!DOCTYPE html>
<html>
<?php //var_dump($_SESSION['username']); ?>
<head>
    <title>Coredump is the best!</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link href="css/default.css" rel="stylesheet">
    <script src="js/login.js"></script>
</head>

<body>
<div id="login_element">
    <?php if(isset($_SESSION['username']) != null){
        echo 'Welcome! ',$_SESSION['username'], '<a href="logout.php"> Logout</a>';
    } else {
        echo '
            <nav>
            <ul>
            <li id="login">
                <a id="login-trigger" href="#">
                    Log in <span>▼</span>
                </a>

                <div id="login-content">
                <p>LOGIN</p>
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

        ';
    }
    ?>
</div>
<div id="header">
    <img src="img/header.jpg">
</div>

<div id="menucontainer">
    <div id='cssmenu'>
        <ul>
            <li class='active'><a href='#'><span>Home</span></a></li>
            <li><a href='#'><span>Producten</span></a></li>
            <li><a href='#'><span>Over ons</span></a></li>
            <li class='last'><a href='#'><span>Contact</span></a></li>
        </ul>
    </div>
    <div id="winkelmand">
        <p>Winkelmandje</p>
    </div>
</div>
<div id="content">

    <div id="sidebar">
        <a href="moederborden.php"><p>Moederborden</p></a>
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
        <?php

        $db = new PDO("mysql:host=localhost;dbname=coredump","root","");

        $sql = "SELECT * FROM producten WHERE head_cat = 'Moederborden'";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="cat_buttons">
                <img style="width: 180px; height: 180px;" src="img/producten/<?php echo $arr['prod_code']; ?>.jpg">
                <p><?php echo $arr['prod_naam']; ?></p>
            </div>

        <?php
        }
        ?>
</div>

<div id="footer">
    Copyright: CoreDump.
</div>
</body>
</html>