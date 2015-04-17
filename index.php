<?php
require("database.php");
?>
<!DOCTYPE html>
<html>
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
                    <li class='active'><a href='#'><span>Home</span></a></li>
                    <li><a href='#'><span>Products</span></a></li>
                    <li><a href='#'><span>Company</span></a></li>
                    <li class='last'><a href='#'><span>Contact</span></a></li>
                </ul>
            </div>
            <div id="winkelmand">
                <p>Wikelmandje</p>
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
                <a href="#"><div class="cat_buttons">
                    <img src="img/moederboard.jpg">
                        <p>Moederborden</p>
                </div></a>
                <div class="cat_buttons">
                    <img src="img/ssd.jpg">
                    <p>SSD's</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/processor.jpg">
                    <p>Processoren</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/videokaart.jpg">
                    <p>Videokaarten</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/geheugen.jpg">
                    <p>Laptop/Desktop Geheugen</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/rand.png">
                    <p>Randapparatuur</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/kabel.jpg">
                    <p>Kabels</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/software.jpg">
                    <p>Software</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/voeding.jpg">
                    <p>voedingen</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/intern.jpg">
                    <p>Harddisk intern</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/behuizing.jpg">
                    <p>Behuizingen</p>
                </div>
                <div class="cat_buttons">
                    <img src="img/nas.jpg">
                    <p>NAS</p>
                </div>
            </div>
        </div>

        <div id="footer">
            Copyright: CoreDump.
        </div>
    </body>
</html>