<?php
    date_default_timezone_set( 'Asia/Dhaka' );
    session_start();
    if(isset($_SESSION['f_username']) && !empty($_SESSION['f_username'])){

      if( isset($_POST['p_name']) &&
          isset($_FILES['p_image']) &&
          isset($_POST['p_quantity']) &&
          isset($_POST['p_price']) &&
          isset($_POST['unit']) &&
          !empty($_POST['p_name']) &&
          !empty($_FILES['p_image']) &&
          !empty($_POST['p_quantity']) &&
          !empty($_POST['p_price']) &&
          !empty($_POST['unit'])
        ){
            $p_name=$_POST['p_name'];
            $p_image=$_FILES['p_image'];
            $p_quantity=$_POST['p_quantity'];
            $p_price=$_POST['p_price'];
            $unit=$_POST['unit'];
            $datetime=date('Y-m-d H:i:s');

            $img_name=$p_image['name'];
            $img_tmp_path=$p_image['tmp_name'];
            $img_dst_path="Product_Image/$img_name";

            move_uploaded_file($img_tmp_path,$img_dst_path);

            $f_username = $_SESSION['f_username'];

            try{

              $conn=new PDO("mysql:host=localhost:3306;dbname=localemarket;", "root", "");
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sqlquary="INSERT INTO product VALUES(NULL, '$p_name', '$img_dst_path', $p_quantity, '$unit', $p_price, '$datetime', '$_SESSION[f_username]')";
              $conn->exec($sqlquary);

              ?>
              <script>location.assign("seller_home.php");</script>
              <?php
            }
            catch(PDOExeption $e){
              ?>
              <script>location.assign("product_entry.php");</script>
              <?php
            }
        }
        else{
          ?>
          <script>location.assign("product_entry.php");</script>
          <?php
        }
    }
    else{
      ?>
      <script>location.assign("s_login.php");</script>
      <?php
    }
?>
