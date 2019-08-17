<!DOCTYPE html>  
<html>  
    <head>  
        <title> 
            DOM Input Checkbox value Property 
        </title> 
    </head>  
      
    <body style = "text-align: center;">  
      
        <h1 style = "color: green;"> 
            GeeksforGeeks 
        </h1>  
          
        <h2>DOM Input Checkbox value Property</h2>  
          
        <form >  
          
            <!-- Below input elements have attribute 
                checked -->
            <input type="checkbox" name="check" id="GFG" 
                    value="1" checked>Checked by default<br>  
                      
            <input type="checkbox" name="check" value="2"> 
                    Not checked by default<br>  
        </form> <br> 
          
        <button onclick="myGeeks()"> 
            Submit 
        </button> 
          
        <p id="sudo" style="color:green;font-size:20px;"></p> 
          
        <!-- Script to set Input Checkbox value Property -->
        <script> 
            function myGeeks() { 
                var g = document.getElementById("GFG").value 
                        ="Geeks"; 
                          
                document.getElementById("sudo").innerHTML 
                        = "The value of the value attribute" 
                          + " was change to " + g; 
            } 
        </script> 
    </body>  
</html>   