<?php
    
    require_once('connection.php');


    if (isset($_POST['submit']))
{

        $userName = $_POST['username'];
        $passWord = $_POST['password'];

        $query = mysqli_query($local_db, "Insert into stock (username, password) Values ('$userName', '$passWord')");

        
        if($query){
            echo "<script>alert('data inserted successfully')</script>";
        }else{
            echo "<script>alert('error connection to database')</script>";
        }     

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styel.css" >
</head>
<body>
    
    <div class="box">
        <h1>Welcome to Art In Voyage Exclusive Shop!</h1>
        <form class="form" method="POST" action="./products.php">
            <!-- <div class="form-group"> -->
                <div><label class="">Username:</label></div> 
                <input class="inputlog" type="text" name="username" placeholder="username.." required><br>
                <p class="error"></p><p class="success"></p>
                
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <div><label class="">Password:</label></div>
                <input class="inputlog" type="text" name="password" placeholder="password.." required><br>
                
                <!-- <p class="success"></p> -->
        
        
            <!-- </div> -->
            <button class="logbut" type="submit" value="submit">
                <span>login</span>
            </button><br>
            <a href="forgotPas.html">Forgot Pasword?</a><br>
            <a href="register.html">New user? Register here</a><br>
        </form>
    </div>
    
        
  
    <script src="./login.js" charset="utf-8"></script>
    <script src="./logFactory.js" charset="utf-8"></script>
    

    
</body>
</html>