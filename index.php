<?php
//     session_start();

//     // include("connection.php");
//     $local_db = new mysqli("localhost", "root", "", "inventory");
//     if ($local_db->connect_error){
//     die("Connection failed". $local_db->connect_error);
    
//     }
//     echo "Connection successful";
    

//     // if($_SERVER['REQUEST_METHOD'] == "POST")
//     // {
//     //     $userName = $_POST['username'];
//     //     $passWord = $_POST['password'];

//     //     if(!empty($userName) && !empty($passWord)){
//     //         $query = "Insert into inventory (username, password) values ('$userName', '$passWord' )";
//     //         mysqli_query($con, $query);
//     //         echo "<script type='text/javascript'> alert('Successfully logged in')</script>";
//     //     }else {
//     //         echo "<script type='text/javascript'> alert('Enter valid credentials')</script>";

//     //     }
//     // }
//     // var_dump($con);


//     if (isset($_POST['submit']))
// {
//     if(empty($_POST['username']) || empty($_POST['password'])){
//         echo 'Fill in credentials';
//     }
//     else{
//         $userName = $_POST['username'];
//         $passWord = $_POST['password'];

//         $query = " insert into stock (username, password) values('$userName', '$passWord')";
//         $results = mysqli_query($local_db,$query);
        
//         if($results){
//             echo 'data insterted';
//         }
        
//     }
// }
// $local_db->close();

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
        <form class="form" method="POST" action="">
            <!-- <div class="form-group"> -->
                <div><label class="username">Username:</label></div> 
                <input class="inputlog" type="text" name="username" placeholder="username.." required><br>
                <p class="error"></p>
                <p class="success"></p>
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <div><label class="password">Password:</label></div>
                <input class="inputlog" type="text" name="password" placeholder="password.." required><br>
                <p class="error"></p>
                <!-- <p class="success"></p> -->
        
        
            <!-- </div> -->
            <button class="logbut" type="submit" value="submit">
                <span>login</span>
            </button><br>
            <a href="forgotPas.html">Forgot Pasword?</a><br>
            <a href="register.html">New user? Register here</a><br>
        </form>
    </div>
    
        <div class="popup-content">
            <a href="products.php">click here to continue</a>
        </div>
  
    <script src="login.js"></script>
    
</body>
</html>