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


        <h4>
                <input type="button" value="Home Page" onclick="home()"> 
                <input type="button" value="My Profile" onclick="profile()">
        </h4>
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
                ?>


                <form action="profileprocess.php" method="POST">
                <br>

                <label for="myname">Name</label>:
                <input type="text" id="myname" name="myname" value="<?php echo $row['Name'];?>">

                <br>

                <label for="oldpass">Old Password</label>:
                <input type="password" id="oldpass" name="oldpass" placeholder="fill it if changing the password">

                <br>

                <label for="mypass">New Password</label>:
                <input type="password" id="mypass" name="mypass" placeholder="fill it if changing the password">

                <br>

                <label for="addrees">Address</label>:
                <input type="text" id="address" name="address" value="<?php echo $row['Address'];?>">

                <br>

                <label for="contact">Contact No</label>:
                <input type="number" id="contact" name="contact" value="<?php echo "0".$row['Contact_no'];?>">

                <br>

                <label for="account">Account No</label>:
                <input type="number" id="account" name="account" value="<?php echo $row[$role.'_acc_no'];?>">

                <br>

                <label for="district">District</label>:
                <input type="text" id="district" name="district" value="<?php echo $row['District'];?>">

                <br>

                <label for="city">City</label>:
                <input type="text" id="city" name="city" value="<?php echo $row['City'];?>">

                <br>
                <br>

                <input type="submit" value="Save Changes">
                
                </form>

                <?php
                
            }
            }
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign("login.php");</script>
            <?php
        }
        
        ?>

        <br>
        <br><br>

        



        <input type="button" value="Click to Logout" onclick="logoutfn();">
        

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

                    // function update(){
                    //     location.assign('updateprofile.php');   ///default GET method
                    // }

                    

        </script>

        
        
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