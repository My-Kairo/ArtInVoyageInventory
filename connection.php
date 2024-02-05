<?php

// $firstName = $_POST['username'];
// $password = $_POST['password'];

// $local_db = new mysqli("localhost", "root", "", "inventory");
//     if ($local_db->connect_error){
//     die("Connection failed". $local_db->connect_error);
//     }else{
//         $inserting = $local_db->prepare("insert into stock(userName, passWord) values(?,?)");
//         $inserting->bind_param("ss", $userName, $passWord);
//         $inserting->execute();
//         echo "logged in successfelly";
//         $inserting->close();
//         $local_db->close();
//     }



    require_once("index.php");
    require_once("drinks.php");
// connecting to DB
$local_db = new mysqli("localhost", "root", "", "inventory");
    if ($local_db->connect_error){
    die("Connection failed". $local_db->connect_error);
    }
    echo "Connection successful";
    $local_db->close();
// closing DB connection

// ...................................

// login table created

$details = "CREATE TABLE stock (
    id INT(11) UNSIGNED AUTO_INCREAMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(15) NOT NULL
)";

if (isset($_POST['submit']))
{
    if(empty($_POST['username']) || empty($_POST['password'])){
        echo 'Fill in credentials';
    }
    else{
        $userName = $_POST['username'];
        $passWord = $_POST['password'];

        $query = " insert into stock (username, password) values('$userName', '$passWord')";
        $results = mysqli_query($local_db,$query);
        
        if($results){
            $output = header("location:products.php");
            echo $output;
        }
        
    }
}
else 
{
    header("location:index.php");
}

if($local_db->query($details) === TRUE) {
    echo "table created";
}else {
    echo "error creating table: " . $local_db->error;
}



?>
