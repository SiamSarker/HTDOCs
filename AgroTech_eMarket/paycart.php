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

                                                <input id="button" type="button" value="Not Removeable" onclick="">
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


                    $total = $_GET["total"];


                    ?>




                    <div id="box" style="font-size: 20px;margin: 10px;">
                <br>



                <form action="payprocess.php" method="POST">

                <br>


                <label for="total">Total Amount</label>:
                <input class="text" type="text" id="total" name="total" value="<?php echo $total; ?>" readonly>
                <br>


                <label for="trxid">Transaction ID</label>:

                <input class="text" type="text" id="trxid" name="trxid" >


                <br><br>

                <input id="button" type="submit" value="Confirm Payment">
                <input id="button" type="button" value="Back to Cart" onclick="back()">

                </form>





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
