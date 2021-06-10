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

                
                </style>

        </head>

        <body>


        
                <input id="button" type="button" value="Home Page" onclick="home()"> 
                <input id="button" type="button" value="My Profile" onclick="profile()">
        
        <br><br>
        <div style="font-size: 20px;margin: 10px;">Welcome <?php echo $username?> </div>
        <br><br>



        <div style="font-size: 20px;margin: 10px;">All Product List</div>

        <?php $total = 0; ?>
                    
                    <table id="ptable">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product name</th>
                                <th>Total Amount</th>
                                <th>Total Cost</th>
                                <th>Confirm / Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            try{
                                ///PDO = PHP Data Object
                                $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
                                ///setting 1 environment variable
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                ///mysql query string
                                $cartquery="SELECT * FROM Buyer_Product WHERE Buyerb_username = '$username'";
                                
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
                                            <td><?php echo $row[4]." taka" ?></td>
                                            <td>
                                                <br>
                                                
                                                <input id="button" type="button" value="Remove item" onclick="gotocart(<?php echo $row['p_id'] ?>, document.getElementById('amount').value);">
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

                    <br><br>

                    Total values <?php echo $total; ?>

                    <input id="button" type="button" value="Complete Payment" onclick="gotocart(<?php echo $row['p_id'] ?>, document.getElementById('amount').value);">
                                                <br><br>

                </div>


        <br>
        <br><br>

    

        <input id="button" type="button" value="Click to Logout" onclick="logoutfn();">

        

        <br>

        <script>
                    function home(){
                        location.assign('home.php');   ///default GET method
                    }

                    function profile(){
                        location.assign('profile.php');   ///default GET method
                    }
                    function logoutfn(){
                        location.assign('logout.php');   ///default GET method
                    }

                    function update(){
                        location.assign('updateprofile.php');   ///default GET method
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