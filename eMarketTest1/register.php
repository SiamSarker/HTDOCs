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
            <select id="input" name="district" onchange="random()">
                <option selected="selected" value="">Select District Name</option>
                <option value="district">district</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
            </select>

            <br>
            <div>
            <label for="city">City</label>:
            <select name="city" id="output">
            <option selected="selected" value="">Select City Name</option>
            </select>
            </div>            

        
            <div>
            Are you a :
            <br>
            <input type="radio" name="role" value="buyer"> Buyer<br>
			<input type="radio" name="role" value="farmer"> Farmer<br>
		    </Are>
            <br>
            <input type="submit" value="Click to Register">
            
        </form>

        <br><br>

        <input type='button' value="Back to login in" onclick="login();">
        <input type='button' value="Reset" onclick="reset();">

        <script>
            function random(){
                var a=document.getElementById("input").value;
                if(a === "Dhaka")
                {
                    var arr=["Dhaka","Badda"];
                }
                else if(a === "Chittagong")
                {
                    var arr=["Comilla","Daudkandi"];
                }
                else if(a === "district")
                {
                    var arr=["city"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
            function login(){
                location.assign('login.php');
            }
            function reset(){
                location.assign('register.php');
            }

        </script>
        


    </body>
</html>
