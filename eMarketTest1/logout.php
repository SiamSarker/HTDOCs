<?php

session_start();
if(
    isset($_SESSION['username'])
    && isset($_SESSION['role'])
    && !empty($_SESSION['username'])
    && !empty($_SESSION['role'])
){
    unset($_SESSION['username']);
    unset($_SESSION['role']);
    session_destroy();
    
    ?>
        <script>location.assign("login.php");</script>
    <?php 
    
}
else{
    ?>
        <script>location.assign("login.php");</script>
    <?php 
}

?>