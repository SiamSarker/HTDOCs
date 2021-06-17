<?php
    date_default_timezone_set( 'Asia/Dhaka' );
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){
      ?>
      <!DOCTYPE html>
      <html>
          <head>
            <title>Bid Room</title>
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
              <left class="active">Bid Room</left>
              <right><input type="button" id="button" value="Logout" onclick="logout();"></right>
              <right>Current User: <?php echo $_SESSION['f_username'];?></right>
            </h1>
            <input type="button" id="button" value="Back" onclick="back();">
            <input type="button" id="button" value="All Products" onclick="bidRoom_All();">
            <div>
              <h2>My Products</h2>
              <table id="p_table">
                <thead>
                  <tr>
                    <th>Auction ID</th>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Available Quantity</th>
                    <th>Minimum Quantity</th>
                    <th>Unit</th>
                    <th>Price/Unit</th>
                    <th>Bid Start At</th>
                    <th>Bid End At</th>
                    <th>Actions</th>
                  </tr>

                  <?php
                  try{

                    $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sqlquary="SELECT* FROM product AS pro JOIN bid_room AS bid ON pro.p_id = bid.Productp_id WHERE farmerf_username = '$_SESSION[f_username]'";
                    $pdo_obj=$conn->query($sqlquary);
                    $table_data=$pdo_obj->fetchAll();

                    if($pdo_obj->rowCount() == 0){
                      ?>
                      <tr>
                        <td colspan="11">No Data</td>
                      </tr>
                      <?php
                    }
                    else{
                      foreach ($table_data as $row) {
                        ?>

                        <tr>
                          <td><?php echo $row['auction_id'] ?></td>
                          <td><?php echo $row['p_id'] ?></td>
                          <td><?php echo $row['productName'] ?></td>
                          <td><img src="<?php echo $row['productImage'] ?>" width="300" height="200" </td>
                          <td><?php echo $row['totalQuantity'] ?></td>
                          <td><?php echo $row['lowest_bidQuantity'] ?></td>
                          <td><?php echo $row['Unit'] ?></td>
                          <td><?php echo $row['lowestPrice_perUnit'] ?></td>
                          <td><?php echo $row['bid_start'] ?></td>
                          <td><?php echo $row['bid_end'] ?></td>
                          <td>
                            <?php
                            if(date('Y-m-d H:i:s') < $row['bid_start']){
                            ?>
                            <input type="button" id="button" value="UPDATE" onclick="update_Bdata(<?php echo $row['auction_id'] ?>);">
                            <br><br>
                            <?php
                            }
                            ?>
                            <input type="button" id="button" value="DELETE" onclick="delete_data(<?php echo $row['auction_id'] ?>);">
                          </td>
                        </tr>

                        <?php
                      }
                    }
                  }
                  catch(PDOExeption $e){
                    ?>
                    <tr>
                      <td colspan="11">No Data</td>
                    </tr>
                    <?php
                  }
                   ?>
                </thead>
              </table>
            </div>

            <script>
              function back(){
                location.assign('seller_home.php');
              }

              function logout(){
                location.assign('s_logout_process.php');
              }

              function bidRoom_All(){
                location.assign('bidRoom_All.php');
              }

              function update_Bdata(auction_id){
                location.assign('auction_update.php?auction_id='+auction_id);
              }

              function delete_data(auction_id){
                location.assign('auction_delete.php?auction_id='+auction_id);
              }

            </script>

          </body>
      </html>

      <?php
    }
    else{
        ?>
        <script>location.assign("s_login.php");</script>
        <?php
    }
?>
