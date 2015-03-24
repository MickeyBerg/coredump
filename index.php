<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        <link href="css/default.css" rel="stylesheet">
    </head>

    <body>
        <div id="header">
            <img src="img/header.jpg">
        </div>
        <div id="content">
            <div id='cssmenu'>
                <ul>
                    <li class='active'><a href='#'><span>Home</span></a></li>
                    <li><a href='#'><span>Products</span></a></li>
                    <li><a href='#'><span>Company</span></a></li>
                    <li class='last'><a href='#'><span>Contact</span></a></li>
                </ul>
            </div>

            <?

            include 'menu.php';

            ?>

            <div id="sidebar">
                <a href="#"><p>Moederborden</p></a>
                <a href="#"><p>SSD's</p></a>
                <a href="#"><p>Videokaarten</p></a>
                <a href="#"><p>Geheugen</p></a>
                <a href="#"><p>Processoren</p></a>
                <a href="#"><p>Rand apparatuur</p></a>
                <a href="#"><p>Kabels</p></a>
                <a href="#"><p>Software</p></a>

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
            </div>
        </div>

        <div id="footer">
            test footer
        </div>
    </body>
</html>