<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>
    
    <body>
        <h4>Register</h4>
        <form action="registeruser.php" method="POST">
            <label for="username">Username</label>:
            <input type="text" id="username" name="username">
            <br>
            <label for="mypass">Password</label>:
            <input type="password" id="mypass" name="mypass">
            <br>
            <label for="myname">Name</label>:
            <input type="text" id="myname" name="myname">
            <br>
            <label for="addrees">Address</label>:
            <input type="text" id="address" name="address">
            <br>
            <label for="contact">Contact No</label>:
            <input type="number" id="contact" name="contact">
            <br>
            <label for="account">Account No</label>:
            <input type="number" id="account" name="account">
            <br>
           

            <label for="district">District</label>:
            <select name="district">
            <option selected="selected" value="">Select District Name</option>
            <option value="district">district</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            </select>

            <br>
            <div>

            <label for="city">City</label>:
            <select name="city">
            <option value="" selected="selected">Select City Name</option>
            <option value="city">city</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Comilla">Comilla</option>
            </select>
            </div>


            
            Are you a :
            
            <div>
            <input type="radio" name="role" value="buyer"> Buyer<br>
			<input type="radio" name="role" value="farmer"> Farmer<br>
		    </div>
            <br>
            <input type="submit" value="Click to Register">
            
        </form>

        <br><br>

        <input type='button' value="Back to login in" onclick="login();">

        <script>
            function login(){
                location.assign('login.php');
            }

        </script>
        


    </body>
</html>
