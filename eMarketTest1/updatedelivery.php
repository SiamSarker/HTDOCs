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

            
    if(isset($_GET['payid']) 
    && !empty($_GET['payid'])
    && isset($_GET['status']) 
    && !empty($_GET['status'])
        )
        {
            $payid = $_GET['payid'];
            $status = $_GET['status'];

                    ///store the data to database
                try{
                    // PHP Data Object
                    $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
                    ///setting 1 environment variable
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    $payquery="SELECT * FROM payment 
                    WHERE payment_id = '$payid'";
                                
                    $returnobj=$conn->query($payquery);
                    $returntable=$returnobj->fetchAll();

                    if($returnobj->rowCount() >= 1)
                    {
                    foreach($returntable as $row){

                        $name = null;
                        $pid = $row[7];
                        $b_username = $row[4];

                        $cartquery1 = "SELECT productName FROM Product 
                        WHERE p_id = $pid";
                            
                            $returnobj1=$conn->query($cartquery1);
                            $returntable1=$returnobj1->fetchAll();

                            if($returnobj1->rowCount() == 1)
                            {
                                foreach($returntable1 as $row1){
                                    $name = $row1[0];
                                }
                            }

                            $paymentquery="UPDATE payment SET delivery_status = '".$status."', payment_time = NOW()
                                    WHERE payment_id = $payid;";
                            echo $paymentquery;

                            $msg1 = "Delevary of product $name is $status. <br>Check your payment history for more details.";
                            $msg2 = "Delevary of product $name is $status";

                            //update home
                            $notifycart="INSERT INTO notification VALUES (NULL, '$msg1', NOW(), '$username', '$b_username', '$msg2')";
                            echo $notifycart;
                                   
                            $conn->exec($paymentquery);
                            $conn->exec($notifycart);

                        
                        }
                    }


                    ?>
                    <script>alert("Update successful");</script>
                    <script>location.assign("payhistory.php");</script>
                    <?php

          
                }
                catch(PDOException $ex){
                    ?>
                        <script>alert("Database Error!");</script>
                        <script>location.assign("cart.php");</script>
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

    
        
?>
