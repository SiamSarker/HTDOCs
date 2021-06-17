<?php
    session_start();
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

      if(isset($_GET['auction_id']) && !empty($_GET['auction_id'])){
            $auction_id=$_GET['auction_id'];
            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="DELETE FROM bid_room WHERE bid_id = $auction_id";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("bid_room.php");</script>
              <?php
            }
            catch(PDOException $ex){
                ?>
                    <script>location.assign("bid_room.php");</script>
                <?php
            }
        }
        else{
          ?>
          <script>location.assign("bid_room.php");</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign("login.php");</script>
      <?php
    }
?>
