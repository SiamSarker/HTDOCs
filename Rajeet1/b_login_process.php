<?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){
      if( isset($_POST['b_username']) &&
          isset($_POST['password']) &&
          !empty($_POST['b_username']) &&
          !empty($_POST['password'])
        ){
            $b_username=$_POST['b_username'];
            $password=$_POST['password'];

            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;","root","");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="SELECT* FROM buyer WHERE b_username = '$b_username' AND password = '$password'";
              $pdo_obj=$conn->query($sqlquary);

              if($pdo_obj->rowCount() == 1){
                session_start();
                $_SESSION['b_username'] = $b_username;
                ?>
                <script>location.assign("b_bidRoom_All.php");</script>
                <?php
              }
              else{
                ?>
                <script>location.assign("b_login.php");</script>
                <?php
              }
            }
            catch(PDOExeption $e){
              ?>
              <script>location.assign("b_login.php");</script>
              <?php
            }
        }
        else{
          ?>
          <script>location.assign("b_login.php");</script>
          <?php
        }
  }
  else{
    ?>
    <script>location.assign("b_login.php");</script>
    <?php
  }

?>
