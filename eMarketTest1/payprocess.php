<?php
/*
step 1: to receive the email and password data from register.php
step 2: to store the data within the database
step 3: if data store is successful then forward to login.php
        else forward to register.php
*/

session_start();

if(
    isset($_SESSION['username'])
    && isset($_SESSION['role'])
    && !empty($_SESSION['username'])
    && !empty($_SESSION['role']))
    {

    $role = $_SESSION['role'];
    $username = $_SESSION['username'];


    if($_SERVER['REQUEST_METHOD']=='POST'){
            
        if(isset($_POST['transaction']) 

            && !empty($_POST['transaction'])
            )
            {

                $transaction = $_POST['transaction'];
                $total=$_POST['total'];
                $f_username=$_POST['f_username'];


                    ///store the data to database
                try{
                    // PHP Data Object
                    $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
                    ///setting 1 environment variable
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    $paymentquery="INSERT INTO payment VALUES (NULL, $transaction, $total , 'On the Way', '".$username."', '".$f_username."')";
                    echo $paymentquery;
                    $deletecart="DELETE FROM Buyer_Product WHERE Buyerb_username = '".$username."' && Productp_id = 2;";
                    echo $deletecart;
                           
                    $conn->exec($paymentquery);
                    $conn->exec($deletecart);

                    ?>
                    <script>alert("Payment successful");</script>
                    <script>location.assign("payhistory.php");</script>
                    <?php

          
                }
                catch(PDOException $ex){
                    ?>
                        <script>alert("Database Error!");</script>
                        <script>location.assign("home.php");</script>
                    <?php
                }
                
                }

                else{
                ///if email and password data is empty or not set
                /// register.php --> registeruser.php --> register.php
                ?>
                <script>alert("Fill up all required fields!");</script>
                <script>location.assign("home.php");</script>
                <?php
                
                }
                
            }
            else{
                ///if email and password data is empty or not set
                /// register.php --> registeruser.php --> register.php
                ?>
                <script>location.assign("home.php");</script>
                <?php
                
            }

    }
        
?>
