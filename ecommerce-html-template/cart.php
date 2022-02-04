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
    <title>Cart</title>
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
        <!-- Bottom Bar End -->   
        <style>
 body {
    background:lightblue;
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
            width: 130px;
            color: white;
            background-color: FireBrick;
            border: none;
        }

        #box{

            background-color:  AliceBlue;
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
/* 
    .text{
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
<h2> Cart </h2>

<?php $total = 0; ?>

            <table id="ptable">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product name</th>
                        <th>Total Amount</th>
                        <th>Total Cost</th>
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
                        $cartquery="SELECT * FROM cart WHERE b_username = '$username'";

                        $returnobj=$conn->query($cartquery);
                        $returntable=$returnobj->fetchAll();


                        if($returnobj->rowCount()==0){
                            ?>
                                <tr>
                                    <td colspan="5">No values found</td>
                                <tr>
                            <?php
                        }
                        else{
                            foreach($returntable as $row){
                                ?>

                                <tr>
                                    <td><?php echo $row[1] ?></td>
                                    <td><?php echo $row[2] ?></td>
                                    <td><?php echo $row[3]. " kg" ?></td>
                                    <td><?php echo $row[4]." BDT" ?></td>
                                    <td>
                                        <br>
                                        <?php
                                        if ($row[5] == 1)
                                        {?>
                                            <input id="button" type="button" value="Not Removable" onclick="">
                                        <?php
                                        }
                                        else{?>
                                            <input id="button" type="button" value="Remove Item" onclick="removeitem(<?php echo $row[1]?>, <?php echo $row[3]?>);">
                                        <?php
                                        }
                                        ?>

                                        <br><br>
                                    </td>
                                </tr>
                                <?php

                                $total += $row[4];
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


            
        <br>

        <?php

        try{
            // PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            ///executing mysql query
            // $buyeracc = "SELECT buyer_acc_no FROM Buyer WHERE b_username = '".$username."'";

        //
        //     // $signupquery="SELECT b.buyer_acc_no, f.farmer_acc_no, f.f_username
        //     //         FROM
        //     //         Buyer as b
        //     //         JOIN Buyer_Product as bp
        //     //         ON bp.Buyerb_username = b.b_username
        //     //         JOIN Product as p
        //     //         ON p.p_id = bp.Productp_id
        //     //         JOIN farmer as f
        //     //         ON f.f_username = p.farmerf_username
        //
        //     //     WHERE b.b_username = '".$username."' && bp.Productp_id = 2";     // && bp.Productp_id = 2 selling to only one farmer
        //
        //
        //     $returnobj = $conn->query($buyeracc);
        //     $returntable = $returnobj->fetchAll();
        //
        //     if($returnobj->rowCount() == 1)
        //     {
        //         foreach($returntable as $row){
        //
        //         $buyeracc = $row[0];
        //
        //         }
        //     }

        ?>
<div id="box" style="font-size: 20px;margin: 10px;">
        <form action="paycart.php" method="GET">

        <br>

        <label for="paymentType">Payment Method</label>:
        <select class="text" id="paymentType" name="paymentType">
            <option selected="bKash" value="bKash">bKash</option>
            <option value="Cash">Cash On Delivery</option>
        </select>

        <br>

        <label for="total">Total Amount</label>:
        <input class="text" type="text" id="total" name="total" value="<?php echo $total; ?>" readonly>
        <br><br>



        <input id="button" type="submit" value="Place Order">

        </form>
           
</div>


<?php


        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("cart.php");</script>
            <?php
        }

        ?>

<br>


<br>
</div>
<script>
            function home(){
                location.assign('home.php');   ///default GET method
            }

            function profile(){
                location.assign('profile.php');   ///default GET method
            }
            function logout(){
                location.assign('logout.php');   ///default GET method
            }

            function update(){
                location.assign('updateprofile.php');   ///default GET method
            }

            function notification(){
                location.assign('notification.php');
            }

            function removeitem(pid, quantity){
                location.assign('removeitem.php?prodid='+pid+'&Quantity='+quantity);
            }

            function orderhistory(){
                location.assign('orderhistory.php');
            }

</script>



<?php

?>
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