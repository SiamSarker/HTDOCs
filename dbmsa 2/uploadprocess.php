<?php

session_start();
if(
        isset($_SESSION['useremail'])
    &&  !empty($_SESSION['useremail'])
){
    ///perform upload process here
    
    /*
    1. collect the data
    2. store the data to database
    3. store the file to web server file folder
    4. forward to home page
    */
    
    if(
            isset($_POST['pname'])
        &&  isset($_FILES['pimage'])
        &&  isset($_POST['pqnt'])
        &&  isset($_POST['pprice'])
        &&  !empty($_POST['pname'])
        &&  !empty($_FILES['pimage'])
        &&  !empty($_POST['pqnt'])
        &&  !empty($_POST['pprice'])
    ){
        /// print_r($_FILES['pimage']);
        
        $name=$_POST['pname']; ///string value
        $image=$_FILES['pimage']; ///array object
        $price=$_POST['pprice'];
        $qnt=$_POST['pqnt'];
        
        
        $image_name=$image['name'];
        $image_tmp_path=$image['tmp_name'];
        $to="productimage/$image_name";
        
        move_uploaded_file($image_tmp_path,$to);
        
        
        ///store the data to database
        try{
            ///PDO = PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=dbmsadb2;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            ///mysql query string
            $mysqlquerystring="INSERT INTO product VALUES(NULL,'$name', '$to', $qnt, $price)";
            
            $conn->exec($mysqlquerystring);
            
            ?>
                <script>location.assign("home.php");</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("upload.php");</script>
            <?php
        }
    }
    else{
        ?>
            <script>location.assign("upload.php");</script>
        <?php 
    }
    
    
}
else{
    ?>
        <script>location.assign("login.php");</script>
    <?php 
}

?>