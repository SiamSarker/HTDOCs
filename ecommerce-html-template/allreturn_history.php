<?php

session_start();

if(
    isset($_SESSION['username'])
    && !empty($_SESSION['username'])

){
    ///already logged in user
    $username = $_SESSION['username'];

    ?>
         <!DOCTYPE html>
    <html lang="en">
        <head>
        <title>Refund List</title>
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
                                <a href="adminhome.php" class="nav-item nav-link active">Home</a>
                                <a href="allbuyers.php" class="nav-item nav-link">Buyers</a>
                                <a href="allproduct.php" class="nav-item nav-link">Product</a>
                                <a href="allsellers.php" class="nav-item nav-link">Seller</a>
                                <a href="allreturn_history.php" class="nav-item nav-link">Refund List</a>
                                <a href="allorders.php" class="nav-item nav-link">Order History</a>
                            </div>
                            <div class="navbar-nav ml-auto">
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                    <div class="dropdown-menu">
                        
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
                       
                    </div>
                </div>
            </div>

                <style>

                body {
                        background-color: lightblue;
                    }

                .text{

                            height: 25px;
                            border-radius: 5px;
                            padding: 2px;
                            border: solid thin #aaa;
                            width: 90%;
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
                            width: 300px;
                            padding: 20px;
                        }


                    #ptable{
                        width: 100%;
                        border: 1px solid blue;
                        border-collapse: collapse;
                    }

                    #ptable th, #ptable td{
                        border: 1px solid blue;
                        border-collapse: collapse;
                        text-align: center;
                    }

                    #ptable tr:hover{
                        background-color: bisque;
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

    

              <!-- <h1 class="header">
                <left>AgroTech eMarket</left>

                <right>
                  <input id="button" type="button" value="Home" onclick="home();">



                  <input id="button" type="button" value="My Profile" onclick="profile()">
                  <input type="button" id="button" value="Logout" onclick="logout();">
                </right>

              </h1>

                <br><br>


                <input id="button" type="button" value="all Product" onclick="allproduct();">
                <input id="button" type="button" value="all buyers" onclick="allbuyers();">
                <input id="button" type="button" value="all sellers" onclick="allsellers();">
                <input id="button" type="button" value="refund_list" onclick="refund_list();">
                <input id="button" type="button" value="Order History" onclick="orderhistory()">
 -->

                <div>
                  <br>
                  <br>
                <h2> Refund History </h2>

                    <table id="ptable">
                        <thead>
                            <tr>
                                <th>b_username</th>
                                <th>comment</th>
                                <th>Contact_number</th>
                                <th>action</th>
                                <th>status</th>
                                <th>order_id</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            try{
                                ///PDO = PHP Data Object
                                $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket;","root","");
                                ///setting 1 environment variable
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                ///mysql query string
                                $mysqlquery="SELECT * FROM returnn";

                                $returnobj=$conn->query($mysqlquery);
                                $returntable=$returnobj->fetchAll();




                                if($returnobj->rowCount()==0){
                                    ?>
                                        <tr>
                                            <td colspan="8">No Buyers info Available</td>
                                        <tr>
                                    <?php
                                }


                                else{
                                    foreach($returntable as $row){
                                        ?>

                                        <tr>

                                            <td><?php echo $row['b_username'] ?></td>

                                            <td><?php echo $row['comment'] ?></td>
                                            <td><?php echo $row['contact_number'] ?></td>
                                            <td><?php echo $row['action'] ?></td>
                                            <td><?php echo $row['status'] ?></td>
                                            <td><?php echo $row['order_id'] ?></td>

                                            <td>
                                                    <br>
                                                    <input type="button" id="button" value="Refund" onclick="refunded(<?php echo $row['order_id'] ?>);">
                                                    <br><br>
                                                    <input type="button" id="button" value="Replace" onclick="replace(<?php echo $row['order_id'] ?>);">
                                                    <br><br>

                                            </td>
                                        </tr>

                                        <?php
                                    }
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="6">No values found</td>
                                    <tr>
                                <?php
                            }


                            ?>

                        </tbody>
                    </table>
                </div>


                <script>












                    function home(){
                        location.assign('adminhome.php');   ///default GET method
                    }
                    function logout(){
                        location.assign('logout.php');   ///default GET method
                    }

                    function profile(){
                        location.assign('profile.php');   ///default GET method
                    }

                    function allproduct(){
                        location.assign('allproduct.php');
                    }
                    function allbuyers(){
                        location.assign('allbuyers.php');
                    }
                    function allsellers(){
                        location.assign('allsellers.php');
                    }

                    function block(b_username){
                      location.assign('block.php?>b_username='+b_username);
                    }

                    function delete_data(b_username){
                      location.assign('user_delete.php?b_username='+b_username);
                    }

                    function orderhistory(){
                        location.assign('allorders.php');
                    }

                    function refund_list(){
                        location.assign('allreturn_history.php');
                    }

                    function refunded(orders_id){
                        var trxid = prompt("Enter TrxTD: ");
                        location.assign('updated_review_status_foradmin.php?orders_id='+orders_id+'&trxid='+trxid);   ///default GET method
                    }

                    function replace(){
                        location.assign('updated_review_status_foradmin.php');   ///default GET method
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
        <script>alert("login first!");</script>
        <script>location.assign("login.php");</script>
    <?php
}


?>
