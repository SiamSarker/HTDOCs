<?php
    session_start();
    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        $username = $_SESSION['username'];
        $role = $_SESSION['role'];
      ?>
       <!DOCTYPE html>
<html lang="en">
    <head>
    <title>Product</title>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        Agro_Tech@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        01826557650
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>

                            <?php

                if($role == 'farmer'){
                    ?>
                    <a href="myproduct.php" class="nav-item nav-link">My Product</a>
                    <?php
                }
                else{
                    ?>
                    <a href="cart.php" class="nav-item nav-link">Cart</a>
                    <a href="wishlist.php" class="nav-item nav-link">Wishlist</a>
                <?php
                }
                ?>
                            
                            <a href="bid_room.php" class="nav-item nav-link">Bid Room</a>
                            <?php

if($role == 'farmer'){
    ?>
                                <a href="bid_room.php" class="nav-item nav-link">My Auction</a>
                                <a href="product_entry.php" class="nav-item nav-link">Product Entry</a>
                                <a href="myprebook.php" class="nav-item nav-link">Prebook</a>
    <?php
}
else{
    ?>
                                <a href="my_bid.php" class="nav-item nav-link">My Bids</a>
<?php
}
?>
                           
                            <a href="notification.php" class="nav-item nav-link">Inbox</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                    
                                    <a href="orderhistory.php" class="dropdown-item">Order History</a>
                                    <a href="profile.php" class="dropdown-item">My Profile</a>
                                    <a href="logout.php" class="dropdown-item">Logout</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                            <img src="img/agro_logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <?php

if($role == 'farmer'){
    ?>

    <?php
}
else{
    ?>
<div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.php" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
<?php
}
?>
                </div>
            </div>
        </div>
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

                /* .header {
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
                } */

            </style>
          </head>



          <body>
            <!-- <h1 class="header">
              <left>AgroTech eMarket</left>
              <right>
                <input id="button" type="button" value="Home Page" onclick="home()">
                <input id="button" type="button" value="My Profile" onclick="profile()">
                <input id="button" type="button" value="My Notifications" onclick="notification()">
                <input id="button" type="button" value="Order History" onclick="orderhistory()">
                <input type="button" id="button" value="Logout" onclick="logout();">
              </right>

            </h1> -->


                <br><br>

            <!-- <input type="button" id="button" value="Product Entry" onclick="product_entry();">
            <input type="button" id="button" value="My Auctions" onclick="bidRoom_entry();"> -->
            <div>
              <h2>My Products</h2>
              <table id="p_table" class=".text">
                <thead>
                  <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Available</th>
                    <th>Unit</th>
                    <th>Price/Unit</th>
                    <th>Added On</th>
                    <th>Actions</th>
                  </tr>

                  <?php
                  try{

                    $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket;", "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sqlquary="SELECT* FROM product WHERE f_username = '$_SESSION[username]'";
                    $pdo_obj=$conn->query($sqlquary);
                    $table_data=$pdo_obj->fetchAll();

                    if($pdo_obj->rowCount() == 0){
                      ?>
                      <tr>
                        <td colspan="8">No Data</td>
                      </tr>
                      <?php
                    }
                    else{
                      foreach ($table_data as $row) {
                        ?>

                        <tr>
                          <td><?php echo $row['p_id'] ?></td>
                          <td><?php echo $row['productName'] ?></td>
                          <td><img src="<?php echo $row['productImage'] ?>" width="300" height="200"?> </td>
                          <td><?php echo $row['Quantity'] ?></td>
                          <td><?php echo $row['AvailableQuantity'] ?></td>
                          <td><?php echo $row['Unit'] ?></td>
                          <td><?php echo $row['Price_perUnit'] ?></td>
                          <td><?php echo $row['Added_date'] ?></td>
                          <td>
                          <?php
                            $p_id=$row['p_id'];
                            $sqlquary1="SELECT* FROM bid_room WHERE p_id = $p_id";
                            $pdo_obj1=$conn->query($sqlquary1);
                            $table_data1=$pdo_obj1->fetchAll();

                            if($pdo_obj1->rowCount() == 0){
                                ?>
                                <input type="button" id="button" value="AUCTION" onclick="add_to_auction(<?php echo $row['p_id'] ?>);">

                                <?php
                              }
                              ?>
                            <br><br>
                            <input type="button" id="button" value="UPDATE" onclick="update_data(<?php echo $row['p_id'] ?>);">
                            <br><br>
                            <input type="button" id="button" value="DELETE" onclick="delete_data(<?php echo $row['p_id'] ?>);">
                          </td>
                        </tr>

                        <?php
                      }
                    }
                  }
                  catch(PDOException $ex){
                    ?>
                        <tr>
                            <td colspan="8">No Products Available</td>
                        <tr>
                    <?php
                }
                   ?>
                </thead>
              </table>
            </div>
            <br>
            <script>
              function product_entry(){
                location.assign('product_entry.php');
              }

              function logout(){
                location.assign('logout.php');
              }

              function update_data(p_id){
                location.assign('product_update.php?p_id='+p_id);
              }

              function delete_data(p_id){
                location.assign('product_delete.php?p_id='+p_id);
              }

              function add_to_auction(p_id){
                location.assign('auction_entry.php?p_id='+p_id);
              }

              function bidRoom_entry(){
                location.assign('bid_room.php');
              }

              function notification(){
                        location.assign('notification.php');
                    }

                    function orderhistory(){
                        location.assign('orderhistory.php');
                    }

                    function home(){
                        location.assign('home.php');   ///default GET method
                    }


                    function profile(){
                        location.assign('profile.php');   ///default GET method
                    }


            </script>

<div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>21/D,100 Feet Road,Notun Bazar,Badda,Dhaka</p>
                                <p><i class="fa fa-envelope"></i>Agro_Tech@gmail.com</p>
                                <p><i class="fa fa-phone"></i>01826557650</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Payment Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/bkash.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

      <?php
    }
    else{
        ?>
        <script>location.assign("login.php");</script>
        <?php
    }
?>
