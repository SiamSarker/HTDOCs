<?php
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){
      if( isset($_GET['auction_id']) && !empty($_GET['auction_id'])){
            $auction_id=$_GET['auction_id'];

            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="SELECT* FROM bid_room AS bid JOIN product AS pro ON bid.Productp_id = pro.p_id WHERE auction_id = $auction_id";
              $pdo_obj=$conn->query($sqlquary);
              $table_data=$pdo_obj->fetchAll();

              if($pdo_obj->rowCount() == 0){
                ?>
                <script>location.assign("bid_room.php");</script>
                <?php
              }
              else{
                foreach ($table_data as $row) {
                  ?>

                  <!DOCTYPE html>
                  <html>
                    <head>
                      <title>Auction Update</title>
                      <style>

                          body {
                              background-color: lightblue;
                          }

                          #button{
                              padding: 10px;
                              width: 120px;
                              color: white;
                              background-color: FireBrick;
                              border: none;
                          }

                          #box{
                              background-color: AliceBlue;
                              margin: auto;
                              width: 400px;
                              padding: 20px;
                          }

                          #p_table{
                              width: 100%;
                              border: 1px solid blue;
                              border-collapse: collapse;
                          }

                          #p_table th, #p_table td{
                              border: 1px solid blue;
                              border-collapse: collapse;
                              text-align: center;
                          }

                          #p_table tr:hover{
                            background-color: cyan;
                          }

                          .text{
                              height: 25px;
                              border-radius: 5px;
                              padding: 2px;
                              border: solid thin #aaa;
                              width: 90%;
                          }

                          .header {
                            background-color: #333;
                            overflow: hidden;
                          }

                          .header left {
                            float: left;
                            color: #f2f2f2;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                            font-size: 30px;
                          }

                          .header right {
                            float: right;
                            color: #f2f2f2;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                            font-size: 20px;
                          }

                      </style>
                    </head>
                    <body>
                      <h1 class="header">
                        <left>Auction Update</left>
                        <right><input type="button" id="button" value="Logout" onclick="logout();"></right>
                        <right>Current User: <?php echo $_SESSION['f_username'];?></right>
                      </h1>

                      <form action="auction_update_insert.php" method="post" enctype="multipart/form-data" id="box">
                        <label for="auction_id">Auction ID</label>
                        <input type="text" id="auction_id" name="auction_id" value="<?php echo $row['auction_id'] ?>" readonly>
                        <br><br>
                        <label for="p_id">Product ID</label>
                        <input type="text" id="p_id" name="p_id" value="<?php echo $row['p_id'] ?>" readonly>
                        <br><br>
                        <label for="p_name">Product Name</label>
                        <input type="text" id="p_name" name="p_name" value="<?php echo $row['productName'] ?>" readonly>
                        <br><br>
                        <label for="total_quantity">Avalable Quantity</label>
                        <input type="number" id="total_quantity" name="total_quantity" value="<?php echo $row['totalQuantity'] ?>" max="<?php echo $row['Quantity'] ?>" min="0">
                        <input id="unit" name="unit" value="<?php echo $row['Unit'] ?>" size="5" readonly>
                        <br><br>
                        <label for="min_quantity">Minimum Quantity</label>
                        <input type="number" id="min_quantity" name="min_quantity" value="<?php echo $row['lowest_bidQuantity'] ?>" max="<?php echo $row['Quantity'] ?>" min="0">
                        <br><br>
                        <label for="p_price">Price/Unit</label>
                        <input type="number" id="p_price" name="p_price" value="<?php echo $row['lowestPrice_perUnit'] ?>" max="<?php echo $row['Price_perUnit'] ?>" min="0">
                        <br><br>
                        <label for="start_datetime">Bid Starts At</label>
                        <input type="datetime-local" id="start_datetime" name="start_datetime" value="<?php echo $row['bid_start'] ?>">
                        <br><br>
                        <label for="end_datetime">Bid Ends At</label>
                        <input type="datetime-local" id="end_datetime" name="end_datetime" value="<?php echo $row['bid_end'] ?>">
                        <br><br>
                        <input type="submit" id="button" value="UPDATE">
                        <input type="button" id="button" value="Back" onclick="back();">
                      </form>
                      <script>
                        function back(){
                          location.assign('bid_room.php');
                        }
                        function logout(){
                          location.assign('s_logout_process.php');
                        }
                      </script>
                    </body>
                    </html>

                  <?php
                }
              }
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
