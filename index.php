<?php
    // session_start();

    // include("connection.php");
    $local_db = new mysqli("localhost", "root", "", "inventory");
    if ($local_db->connect_error){
    die("Connection failed". $local_db->connect_error);
    }
    echo "Connection successful";
    $local_db->close();

    // if($_SERVER['REQUEST_METHOD'] == "POST")
    // {
    //     $userName = $_POST['username'];
    //     $passWord = $_POST['password'];

    //     if(!empty($userName) && !empty($passWord)){
    //         $query = "Insert into inventory (username, password) values ('$userName', '$passWord' )";
    //         mysqli_query($con, $query);
    //         echo "<script type='text/javascript'> alert('Successfully logged in')</script>";
    //     }else {
    //         echo "<script type='text/javascript'> alert('Enter valid credentials')</script>";

    //     }
    // }
    // var_dump($con);


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
        <form method="POST" action="connection.php">
            <!-- <div class="form-group"> -->
                <div><label class="username">Username:</label></div> 
                <input class="inputlog" type="text" name="username" placeholder="username.." required><br>
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <div><label class="password">Password:</label></div>
                <input class="inputlog" type="text" name="password" placeholder="password.." required><br>
        </form>
        <form action="search.js" method="post">
            <!-- </div> -->
            <button class="logbut" type="submit" value="submit" onclick="yeske();">
                <a class="loginlink" href="./products.php" >LOGIN</a>
            </button><br>
            <a href="#">Forgot Pasword?</a><br>
            <a href="#">New user? Register here</a><br>
        </form>
    </div>
    <script src="search.js"></script>
    
</body>
</html>