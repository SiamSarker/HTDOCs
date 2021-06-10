<?php

session_start();
if(
    isset($_SESSION['username'])
    && isset($_SESSION['role'])
    && !empty($_SESSION['username'])
    && !empty($_SESSION['role']))
{
    $role = $_SESSION['role'];
    $username = $_SESSION['username'];
    $pid = $_GET['prodid'];
        
        
        try{
            ///PDO = PHP Data Object
            $conn=new PDO("mysql:host=localhost:3306;dbname=eMarket2;","root","");
            ///setting 1 environment variable
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            ///mysql query string
            $mysqlquerystring="SET foreign_key_checks = 0;
            DELETE FROM Buyer_Product WHERE Productp_id = '".$pid."' && Buyerb_username = '".$username."';
            
            SET foreign_key_checks = 1;";
            
            
            $conn->exec($mysqlquerystring);
            
            ?>
            <script>alert("Product removed from cart!");</script>
            <script>location.assign("cart.php");</script>
            <?php
        }
        catch(PDOException $ex){
            ?>
                <script>location.assign("cart.php");</script>
            <?php
        }
        
    }
    else{
        ?>
            <script>location.assign("cart.php");</script>
        <?php 
    }


?>