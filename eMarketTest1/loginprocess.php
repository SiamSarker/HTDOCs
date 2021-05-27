<?php
/*
    1. collect the data from login.php page
    2. encrypt the collected password
    3. match the collected data with the database data
    4. if match, we will forward to the home page
    5. if not found, we'll forward to log in page
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(   isset($_POST['username']) 
       && isset($_POST['mypass'])
       && !empty($_POST['username'])
       && !empty($_POST['mypass'])
    ){
        $username=$_POST['username'];
        $pass=$_POST['mypass'];
        
        
        ///store the data to database
        try{
            // PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=dbmsadb;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $enc_password = md5($pass);
            
            // checking Data
            $myquery = "SELECT * FROM farmer WHERE f_username = '$username' and pass = '$enc_password'";

            $returnobj = $conn->query($myquery);  // the return object is pdo statement object

            if($returnobj->rowCount() == 1){
                session_start();
                $_SESSION['username'] = $username;   //after session starts
                ?>
                <script>location.assign("home.php");</script>
                <?php
            }
            else {
            ?>
                <script>location.assign("login.php");</script>
            <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("login.php");</script>
            <?php
        }
        
    }
    else{
        ///if email and password data is empty or not set
        /// register.php --> registeruser.php --> register.php
    ?>
        <script>location.assign("login.php");</script>
    <?php
        
    } 
}
else
{
    ?>
        <script>location.assign("login.php");</script>
    <?php
}


?>