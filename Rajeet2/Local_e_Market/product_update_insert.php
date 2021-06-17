<?php
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){

      if( isset($_POST['p_id']) &&
          isset($_POST['p_name']) &&
          isset($_POST['p_quantity']) &&
          isset($_POST['p_price']) &&
          isset($_POST['unit']) &&
          !empty($_POST['p_id']) &&
          !empty($_POST['p_name']) &&
          !empty($_POST['p_quantity']) &&
          !empty($_POST['p_price']) &&
          !empty($_POST['unit'])
        ){
            $p_id=$_POST['p_id'];
            $p_name=$_POST['p_name'];
            $p_quantity=$_POST['p_quantity'];
            $p_price=$_POST['p_price'];
            $unit=$_POST['unit'];

            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="UPDATE product SET productName = '$p_name', Quantity = $p_quantity, Unit = '$unit', Price_perUnit = $p_price WHERE p_id = $p_id";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("seller_home.php");</script>
              <?php
            }
            catch(PDOExeption $e){
              ?>
              <script>location.assign("product_update.php");</script>
              <?php
            }
        }
        else{
          ?>
          <script>location.assign("product_update.php");</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign("s_login.php");</script>
      <?php
    }
?>
