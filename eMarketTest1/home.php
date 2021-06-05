<?php

session_start();

if(
    isset($_SESSION['username'])
    && isset($_SESSION['role'])
    && !empty($_SESSION['username'])
    && !empty($_SESSION['role'])
){
    ///already logged in user
    $role = $_SESSION['role'];
    $username = $_SESSION['username'];
    
    ?>
        <!DOCTYPE html>

        <html lang="en">
            <head>
                <meta charset="utf-8">
                <title>Home</title>
                
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
                            width: 120px;
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
                
                
                
                <br>
                <br>

                <form id="box" action="farmers.php" method="GET">

                <div style="font-size: 20px;margin: 10px;">Welcome 
                <?php 
                    echo $username; 
                ?></div>
                    
                    <input class="text" type="search" id="search" name="search" placeholder="farmer name">
                    <br><br>
                    <input id="button" type="submit" value="Search farmer">
                    
                </form>

                <br>
                <br>

                <input id="button" type="button" value="Upload Product" onclick="uploadfn()">
                
                
                
                <div>
                <div style="font-size: 20px;margin: 10px;">All Product List</div>
                    
                    <table id="ptable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Available Quantity</th>
                                <th>Price per Unit</th>
                                <th>Unit</th>
                                <th>Added time</th>
                                <th>Farmer name</th>
                                <th>Update/Delete</th>
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
                                $mysqlquery="SELECT * FROM product";
                                
                                $returnobj=$conn->query($mysqlquery);
                                $returntable=$returnobj->fetchAll();

                                

                                
                                if($returnobj->rowCount()==0){
                                    ?>
                                        <tr>
                                            <td colspan="8">No values found</td>
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
                                                <img src="<?php echo $row['productImage'] ?>" width="300" height="300">
                                            </td>
                                            <td><?php echo $row['Weight'] ?></td>
                                            <td><?php echo $row['Price_perUnit'] ?></td>
                                            <td><?php echo $row['Unit'] ?></td>
                                            <td><?php echo $row['Added_date'] ?></td>
                                            <td><?php echo $row['farmerf_username'] ?></td>
                                            
                                            <td>
                                                <input type="button" value="Update"><br>
                                                <input type="button" value="Delete" onclick="deletefn(<?php echo $row['id'] ?>);">
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
                
                <br>
                <input id="button" type="button" value="Click to Logout" onclick="logoutfn();">
                
                <script>
                    function home(){
                        location.assign('home.php');   ///default GET method
                    }
                    function logoutfn(){
                        location.assign('logout.php');   ///default GET method
                    }

                    function profile(){
                        location.assign('profile.php');   ///default GET method
                    }
                    
                    function uploadfn(){
                        location.assign('upload.php');
                    }
                    
                    function deletefn(pid){
                        ///for multiple values: file.php?varname=value&var1=value1
                        location.assign('delete.php?prodid='+pid);
                    }
                </script>
                
                
            </body>
        </html>

    <?php
}
else{
     ?>
        <script>alert("login first!");</script>
        <script>location.assign("login.php");</script>
    <?php
}


?>

