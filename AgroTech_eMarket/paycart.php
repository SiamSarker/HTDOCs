<?php
//

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
                            width: 130px;
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

        </head>

        <body>


          <h1 class="header">
            <left>AgroTech eMarket</left>
            <right>
              <input id="button" type="button" value="Home Page" onclick="home()">
              <input id="button" type="button" value="My Profile" onclick="profile()">
              <input id="button" type="button" value="My Notifications" onclick="notification()">
              <input id="button" type="button" value="Order History" onclick="orderhistory()">
              <input type="button" id="button" value="Logout" onclick="logout();">
            </right>

          </h1>


        <h2> Cart </h2>

        <?php $total = 0; ?>

                    <table id="ptable">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product name</th>
                                <th>Total Amount</th>
                                <th>Total Cost</th>
                                <th>Remove Item</th>
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

                                                <input id="button" type="button" value="Not Removable" onclick="">
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

                    <?php
                    if(!empty($_GET['total'])
                    && !empty($_GET['paymentType']))
                    {
                    $total = $_GET["total"];
                    $paymentType = $_GET["paymentType"];
                    if($paymentType == "Cash"){?>
                        <div id="box" style="font-size: 20px;margin: 10px;"> This is for Cash on Delivery</div>
                        <?php
                       try{
                        // PHP Data Object
                        $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket;","root","");
                        ///setting 1 environment variable
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
                        $cartquery="SELECT * FROM cart
                            WHERE b_username = '$username'
                            GROUP BY b_username, p_id";
    
                            $returnobj=$conn->query($cartquery);
                            $returntable=$returnobj->fetchAll();
    
                            if($returnobj->rowCount() >= 1)
                            {
    
                            foreach($returntable as $row){
    
                                $name = $row[2];
                                $amount = $row[3];
                                $total = $row[4];
                                $pid = $row[1];
                                $f_username = null;
    
                                $cartquery1="SELECT f_username FROM product
                                WHERE p_id = $pid";
    
                                $returnobj1=$conn->query($cartquery1);
                                $returntable1=$returnobj1->fetchAll();
    
                                if($returnobj1->rowCount() == 1)
                                {
                                    foreach($returntable1 as $row1){
                                        $f_username = $row1[0];
                                    }
                                }
    
                                $paymentquery="INSERT INTO orders VALUES (NULL, NULL, '$amount kg.<br>$total taka.' , 'Processing', '".$username."', '".$f_username."', NOW(), $pid, 'Cash On Delivery')";

    
                                //update home
                                $deletecart="DELETE FROM cart WHERE b_username = '".$username."' AND p_id = $pid;";
                                
    
                                $msg = "Order requested for $amount kg of $name for total $total taka on Cash On delivery. <br>Check your order history for more details.";
                                $msg1 = "Order requested for $amount kg of $name for total $total taka on Cash On delivery.";
                                $notifycart="INSERT INTO notification VALUES (NULL, '$msg', NOW(), '$f_username', '$username', '$msg1')";
                                
    
    
                                $conn->exec($paymentquery);
                                $conn->exec($deletecart);
                                $conn->exec($notifycart);
    
    
                            }
                        }
    
    
                        ?>
                        <script>alert("Order successful");</script>
                        <script>location.assign("orderhistory.php");</script>
                        <?php
    
    
                    }
                    catch(PDOException $ex){
                        ?>
                            <script>alert("Database Error!");</script>
                            <script>location.assign("cart.php");</script>
                        <?php
                    }
                ?>
                        
                        <input id="button" type="button" value="Back to Cart" onclick="back()">
                        <?php 
                    }
                    else if($paymentType == "bKash"){

                        try{
                            // PHP Data Object
                            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket;","root","");
                            ///setting 1 environment variable
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
                            

                            $cartquery="SELECT c.b_username, p.f_username, SUM(c.totalPrice) FROM cart as c JOIN product as p ON p.p_id = c.p_id
                            WHERE c.b_username = '$username'
                            GROUP BY c.b_username, p.f_username";


        
                                $returnobj=$conn->query($cartquery);
                                $returntable=$returnobj->fetchAll();
        
                                if($returnobj->rowCount() >= 1)
                                {
                                   ?> <div id="box" style="font-size: 20px;margin: 50px;"> 
                                   <br> Make the payment through bKash for the corresponding Farmers.
                                   <?php
        
                                foreach($returntable as $row){
        
                                    $bkashamount = $row[2];
                                    $f_username = $row[1];

                                    
        
                                    $cartquery1="SELECT bKash_no FROM farmer
                                    WHERE f_username = '$f_username'";
        
                                    $returnobj1=$conn->query($cartquery1);
                                    $returntable1=$returnobj1->fetchAll();
        
                                    if($returnobj1->rowCount() == 1)
                                    {
                                        foreach($returntable1 as $row1){
                                            $bKash_no = $row1[0];
                                        }
                                    }
                                    ?>

                                  
                                    
                                    <form action="payprocess.php" method="POST">
    
                                    <br>


                                    <label for="Pay Amount">Total Amount</label>:
                                    <input class="text" type="text" id="total" name="total" value="<?php echo $bkashamount; ?>" readonly>
                                    <br>
                                    <label for="Pay Amount">bKash Number</label>:
                                    <input class="text" type="text" id="total" name="total" value="+880<?php echo $bKash_no; ?>" readonly>
                                    <br>
                                    <label for="Pay Amount">Farmer Name</label>:
                                    <input class="text" type="text" id="total" name="farmer" value="<?php echo $f_username; ?>" readonly>
                                    <br>

                                    <label for="trxid">Transaction ID</label>:

                                    <input class="text" type="text" id="trxid" name="trxid" >


                                    <br><br>

                                    <input id="button" type="submit" value="Confirm Payment">

                                    </form>


                                   
                                    

                                    <?php
    
        
        
                                }
                            }
        
        
        
        
                        }
                        catch(PDOException $ex){
                            ?>
                                <script>alert("Database Error!");</script>
                                <script>location.assign("cart.php");</script>
                            <?php
                        }

                        ?>

                       
                    <br>
    


                    <input id="button" type="button" value="Back to Cart" onclick="back()">
    
                  
    
    
                    <?php
                    }

                }
                else{?>
                    <script>
                    location.assign("cart.php");
                    </script>
                    <?php
                }
                    ?>

                   

        <br>


        <br>

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

                    function removeitem(pid){
                        location.assign('removeitem.php?prodid='+pid);
                    }

                    function orderhistory(){
                        location.assign('orderhistory.php');
                    }

                    function back(){
                        location.assign('cart.php');
                    }

        </script>


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
