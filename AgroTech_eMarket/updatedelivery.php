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

            
    if(isset($_GET['ordersid']) 
    && !empty($_GET['ordersid'])
    && isset($_GET['status']) 
    && !empty($_GET['status'])
        )
        {
            $ordersid = $_GET['ordersid'];
            $status = $_GET['status'];

            echo $ordersid;
            echo $status;

                    ///store the data to database
                try{
                    // PHP Data Object
                    $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket;","root","");
                    ///setting 1 environment variable
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    $payquery="SELECT * FROM orders 
                    WHERE orders_id = '$ordersid'";
                                
                    $returnobj=$conn->query($payquery);
                    $returntable=$returnobj->fetchAll();

                    if($returnobj->rowCount() >= 1)
                    {
                    foreach($returntable as $row){

                        $name = null;
                        $pid = $row[7];
                        $b_username = $row[4];

                        $cartquery1 = "SELECT productName, f_username FROM Product 
                        WHERE p_id = $pid";
                            
                            $returnobj1=$conn->query($cartquery1);
                            $returntable1=$returnobj1->fetchAll();

                            if($returnobj1->rowCount() == 1)
                            {
                                foreach($returntable1 as $row1){
                                    $name = $row1[0];
                                    $f_username = $row1[1];
                                }
                            }

                            if ($status == "received") {
                                $ordersquery="UPDATE orders SET delivery_status = '".$status."', orders_time = NOW()
                                    WHERE orders_id = $ordersid;";
                                echo $ordersquery;

                                $msg1 = "The product $name is been $status. <br>Check your orders history for more details.";
                                $msg2 = "Delivery of product $name is $status";

                                //update home
                                $notifycart="INSERT INTO notification VALUES (NULL, '$msg1', NOW(), '$f_username', '$b_username', '$msg2')";
                                echo $notifycart;
                                    
                                $conn->exec($ordersquery);
                            

                                $conn->exec($notifycart);
                            }
                            else if ($status == "accept") {

                                $ordersquery="UPDATE orders SET delivery_status = 'On the Way', orders_time = NOW()
                                        WHERE orders_id = $ordersid;";
                                

                                $msg1 = "The product $name is $status. <br>Check your orders history for more details.";
                                $msg2 = "Delivery of product $name is $status";

                                //update home
                                $notifycart="INSERT INTO notification VALUES (NULL, '$msg1', NOW(), '$username', '$b_username', '$msg2')";
                                echo $notifycart;
                                    
                                $conn->exec($ordersquery);
                            

                                $conn->exec($notifycart);
                            }

                            else
                            {
                                $ordersquery="UPDATE orders SET delivery_status = 'On the Way', orders_time = NOW()
                                WHERE orders_id = $ordersid;";
                        

                                $msg1 = "The product $name is $status. <br>Check your orders history for more details.";
                                $msg2 = "Delivery of product $name is $status";

                                //update home
                                $notifycart="INSERT INTO notification VALUES (NULL, '$msg1', NOW(), '$username', '$b_username', '$msg2')";
                                echo $notifycart;
                                    
                                $conn->exec($ordersquery);
                            

                                $conn->exec($notifycart);
                            }
                           
                        
                        }
                    }


                    ?>
                    <script>alert("Update successful");</script>
                    <script>location.assign("orderhistory.php");</script>
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