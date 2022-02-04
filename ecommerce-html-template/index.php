<!-- <?php
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
    ?> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
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
            width: 150px;
            color: white;
            margin: 5px;
            background-color: FireBrick;
            border: none;
        }
        #button2{

padding: 10px;
width: 150px;
color: black;
background-color: greenyellow;
border: none;
}

        #box{

            background-color: AliceBlue;
            margin: auto;
            width: 300px;
            padding: 20px;
        }


    #ptable{
        width: 99%;
        margin-left: 5px;
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
    } */

    /* .header left {
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
                            

                            <a href="b_bidRoom_All.php" class="nav-item nav-link">Bid Room</a>
                            
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
                            <!-- <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button> -->
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
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/asd.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/ag2.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>New Arrivals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            
                            <div class="header-slider-item">
                                <img src="img/apple.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>An apple a day keeps the doctor away.</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/farmers.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/farmers-1.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <!-- <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div> -->
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Bkash Payment</h2>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Fast Delivery</h2>
                            <p>
                               
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>Easy Refund</h2>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <!-- <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">01826557650</a>
                    </div>
                </div>
            </div>
        </div>

<br>

        <form id="box" action="search.php" method="GET">

<div style="font-size: 20px;margin: 10px;">Welcome
<?php

?></div>

    <input class="text" type="search" id="search" name="search" placeholder="Product/Farmer">
    <br><br>
    <select class="text" id="choose" name="choose">
    <option value="product">Product</option>
    <option value="farmer">Farmer</option>
    </select>
    <br><br>
    <input id="button" type="submit" value="Search">
</form>

<div>
  <br>
  <br>
<h2> All Products </h2>

    <table id="ptable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Available Quantity</th>
                <th>Unit</th>
                <th>Unit Price</th>
                <th>Added Time</th>
                <th>Farmer Name</th>
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
                $mysqlquery="SELECT * FROM product";

                $returnobj=$conn->query($mysqlquery);
                $returntable=$returnobj->fetchAll();




                if($returnobj->rowCount()==0){
                    ?>
                        <tr>
                            <td colspan="8">No Products Available</td>
                        <tr>
                    <?php
                }


                else{
                    foreach($returntable as $row){
                        ?>

                        <tr>
                            <td><?php echo $row['p_id'] ?></td>
                            <td><?php echo $row['productName'] ?></td>
                            <td>
                                <img src="<?php echo $row['productImage'] ?>" width="300" height="200">
                            </td>
                            <td><?php echo $row['AvailableQuantity'] ?></td>
                            <td><?php echo $row['Unit'] ?></td>
                            <td><?php echo $row['Price_perUnit']." BDT" ?></td>
                            <td><?php echo $row['Added_date'] ?></td>
                            <td>
                                            <?php echo $row['f_username'] ?> 
                                            <br> 
                                            <br>

                                            <?php $f_user = $row['f_username'] ?> 

                                
                                            <input id="button" type="button" value="Go To Profile" onclick="showProfile(<?php echo $row['p_id'] ?>)">  
                                            <br> 
                                            <br>
                                            </td>
                                            <td>

                                <?php if($role != 'farmer'){
                                    if($row['AvailableQuantity'] == 0){
                                    ?>
                                    <input id="button2" type="button" value="Pre Book" onclick="gotoprebook(<?php echo $row['p_id']?>);"><br>
                                    <?php
                                    }
                                    else{
                                        ?>
                                    <input id="button" type="button" value="Add to Cart" onclick="gotocart(<?php echo $row['p_id']?>, <?php echo $row['AvailableQuantity']?>);"><br>
                                         <?php
                                    }
                                    ?>
                                    <input id="button" type="button" value="SEE ALL reviews" onclick="gotocart2(<?php echo $row['p_id']?>);"><br>
                                    <input id="button" type="button" value="Add to WishList" onclick="gotocart3(<?php echo $row['p_id']?>, <?php echo $row['AvailableQuantity']?>);">
                                    <?php
                                }
                                else if($row['f_username'] == $username){
                                    ?>
                                    <br>
                                    <input type="button" id="button" value="UPDATE" onclick="update_data(<?php echo $row['p_id'] ?>);">
                                    <br><br>
                                    <input type="button" id="button" value="DELETE" onclick="delete_data(<?php echo $row['p_id'] ?>);">
                                    <?php
                                }
                                ?>
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
        location.assign('index.php');   ///default GET method
    }
    function logout(){
        location.assign('logout.php');   ///default GET method
    }

    function profile(){
        location.assign('profile.php');   ///default GET method
    }

    function uploadfn(){
        location.assign('upload.php');
    }

    function cart(){
        location.assign('cart.php');
    }

    function wish(){
        location.assign('wishlist.php');
    }

    function pre_book(){
        location.assign('pre_book.php');
    }

    function deletefn(pid){

        location.assign('delete.php?prodid='+pid);
    }

    function gotocart(pid, high){
        var amount = prompt("Enter the amount: ");
        if (amount != "" && amount <= high){
            location.assign('gotoCart.php?prodid='+pid+'&amount='+amount+'&high='+high);
        }
        else{
            alert("Please enter a value less than "+high);
        }
    }

    function gotocart2(pid){
        
        location.assign('watch.php?prodid='+pid);
    

}
function gotocart3(pid, high){
    var amount = prompt("Enter the amount: ");
    if (amount != "" && amount <= high){
        location.assign('addwish.php?prodid='+pid+'&amount='+amount+'&high='+high);
    }
    else{
        alert("Please enter a value less than "+high);
    }
}

    function gotoprebook(pid,high){
        var amount = prompt("Enter the amount: ");
        location.assign('gotoPrebook.php?prodid='+pid+'&amount='+amount+'&high='+high);

    }

    function notification(){
        location.assign('notification.php');
    }

    function pre_book(){
        location.assign('pre_book.php');
    }

    function orderhistory(){
        location.assign('orderhistory.php');
    }

    function myproduct()
    {
        location.assign('myproduct.php');
    }

    function myprebook()
    {
        location.assign('myprebook.php');
    }
function showProfile(pid){
                        // alert();
                        location.assign('_Profile.php?pid='+pid);   ///default GET method
                    }
    function product_entry(){
        location.assign('product_entry.php');
    }

function allBid(){
location.assign('b_bidRoom_All.php');
}

function update_data(p_id){
location.assign('product_update.php?p_id='+p_id);
}

function delete_data(p_id){
location.assign('product_delete.php?p_id='+p_id);
}

function update_data(p_id){
location.assign('product_update.php?p_id='+p_id);
}
</script>

<script>(function(w, d) { w.CollectId = "61ea845cbe19f1762af029be"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>


                </script>

        <!-- Recent Product End -->
        <br>
        <!-- Review Start -->
        <!-- <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Mridul Hossain</h2>
                                <h3>Banker</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   Very fast delivery. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Anika 
                                </h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Review End -->        
        
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
else{
    $role = $_SESSION['role'];
    $username = $_SESSION['username'];
    ?>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
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
            width: 150px;
            color: white;
            margin: 5px;
            background-color: FireBrick;
            border: none;
        }
        #button2{

padding: 10px;
width: 150px;
color: black;
background-color: greenyellow;
border: none;
}

        #box{

            background-color: AliceBlue;
            margin: auto;
            width: 300px;
            padding: 20px;
        }


    #ptable{
        width: 99%;
        margin-left: 5px;
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
    } */

    /* .header left {
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

                           
    <a href="myproduct.php" class="nav-item nav-link">Cart</a>

                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                <a href="http://localhost/ecommerce-html-template/login.php" class="dropdown-item">Login</a>
                                    <a href="http://localhost/ecommerce-html-template/f_register.php" class="dropdown-item">Farmer Register</a>
                                    <a href="http://localhost/ecommerce-html-template/b_register.php" class="dropdown-item">Customer Register</a>
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
                            <!-- <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button> -->
                        </div>
                    </div>
 
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

                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/asd.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/ag2.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>New Arrivals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            
                            <div class="header-slider-item">
                                <img src="img/apple.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>An apple a day keeps the doctor away.</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/farmers.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/farmers-1.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <!-- <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div> -->
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Bkash Payment</h2>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Fast Delivery</h2>
                            <p>
                               
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>Easy Refund</h2>
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <!-- <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">01826557650</a>
                    </div>
                </div>
            </div>
        </div>

<br>

        <form id="box" action="search.php" method="GET">

<div style="font-size: 20px;margin: 10px;">Welcome
<?php

?></div>

    <input class="text" type="search" id="search" name="search" placeholder="Product/Farmer">
    <br><br>
    <select class="text" id="choose" name="choose">
    <option value="product">Product</option>
    <option value="farmer">Farmer</option>
    </select>
    <br><br>
    <input id="button" type="submit" value="Search">
</form>

<div>
  <br>
  <br>
<h2> All Products </h2>

    <table id="ptable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Available Quantity</th>
                <th>Unit</th>
                <th>Unit Price</th>
                <th>Added Time</th>
                <th>Farmer Name</th>
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
                $mysqlquery="SELECT * FROM product";

                $returnobj=$conn->query($mysqlquery);
                $returntable=$returnobj->fetchAll();




                if($returnobj->rowCount()==0){
                    ?>
                        <tr>
                            <td colspan="8">No Products Available</td>
                        <tr>
                    <?php
                }


                else{
                    foreach($returntable as $row){
                        ?>

                        <tr>
                            <td><?php echo $row['p_id'] ?></td>
                            <td><?php echo $row['productName'] ?></td>
                            <td>
                                <img src="<?php echo $row['productImage'] ?>" width="300" height="200">
                            </td>
                            <td><?php echo $row['AvailableQuantity'] ?></td>
                            <td><?php echo $row['Unit'] ?></td>
                            <td><?php echo $row['Price_perUnit']." BDT" ?></td>
                            <td><?php echo $row['Added_date'] ?></td>
                            <td>
                                            <?php echo $row['f_username'] ?> 
                                            <br> 
                                            <br>

                                            <?php $f_user = $row['f_username'] ?> 

                                
                                            <input id="button" type="button" value="Go To Profile" onclick="showProfile(<?php echo $row['p_id'] ?>)">  
                                            <br> 
                                            <br>
                                            </td>
                                            <td>

                                <?php if($role != 'farmer'){
                                    if($row['AvailableQuantity'] == 0){
                                    ?>
                                    <input id="button2" type="button" value="Pre Book" onclick="gotoprebook(<?php echo $row['p_id']?>);"><br>
                                    <?php
                                    }
                                    else{
                                        ?>
                                    <input id="button" type="button" value="Add to Cart" onclick="gotocart(<?php echo $row['p_id']?>, <?php echo $row['AvailableQuantity']?>);"><br>
                                         <?php
                                    }
                                    ?>
                                    <input id="button" type="button" value="SEE ALL reviews" onclick="gotocart2(<?php echo $row['p_id']?>);"><br>
                                    <input id="button" type="button" value="Add to WishList" onclick="gotocart3(<?php echo $row['p_id']?>, <?php echo $row['AvailableQuantity']?>);">
                                    <?php
                                }
                                else if($row['f_username'] == $username){
                                    ?>
                                    <br>
                                    <input type="button" id="button" value="UPDATE" onclick="update_data(<?php echo $row['p_id'] ?>);">
                                    <br><br>
                                    <input type="button" id="button" value="DELETE" onclick="delete_data(<?php echo $row['p_id'] ?>);">
                                    <?php
                                }
                                ?>
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
        location.assign('index.php');   ///default GET method
    }
    function logout(){
        location.assign('logout.php');   ///default GET method
    }

    function profile(){
        location.assign('profile.php');   ///default GET method
    }

    function uploadfn(){
        location.assign('upload.php');
    }

    function cart(){
        location.assign('cart.php');
    }

    function wish(){
        location.assign('wishlist.php');
    }

    function pre_book(){
        location.assign('pre_book.php');
    }

    function deletefn(pid){

        location.assign('delete.php?prodid='+pid);
    }

    function gotocart(pid, high){
        var amount = prompt("Enter the amount: ");
        if (amount != "" && amount <= high){
            location.assign('gotoCart.php?prodid='+pid+'&amount='+amount+'&high='+high);
        }
        else{
            alert("Please enter a value less than "+high);
        }
    }

    function gotocart2(pid){
        
        location.assign('watch.php?prodid='+pid);
    

}
function gotocart3(pid, high){
    var amount = prompt("Enter the amount: ");
    if (amount != "" && amount <= high){
        location.assign('addwish.php?prodid='+pid+'&amount='+amount+'&high='+high);
    }
    else{
        alert("Please enter a value less than "+high);
    }
}

    function gotoprebook(pid,high){
        var amount = prompt("Enter the amount: ");
        location.assign('gotoPrebook.php?prodid='+pid+'&amount='+amount+'&high='+high);

    }

    function notification(){
        location.assign('notification.php');
    }

    function pre_book(){
        location.assign('pre_book.php');
    }

    function orderhistory(){
        location.assign('orderhistory.php');
    }

    function myproduct()
    {
        location.assign('myproduct.php');
    }

    function myprebook()
    {
        location.assign('myprebook.php');
    }
function showProfile(pid){
                        // alert();
                        location.assign('_Profile.php?pid='+pid);   ///default GET method
                    }
    function product_entry(){
        location.assign('product_entry.php');
    }

function allBid(){
location.assign('b_bidRoom_All.php');
}

function update_data(p_id){
location.assign('product_update.php?p_id='+p_id);
}

function delete_data(p_id){
location.assign('product_delete.php?p_id='+p_id);
}

function update_data(p_id){
location.assign('product_update.php?p_id='+p_id);
}
</script>

<script>(function(w, d) { w.CollectId = "61ea845cbe19f1762af029be"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>


                </script>

        <!-- Recent Product End -->
        <br>
        <!-- Review Start -->
        <!-- <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Mridul Hossain</h2>
                                <h3>Banker</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   Very fast delivery. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Anika 
                                </h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Review End -->        
        
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
