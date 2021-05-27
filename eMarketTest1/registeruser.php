<?php
/*
step 1: to receive the email and password data from register.php
step 2: to store the data within the database
step 3: if data store is successful then forward to login.php
        else forward to register.php
*/


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(   isset($_POST['username']) 
       && isset($_POST['mypass'])
       && isset($_POST['myname'])
       && isset($_POST['address'])
       && isset($_POST['contact'])
       && isset($_POST['account'])
       && isset($_POST['district'])
       && isset($_POST['city'])

       && !empty($_POST['username'])
       && !empty($_POST['mypass'])
       && !empty($_POST['myname'])
       && !empty($_POST['address'])
       && !empty($_POST['contact'])
       && !empty($_POST['account'])
       && !empty($_POST['district'])
       && !empty($_POST['city'])
    )
    {
        $username=$_POST['username'];
        $pass=$_POST['mypass'];
        $name=$_POST['myname'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $account=$_POST['account'];
        $district=$_POST['district'];
        $city=$_POST['city'];
        
        
        ///store the data to database
        try{
            // PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $enc_password = md5($pass);
            
            ///executing mysql query
            $signupquery="insert into farmer values('$username','$enc_password','$name','$address', $contact, $account, '$district','$city')";
            // $signupquery="insert into farmer values('ARIvsfF','12efed35','arif','address', 1234567890 , 1234567890 ,'district','city')";
            
            $conn->exec($signupquery);
            
            ?>
                <script>location.assign("login.php");</script>
            <?php
            // insert into farmer values('as','efe','sd','dwd', 1234321891 , 1234567890 ,'district','city')
            
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
