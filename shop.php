
<!DOCTYPE html>
<html>
<div id="shop">
<!--     <a href="moederborden.php"><div class="cat_buttons">
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
    </div> -->
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
                        <div class="cat_buttons">
                            <a href="<?php echo $Categorie; ?>.php"><img style="width: 180px; height: 180px;" src="img/<?php echo $Categorie; ?>.jpg">
                            <p><?php echo $Categorie; ?></p>
                        </div>
                        <?php
                    }
                    
                }catch(PDOException $e){
                  echo "Error: " . $e->getMessage();
                }
                ?>
</div>
</div>
</html>