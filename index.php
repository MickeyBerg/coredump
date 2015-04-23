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

            <?php
            include("sidebar.php")
            ?>

            <?php

            include("shop.php")
            ?>
        <div id="footer">
            Copyright: CoreDump.
        </div>
    </body>
</html>