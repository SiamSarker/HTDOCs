<?php
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){

      if( isset($_POST['p_id']) &&
          isset($_POST['total_quantity']) &&
          isset($_POST['min_quantity']) &&
          isset($_POST['p_price']) &&
          isset($_POST['start_datetime']) &&
          isset($_POST['end_datetime']) &&
          !empty($_POST['total_quantity']) &&
          !empty($_POST['min_quantity']) &&
          !empty($_POST['p_price']) &&
          !empty($_POST['start_datetime']) &&
          !empty($_POST['end_datetime'])
        ){
          $p_id=$_POST['p_id'];
          $total_quantity=$_POST['total_quantity'];
          $min_quantity=$_POST['min_quantity'];
          $p_price=$_POST['p_price'];
          $start_date=$_POST['start_datetime'];
          $end_date=$_POST['end_datetime'];

            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="INSERT INTO bid_room VALUES(NULL, $total_quantity, $min_quantity, $p_price, '$start_date', '$end_date', $p_id)";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("bid_room.php");</script>
              <?php
            }
            catch(PDOExeption $e){
              ?>
              <script>location.assign("auction_entry.php");</script>
              <?php
            }
        }
        else{
          ?>
          <script>location.assign("auction_entry.php");</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign("s_login.php");</script>
      <?php
    }
?>
