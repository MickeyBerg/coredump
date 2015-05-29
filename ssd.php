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
            <a class="navbar-brand" href="index.php">CoreDump</a>
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
                </form>
        </div>




    </div>
</div>
<div class="container">

    <div class="row">

        <div class="col-md-3">
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

        <div class="col-md-9">
            <div class="row">
                <?php

                $db = new PDO("mysql:host=localhost;dbname=coredump","admin","admin");

                $sql = "SELECT * FROM producten WHERE head_cat = 'SSD'";
                $stmt = $db->prepare($sql);
                $stmt->execute();

                while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <div class="col-md-12">
                            <img style="width: 100%; height: 150px;" src="img/producten/<?php echo $arr['prod_code']; ?>.jpg">
                        </div>
                            <div class="caption-full">
                                <h4><?php echo $arr['prod_naam']; ?></h4>
                                <p><?php echo $arr['prod_desc']?></p>
                                <button class="btn btn-primary" id="kopen">Kopen</button>
                                <h4 class="pull-right"><?php echo "&euro;".$arr['prod_price'];?></h4>
                            </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

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
