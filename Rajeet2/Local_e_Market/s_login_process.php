<?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){
      if( isset($_POST['f_username']) &&
          isset($_POST['password']) &&
          !empty($_POST['f_username']) &&
          !empty($_POST['password'])
        ){
            $f_username=$_POST['f_username'];
            $password=$_POST['password'];

            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;","root","");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="SELECT* FROM farmer WHERE f_username = '$f_username' AND password = '$password'";
              $pdo_obj=$conn->query($sqlquary);

              if($pdo_obj->rowCount() == 1){
                session_start();
                $_SESSION['f_username'] = $f_username;
                ?>
                <script>location.assign("seller_home.php");</script>
                <?php
              }
              else{
                ?>
                <script>location.assign("s_login.php");</script>
                <?php
              }
            }
            catch(PDOExeption $e){
              ?>
              <script>location.assign("s_login.php");</script>
              <?php
            }
        }
        else{
          ?>
          <script>location.assign("s_login.php");</script>
          <?php
        }
  }
  else{
    ?>
    <script>location.assign("s_login.php");</script>
    <?php
  }

?>
