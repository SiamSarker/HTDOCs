<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Register</title>
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
            width: auto;
            color: white;
            background-color: FireBrick;
            border: none;
            }

            #button1{

            padding: 10px;
            width: 250px;
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


        <form id="box" action="f_register_process.php" method="POST">

          <div style="font-size: 20px;margin: 10px;">Farmer Sign Up</div>

              <label for="username">Username</label>:
              <input class="text" type="text" id="username" name="username" placeholder="ex: anika">
              <br>
              <label for="mypass">Password</label>:
              <input class="text" type="password" id="mypass" name="mypass" placeholder="ex: abc123">
              <br>
              <label for="myname">Full Name</label>:
              <input class="text" type="text" id="myname" name="myname" placeholder="ex: Anika Khaer">
              <br>
              <label for="addrees">Address</label>:
              <input class="text" type="text" id="address" name="address" placeholder="ex: 4th Floor, House 21">
              <br>
              <label for="contact">Contact No</label>:
              <input class="text" type="number" id="contact" name="contact" placeholder="ex: 01*********">
              <br>
              <label for="contact">bKash No</label>:
              <input class="text" type="number" id="bKash" name="bKash" placeholder="ex: 01*********">
              <br>

              <label for="district">District</label>:
              <select class="text" id="district" name="district" onchange="selectCity()">
                  <option selected="selected" value="">Select District</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Chittagong">Chittagong</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Sylhet">Sylhet</option>
                  <option value="Khulna">Khulna</option>
              </select>

              <br>
              <div>
              <label for="city">City</label>:
              <select class="text" name="city" id="output">
                  <option selected="selected" value="">Select City</option>
              </select>
              </div>
              <br>
              <input id="button" type="submit" value="Click to Register">

              <input id="button" type='button' value="Back to login" onclick="login();">

              <br><br>

              <input id="button1" type='button' value="Customer Registration" onclick="b_registration();">

        </form>

        <br><br>



        <script>
        function selectCity(){
            var a=document.getElementById("district").value;
            if(a === "Dhaka")
            {
                var arr=["Mohammadpur","Mirpur","Badda", ];
            }
            else if(a === "Chittagong")
            {
                var arr=["Pahartali","Chawk Bazar", "Patenga"];
            }
            else if(a === "Rajshahi")
            {
                var arr=["Shaheb Bazar","Chhota Banagram", "Shiroil"];
            }
            else if(a === "Sylhet")
            {
                var arr=["coming soon"];
            }
            else if(a === "Khulna")
            {
                var arr=["coming soon"];
            }

            var string="";

            for(i=0;i<arr.length;i++)
            {
                string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
            }
            document.getElementById("output").innerHTML=string;
        }

            function login(){
                location.assign('login.php');
            }

            function b_registration(){
                location.assign('b_register.php');
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
