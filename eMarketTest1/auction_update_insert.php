<?php
    session_start();
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

      if( isset($_POST['auction_id']) &&
          isset($_POST['p_id']) &&
          isset($_POST['total_quantity']) &&
          isset($_POST['min_quantity']) &&
          isset($_POST['p_price']) &&
          isset($_POST['start_datetime']) &&
          isset($_POST['end_datetime']) &&
          !empty($_POST['auction_id']) &&
          !empty($_POST['p_id']) &&
          !empty($_POST['total_quantity']) &&
          !empty($_POST['min_quantity']) &&
          !empty($_POST['p_price']) &&
          !empty($_POST['start_datetime']) &&
          !empty($_POST['end_datetime'])
        ){
          $auction_id=$_POST['auction_id'];
          $p_id=$_POST['p_id'];
          $total_quantity=$_POST['total_quantity'];
          $min_quantity=$_POST['min_quantity'];
          $p_price=$_POST['p_price'];
          $start_date=$_POST['start_datetime'];
          $end_date=$_POST['end_datetime'];

            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="UPDATE bid_room SET totalQuantity = $total_quantity, lowest_bidQuantity = $min_quantity, lowestPrice_perUnit = $p_price, bid_start = '$start_date', bid_end = '$end_date', Productp_id = $p_id WHERE auction_id = $auction_id";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("bid_room.php");</script>
              <?php
            }

            catch(PDOException $ex){
                ?>
                    <script>location.assign("auction_update.php");</script>
                <?php
            }
            
        }
        else{
          ?>
          <script>location.assign("auction_update.php");</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign("login.php");</script>
      <?php
    }
?>
