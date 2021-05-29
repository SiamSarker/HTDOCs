<?php

session_start();

if(
    isset($_SESSION['username'])
    && isset($_SESSION['role'])
    && isset($_GET['search'])
    && !empty($_SESSION['username'])
    && !empty($_SESSION['role'])
    && !empty($_GET['search'])
){
    ///already logged in user
    $role = $_SESSION['role'];
    $username = $_SESSION['username'];
    $search = $_GET['search'];
    
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
                <h4>
                <input type="button" value="Home Page" onclick="home()"> 
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
                                
                <div>
                    <h5>All Farmers List</h5>
                    <table id="ptable">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Phone Number</th>
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
                                $mysqlquery="SELECT * FROM farmer WHERE name LIKE '%".$search."%'";

                                
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
                                            <td><?php echo $row['f_username'] ?></td>
                                            <td><?php echo $row['Name'] ?></td>
                                            <td><?php echo $row['Address'] ?></td>
                                            <td><?php echo $row['District'] ?></td>
                                            <td><?php echo $row['City'] ?></td>
                                            <td><?php echo "+880".$row['Contact_no'] ?></td>
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

                    function home(){
                        location.assign('home.php');   ///default GET method
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
        <script>alert("give farmer name!");</script>
        <script>location.assign("home.php");</script>
    <?php
}


?>

