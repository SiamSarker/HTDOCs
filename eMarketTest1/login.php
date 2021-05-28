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
        <input type="radio" name="role" value="buyer"> Buyer<br>
			<input type="radio" name="role" value="farmer"> Farmer<br>
			
		</div>
        <input type="submit" value="Click to Login">
    </form>

    <div class="textbox"><h3>Don't have an account? Sign up!</h3></div>

				<h1>Select user type and click sign up</h1>

    <form action="register.php" method="POST"> 
        
			
            <button type="submit" class="btn btn-primary">SIGN UP</button>

    </form>

    <?php
        session_destroy();    
    ?>

</body>

</html>