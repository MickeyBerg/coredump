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
                    <form>
                        <fieldset id="inputs">
                            <input id="username" type="email" name="Email" placeholder="Email" required>
                            <input id="password" type="password" name="Password" placeholder="Wachtwoord" required>
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
<div id="content">
    <div id='cssmenu'>
        <ul>
            <li class=''><a href='index.php'><span>Home</span></a></li>
            <li><a href='#'><span>Products</span></a></li>
            <li><a href='#'><span>Company</span></a></li>
            <li class='last'><a href='#'><span>Contact</span></a></li>
        </ul>
    </div>


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
            <p>Aanhef</p>
                <select>
                    <option value="Dhr">Dhr.</option>
                    <option value="Mvr">Mvr.</option>
                </select>
            <p>Voorletters / Tussenv. / Achternaam</p>
                <input id="voor" type="text" name="voor" placeholder="voorletters"><input id="tussen" type="text" name="tussen" placeholder="tussenvoegsel"><input id="achter" type="text" name="achter" placeholder="achternaam">
            <p>Straat / Huisnr</p>
                <input id="straat" type="text" name="straat" placeholder="Straatnaam"><input id="nr" type="text" name="nr" placeholder="Huisnr">
            <p>Postcode / Plaats</p>
                <input id="postcode" type="text" name="postcode" placeholder="Postcode"><input id="plaats" type="text" name="plaats" placeholder="Plaats">
            <p>Land</p>
            <select id="countries" name="countries">
                <option value="select_land">Selecteer Land</option>
                <option value="ned">Nederland</option>
                <option value="bel">Belgie</option>
                <option value="dui">Duitsland</option>
            </select>
            <p>Email adres</p>
                <input id="reg_email" type="text" name="email_reg" placeholder="Email adres" required><br>
            <p>Wachtwoord</p>
                <input id="reg_pass" type="password" name="pass_reg" placeholder="Wachtwoord" required><br>
            <p>Telefoon</p>
                <input id="tel" type="text" name="tel" placeholder="Telefoon nummer"><br>
            <p>Mobiel</p>
            <input id="mob" type="text" name="mob" placeholder="Mobiel Nummer"><br>
            <input type="button" name="registreer" value="Registreer">

        </div>
    </div>
</div>


<div id="footer">
    Copyright: CoreDump.
</div>
</body>
</html>