<?php
    session_start();
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
      if( isset($_POST['auction_id']) &&
          isset($_POST['bid_quantity']) &&
          isset($_POST['p_price']) &&
          !empty($_POST['auction_id']) &&
          !empty($_POST['bid_quantity']) &&
          !empty($_POST['p_price'])
        ){
          $auction_id=$_POST['auction_id'];
          $bid_quantity=$_POST['bid_quantity'];
          $p_price=$_POST['p_price'];
          $farmer_profit = $bid_quantity * $p_price;


            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;", "root", ""); 
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="INSERT INTO all_bid VALUES(NULL, $auction_id, '$_SESSION[username]', $bid_quantity, $p_price, $farmer_profit)";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign('my_bid.php');</script>
              <?php
            }
            catch(PDOException $ex){
                ?>
                   <script>location.assign("b_bidRoom_All.php");</script>
                <?php
            }
        }
        else{
          ?>
          <script>location.assign('b_bidRoom_All.php');</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign('login.php');</script>
      <?php
    }
?>
