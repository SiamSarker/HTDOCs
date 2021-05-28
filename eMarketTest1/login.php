<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <h4>Login</h4>
    <form action="loginprocess.php" method="POST">
        <label for="username">Username</label>:
        <input type="text" id="username" name="username">
        <br>
        <label for="mypass">Password</label>:
        <input type="password" id="mypass" name="mypass">
        <br>
        <div>
			<input type="radio" name="Role" value="farmer"> Farmer<br>
			<input type="radio" name="Role" value="buyer"> Buyer<br>
		</div>
        <input type="submit" value="Click to Login">
    </form>

    <div class="textbox"><h3>Don't have an account? Sign up!</h3></div>

				<h1>Select user type and click sign up</h1>

    <form action="register.php" method="POST"> 
        <div>
			  <input type="radio" name="Role" value="Farmer"> Sign up as a Farmer<br>
			  <input type="radio" name="Role" value="Buyer"> Sign up as an Buyer<br>				  

		</div>
			
            <button type="submit" class="btn btn-primary">SIGN UP</button>

    </form>

    <?php
        session_destroy();    
    ?>

</body>

</html>