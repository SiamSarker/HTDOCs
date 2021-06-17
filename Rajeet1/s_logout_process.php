<?php
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){
      unset($_SESSION['f_username']);
      session_destroy();
      ?>
      <script>location.assign('s_login.php');</script>
      <?php
    }
    else{
        ?>
        <script>location.assign("s_login.php");</script>
        <?php
    }
?>
