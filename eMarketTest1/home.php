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
                <h4>Home Page 
                <input type="button" value="My Profile" onclick="profile()">
                </h4>
                Welcome 
                <?php 
                    echo $username; 
                ?>
                
                <br>
                <br>

                <form action="farmers.php" method="GET">
                    
                    <input type="search" id="search" name="search" placeholder="farmer name">
                    <br><br>
                    <input type="submit" value="Search farmer">
                </form>

                <br>
                <br>
                
                <input type="button" value="Upload Product" onclick="uploadfn()">
                
                <div>
                    <h5>All Product List</h5>
                    <table id="ptable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Available Quantity</th>
                                <th>Price per Unit</th>
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
                                            <td colspan="5">No values found</td>
                                        <tr>
                                    <?php
                                }
                                else{
                                    foreach($returntable as $row){
                                        ?>

                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td>
                                                <img src="<?php echo $row['imagepath'] ?>" width="300" height="300">
                                            </td>
                                            <td><?php echo $row['qnt'] ?></td>
                                            <td><?php echo $row['price'] ?></td>
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
                                        <td colspan="5">No values found</td>
                                    <tr>
                                <?php
                            }
                            
    
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                
                <br>
                <input type="button" value="Click to Logout" onclick="logoutfn();">
                
                <script>
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
        <script>location.assign("login.php");</script>
    <?php
}


?>

