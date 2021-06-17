<?php
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){

      if(isset($_GET['p_id']) && !empty($_GET['p_id'])){
            $p_id=$_GET['p_id'];
            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="DELETE FROM Product WHERE p_id = $p_id";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("seller_home.php");</script>
              <?php
            }
            catch(PDOExeption $e){
              ?>
              <script>location.assign("seller_home.php");</script>
              <?php
            }
        }
        else{
          ?>
          <script>location.assign("seller_home.php");</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign("s_login.php");</script>
      <?php
    }
?>
