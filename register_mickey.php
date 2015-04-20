
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
                            header("Refresh: 5; Location: register_mickey.php");
            }
          } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
          }

        } else { 
          echo"fail";
          header("Location: register_mickey.php");
        }
    } else { 
 ?>
<!--   <form name="registration" method="POST">
  <label for 'email'>Email: </label>
  <input type="text" name="email"/>
  <label for 'password'>Password: </label>
  <input type="password" name="password"/>
  <label for 'first_name'>voor naam: </label>
  <input type="text" name="first_name"/>
  <label for 'surname'>achternaam: </label>
  <input type="text" name="surname"/>
  <label for 'address'>Address: </label>
  <input type="text" name="address"/>
  <label for 'address'>Telefoon: </label>
  <input type="text" name="Telefoon"/> -->
  <form method="POST">
    <fieldset id="inputs">
      <input id="email" type="email" name="email" placeholder="Email" required>
      <input id="password" type="password" name="password" placeholder="Wachtwoord" required>
      <input id="firstname" type="firstname" name="firstname" placeholder="firstname" required>
      <input id="lastname" type="lastname" name="lastname" placeholder="lastname" required>
      <input id="adress" type="adress" name="adress" placeholder="adress" required>
      <input id="phonenumber" type="phonenumber" name="phonenumber" placeholder="phonenumber" required>
    </fieldset>
    <fieldset id="actions">
    <br/>
      <input type="submit" id="submit" value="Log in">
    </fieldset>
  </form> <?php 
}
  ?>
