<?php
session_start();
if(
    isset($_SESSION['useremail'])
    && !empty($_SESSION['useremail'])
)
{
    ?>

    <h2>Welcome Home</h2>
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