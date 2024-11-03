<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatibile" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>User Profile</title>
        <link rel="stylesheet"  href="css/sdelete.css">
    </head>

<body>
    
    
    <div class="loggin">
        
       
        <form method="post" action="sdelete.php">
        <h1>Delete Account</h1>
           

                <div class="input-box">
                
                    <input type="text" name="uname" placeholder="username">
                </div>
             
             <button type="Submit" class="btn" name="submit" >Delete</button>
        </form>
        <script>
            
          function msg() 
          {
           alert("Delete successfully!");
            }
           </script>
    </div>
    
</body>