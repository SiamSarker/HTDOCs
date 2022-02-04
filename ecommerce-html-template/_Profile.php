<?php
session_start();
if(
    isset($_SESSION['username'])
    && isset($_SESSION['role'])
    && !empty($_SESSION['username'])
    && !empty($_SESSION['role'])
)
{
    $role = $_SESSION['role'];
    $username = $_SESSION['username'];
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Profile</title>
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
    <a href="myprebook.php" class="nav-item nav-link">Prebook</a>
    <?php
}
else{
    ?>
    <a href="cart.php" class="nav-item nav-link">Cart</a>
    <a href="wishlist.php" class="nav-item nav-link">Wishlist</a>
    <a href="pre_book.php" class="nav-item nav-link">Prebook</a>
<?php
}
?>

                            <a href="bid_room.php" class="nav-item nav-link">Bid Room</a>
                           
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
                        font-size: 10px;
                    }

                /* .text{

                            height: 25px;
                            border-radius: 5px;
                            padding: 2px;
                            border: solid thin #aaa;
                            width: 90%;
                        } */


                        #button{

                            padding: 10px;
                            width: auto;
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


                        /* .text{
                            height: 25px;
                            border-radius: 5px;
                            padding: 2px;
                            border: solid thin #aaa;
                            width: 90%;
                        } */

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

<!-- 
          <h1 class="header">
            <left>AgroTech eMarket</left>
            <right>
              <input id="button" type="button" value="Home Page" onclick="home()">
              <input id="button" type="button" value="My Notifications" onclick="notification()">
              <input id="button" type="button" value="My Order History" onclick="orderhistory()">
              <input type="button" id="button" value="Logout" onclick="logoutfn();">
            </right>

          </h1> -->

         <?php 
          $pid = $_GET['pid'];
          ?>

        <br><br>
        <div id="box" style="font-size: 22px;margin: 10px;">Welcome To The Farmer's Profile
       
        
        <?php
        

        try{
            // PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            ///executing mysql query
            $signupquery1="SELECT * FROM product WHERE p_id = $pid";
        
            $returnobj1 = $conn->query($signupquery1);
            $returntable1 = $returnobj1->fetchAll();

            
            if($returnobj1->rowCount() == 1){
                foreach($returntable1 as $row1){
                    $f_user = $row1['f_username'];
                }
            }

            $signupquery="SELECT * FROM farmer WHERE f_username = '$f_user'";
        
            $returnobj = $conn->query($signupquery);
            $returntable = $returnobj->fetchAll();

            if($returnobj->rowCount() == 1)
            {

                foreach($returntable as $row){
                ?><br>
                
                <form action="_Profileprocess.php" method="POST">
                <br>
               
             
                <label for="myname">Username</label>:
                <input class="text" type="text" id="f_username" name="f_username" value="<?php echo $row['f_username'];?>"readonly>
                
                <label for="myname">Full name</label>:
                <input class="text" type="text" id="myname" name="myname" value="<?php echo $row['Name'];?>"readonly>

                <br>

                <label for="address">Address</label>:
                <input class="text" type="text" id="address" name="address" value="<?php echo $row['Address'];?>"readonly>


                <br>

              
                <label for="district">District</label>:
                    <input class="text" type="text" id="district" name="district" value="<?php echo $row['District'];?>"readonly>
                <br>

                <label for="city">City</label>:
                <input class="text" type="text" id="city" name="city" value="<?php echo $row['City'];?>"readonly>

                <br>

                <label for="contact">Contact No</label>:
                <input class="text" type="number" id="contact" name="contact" value="<?php echo "0".$row['Contact_no'];?>"readonly>

                <br>

                <?php
                if($role == 'farmer'){
                  ?>
                  <label for="bKash">bKash No</label>:
                  <input class="text" type="number" id="bKash" name="bKash" value="<?php echo "0".$row['bKash_no'];?>"readonly>
                  <?php
                }
                ?>

                <br>

                <label for="rating">Total Rating</label>:
                <input class="text" type="number" id="rating" name="rating" value="<?php echo $row['rating'];?>"readonly>

                <br>
                       
<div style="font-size: 30px;margin: 10px;">Rate The Farmer
<?php

?></div>

  
    <select class="number" id="choose" name="choose">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    <br><br>
  
    <input id="button" type="submit" value="Submit">


        

        </div>


                <br>
               


                </form>


                <?php
              

            }
            }
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("login.php");</script>
            <?php
        }

        ?>

       


        <br>

        <script>
                    function home(){
                        location.assign('index.php');   ///default GET method
                    }

                    function submit(pid){
                        
                        location.assign('_Profile.php?pid='+pid);   ///default GET method
                    }


                    function profile(){
                        location.assign('profile.php');   ///default GET method
                    }
                    function logoutfn(){
                        location.assign('logout.php');   ///default GET method
                    }

                    function rating(){
                        location.assign('rating.php');   ///default GET method
                    }

                    function notification(){
                        location.assign('notification.php');
                    }

                    function payhistory(){
                        location.assign('payhistory.php');
                    }

        </script>


<!-- Footer Start -->
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
else
{
    ?>
            <script>location.assign("login.php");</script>
    <?php
}

?>
