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
       && isset($_POST['role'])

       && !empty($_POST['username'])
       && !empty($_POST['mypass'])
       && !empty($_POST['myname'])
       && !empty($_POST['address'])
       && !empty($_POST['contact'])
       && !empty($_POST['account'])
       && !empty($_POST['district'])
       && !empty($_POST['city'])
       && !empty($_POST['role'])
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
        $role=$_POST['role'];

        

            ///store the data to database
        try{
            // PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $signupquery="SELECT * FROM ".$role." WHERE ".$role[0]."_username = '".$username."'";
            
        
            $returnobj = $conn->query($signupquery);
            $returntable = $returnobj->fetchAll();

            if($returnobj->rowCount() == 1)
            {
                ?>
                <script>alert("Usearname already exists.");</script>
                <script>location.assign("register.php");</script>
                <?php
            }
            else
            {
                $enc_password = md5($pass);
                
                ///executing mysql query
                //$signupquery="insert into farmer values('$username','$enc_password','$name','$address', $contact, $account, '$district','$city')";
                $signupquery="INSERT into ".$role." values('$username','$enc_password','$name','$address', $contact, $account, '$district','$city')";
                
                $conn->exec($signupquery);
                
                ?>
                <script>alert("Registration successful.\nNow login with username and password!");</script>
                <script>location.assign("login.php");</script>
                <?php
            }
            
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
        <script>alert("Fill up all the information.");</script>
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

        
?>
