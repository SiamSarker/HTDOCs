<?php
/*
step 1: to receive the email and password data from register.php
step 2: to store the data within the database
step 3: if data store is successful then forward to login.php
        else forward to register.php
*/


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(   isset($_POST['myemail']) 
       && isset($_POST['mypass'])
       && !empty($_POST['myemail'])
       && !empty($_POST['mypass'])
    ){
        $email=$_POST['myemail'];
        $pass=$_POST['mypass'];
        
        
        ///store the data to database
        try{
            $conn=new PDO("mysql:host=localhost:3306;dbname=dbmsadb;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            
            ///executing mysql query
            $signupquery="insert into user values('$email','$pass')";
            
            $conn->exec($signupquery);
            
            ?>
                <script>location.assign("login.php");</script>
            <?php
            
            
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("register.php");</script>
            <?php
        }
        
    }
    else{
        ///if email and password data is empty or not set
        /// register.php --> registeruser.php --> register.php
    ?>
        <script>location.assign("register.php");</script>
    <?php
        
    } 
}
else{

    ?>
        <script>location.assign("register.php");</script>
    <?php


    //for other methods we will forward to register page (register.php)
    // echo '<script>location.assign("register.php");</script>';
}


?>
