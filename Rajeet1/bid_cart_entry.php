<?php
date_default_timezone_set( 'Asia/Dhaka' );
session_start();
if(isset($_SESSION['b_username']) && !empty($_SESSION['b_username'])){
  try{

    $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquary="SELECT all_bid.bid_id AS 'bid_id', all_bid.auction_id AS 'auction_id', all_bid.b_username AS 'b_username',
                all_bid.b_bidQuantity AS 'quantity', all_bid.b_bidPrice_perUnit, all_bid.farmer_profit AS 'price',
                bid.bid_start AS 'bidstart', bid.bid_end AS 'bidend', pro.p_id AS 'p_id', pro.productName AS 'p_name'
                FROM all_bid AS all_bid JOIN bid_room AS bid ON all_bid.auction_id = bid.auction_id
                JOIN product AS pro ON bid.Productp_id = pro.p_id
                WHERE farmer_profit = ANY(SELECT MAX(all_bid.farmer_profit) FROM all_bid GROUP BY all_bid.auction_id)";
    $pdo_obj=$conn->query($sqlquary);
    $table_data=$pdo_obj->fetchAll();

    if($pdo_obj->rowCount() == 0){
      ?>
      <script>location.assign("b_bidRoom_All.php");</script>
      <?php
    }
    else{
      foreach ($table_data as $row) {
        if(date('Y-m-d H:i:s') > $row['bidend']){
          $user=$row['b_username'];
          $pid=$row['p_id'];
          $pname=$row['p_name'];
          $quantity=$row['quantity'];
          $price=$row['price'];
          $sqlquary1="INSERT INTO buyer_product VALUES('$user', $pid, '$pname', $quantity, $price)";
          $conn->exec($sqlquary1);
          $bid_id=$row['bid_id'];
          $sqlquary="DELETE FROM all_bid WHERE bid_id = $bid_id";
          $conn->exec($sqlquary);
        }
      }
      ?>
      <script>location.assign("b_bidRoom_All.php");</script>
      <?php
    }
  }
  catch(PDOExeption $e){
    ?>
    <script>location.assign("error.php");</script>
    <?php
  }
}
else{
?>
<script>location.assign("b_login.php");</script>
<?php
}
?>
