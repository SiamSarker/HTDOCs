<?php
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){

      if(isset($_GET['auction_id']) && !empty($_GET['auction_id'])){
            $auction_id=$_GET['auction_id'];
            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="DELETE FROM bid_room WHERE auction_id = $auction_id";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("bid_room.php");</script>
              <?php
            }
            catch(PDOExeption $e){
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
      <script>location.assign("s_login.php");</script>
      <?php
    }
?>
