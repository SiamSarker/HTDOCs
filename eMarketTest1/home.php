<?php
session_start();
echo "start ".$_SESSION['username'].$_SESSION['role'];
if(
    isset($_SESSION['username'])
    && isset($_SESSION['role'])
    && !empty($_SESSION['username'])
    && !empty($_SESSION['role'])
)
{
    $role = $_SESSION['role'];
    $username = $_SESSION['username'];
    $test = '';

    ?>

    <!DOCTYPE html>

    <html lang="en">
        <head>
        <title>Profile</title>
        </head>

        <body>

        <h4>Profile Page</h4>

        <?php 

        try{
            // PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // $enc_password = md5($pass);
            $test = 'before';
            ///executing mysql query
            $signupquery="SELECT * FROM ".$role." WHERE ".$role[0]."_username = '".$username."'";

            $test = $signupquery;
            echo $test;
        
            $returnobj = $conn->query($signupquery);
            $returntable = $returnobj->fetchAll();

            if($returnobj->rowCount() == 1)
            {
                foreach($returntable as $row){
                ?><br><?php
                echo $row["'".$role[0]."_username'"];
                ?><br><?php
                echo $row["'Name'"];
                ?><br><?php
                echo $row["'Address'"];
                ?><br><?php
                echo $row["'District'"];
                ?><br><?php
                echo $row["'City'"];
                ?><br><?php
                echo $row["'Contact_no'"];
                ?><br><?php
                echo $row["'".$role."_acc_no'"];
            }
            }
        }
        catch(PDOException $ex){
            echo "Not Found ".$test;
            ?>
                <!-- <script>window.location.assign("login.php");</script> -->
            <?php
        }

        ?>
        
        </body>
    </html>


    <h2>Welcome Home
    <?php echo $_SESSION['username'];?>
    </h2>
    Hello there!

    <?php
}
else
{
    ?>
            <script>window.location.assign("login.php");</script>
    <?php
}

?>