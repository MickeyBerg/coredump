<?php
require_once("login.php")
?>
<!DOCTYPE html>
<html>
<?php //var_dump($_SESSION['username']); ?>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coredump</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/default.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CoreDump</a></img>
        </div>

            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php if(isset($_SESSION['username']) != null){
    echo'<ul class="nav navbar-nav navbar-right"><li> <a>Welkom ',$_SESSION['username'],'</a></li><li class=""> <a href="logout.php"> Logout</a></li> </ul>';
} else {
    echo ' <?php
                if (isset($message))
                {
                    echo $message;
                }
                ?>
                <form class="navbar-form navbar-right" method="POST">
                        <input id="username" type="email" name="username" placeholder="Email" required>
                        <input id="password" type="password" name="password" placeholder="Wachtwoord" required>
                        <input type="submit" id="submit" value="Log in">';} ?>
            </div>




    </div>
</div>
<div class="container">

    <div class="row">

        <div class="col-md-2">
            <div class="list-group">
                <a href="moederbord.php" class="list-group-item">Moederborden</a>
                <a href="ssd.php" class="list-group-item">SSD's</a>
                <a href="#" class="list-group-item">Videokaarten</a>
                <a href="#" class="list-group-item">Geheugen</a>
                <a href="#" class="list-group-item">Processoren</a>
                <a href="#" class="list-group-item">Rand apparatuur</a>
                <a href="#" class="list-group-item">Kabels</a>
                <a href="#" class="list-group-item">Software</a>
                <a href="#" class="list-group-item">Voedingen</a>
                <a href="#" class="list-group-item">Harddisk intern</a>
                <a href="#" class="list-group-item">Behuizingen</a>
                <a href="#" class="list-group-item">NAS</a>
            </div>
        </div>

        <div class="col-md-10">

            <div class="row carousel-holder">

                <div class="col-md-13">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <?php
                $Database = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
                try{
                    $Database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $catsql = "SELECT *
                            FROM producten_categorie";
                    $db = $Database;
                    $statement = $db->prepare($catsql);
                    $statement->execute();
                    $cat = $statement->fetchall();
                    $arrlength = count($cat);
                    for($x = 0; $x < $arrlength; $x++) {
                        $cat_desc = $cat[$x]['Catergorie_desc'];
                        $Categorie = $cat[$x]['Categorie'];
                        $img = $cat[$x]['imglocatie'];
                        ?>
                        <div class="<div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">">
                            <a href="<?php echo $Categorie; ?>.php"><img style="width: 180px; height: 180px;" src="img/<?php echo $Categorie; ?>.jpg">
                                <p><?php echo $Categorie; ?></p>
                            </div>
                        </div>
                    <?php
                    }

                }catch(PDOException $e){
                    echo "Error: " . $e->getMessage();
                }
                ?>

            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; CoreDump 2015</p>
            </div>
        </div>
    </footer>

</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
