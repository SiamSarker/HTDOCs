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
        <title>Profile</title>
        </head>

        <body>

        <h4>Profile Page</h4>
        <br><br>
        <h2>Welcome <?php echo $username?></h2>

        <?php 

        try{
            // PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            ///executing mysql query
            $signupquery="SELECT * FROM ".$role." WHERE ".$role[0]."_username = '".$username."'";
            
        
            $returnobj = $conn->query($signupquery);
            $returntable = $returnobj->fetchAll();

            if($returnobj->rowCount() == 1)
            {
                foreach($returntable as $row){
                ?><br><?php
                echo "Username : ".$row[$role[0].'_username'];
                ?><br><?php
                echo "Full name : ".$row['Name'];
                ?><br><?php
                echo "Address : ".$row['Address'];
                ?><br><?php
                echo "District : ".$row['District'];
                ?><br><?php
                echo "City : ".$row['City'];
                ?><br><?php
                echo "Phone Number : +880".$row['Contact_no'];
                ?><br><?php
                echo "Account Number : ".$row[$role.'_acc_no'];
            }
            }
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign("login.php");</script>
            <?php
        }
        ?>
        
        </body>
    </html>

    <?php
}
else
{
    ?>
            <script>window.location.assign("login.php");</script>
    <?php
}

?>