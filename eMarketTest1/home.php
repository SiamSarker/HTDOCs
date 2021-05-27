<?php
session_start();
if(
    isset($_SESSION['username'])
    && !empty($_SESSION['username'])
)
{
    ?>

    <h2>Welcome Home
    <?php echo $_SESSION['username'];?>
    </h2>
    Hello there!
    <?php
}
else
{
    ?>
    <script>location.assign("login.php");</script>;
    <?php
}

?>