<!DOCTYPE html>
<html lang="en">
    <title></title>
    
    <head>
        <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Dhaka")
                {
                    var arr=["Dhaka","Badda"];
                }
                else if(a==="Chittagong")
                {
                    var arr=["Comilla","Daudkandi"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
        </script>
    </head>
    <body>
        <select id="input" onchange="random_function()">
            <option>select option</option>
            <option>Dhaka</option>
            <option>Chittagong</option>
        </select>
        <div>
           <select id="output" onchange="random_function1()">
        </div>
    </body>
</html>