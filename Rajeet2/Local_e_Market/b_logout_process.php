<?php
    session_start();
    if(isset($_SESSION['b_username']) && !empty($_SESSION['b_username'])){
      unset($_SESSION['b_username']);
      session_destroy();
      ?>
      <script>location.assign('b_login.php');</script>
      <?php
    }
    else{
        ?>
        <script>location.assign("b_login.php");</script>
        <?php
    }
?>
