<?php

session_start();
if(
        isset($_SESSION['useremail'])
    &&  !empty($_SESSION['useremail'])
){
    ///show upload page here
    
    ?>
        <h4>Upload Product</h4>
        <form action="uploadprocess.php" method="POST" enctype="multipart/form-data">
            <label for="pname">Name:</label>
            <input type="text" id="pname" name="pname">
            <br><br>
            <label for="pimage">Image:</label>
            <input type="file" id="pimage" name="pimage">
            <br><br>
            <label for="pqnt">Quantity:</label>
            <input type="text" id="pqnt" name="pqnt">
            <br><br>
            <label for="pprice">Price per Unit:</label>
            <input type="text" id="pprice" name="pprice">
            <br><br>
            <input type="submit" value="Upload">
        </form>

    <?php
    
}
else{
    ?>
        <script>location.assign("login.php");</script>
    <?php 
}

?>