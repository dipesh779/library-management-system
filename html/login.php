<?php
//mysqli 
$servername = "localhost";
$user = "root";
$pass = "";
$db = "libraryusers";

//Session start
session_start();

$con = mysqli_connect($servername,$user,$pass,$db);
if($con->connect_errno){
    die("Connection Failed: ".mysqli_connect_errno());
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from user where username='".$username."' and password='".$password."'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    if($row['usertype']=='user'){
        //echo "Hello User";
        $_SESSION["username"]=$username;
        header("Location:user.php");
    }
    elseif($row['usertype']=='admin'){
        //echo "Hello Admin";
        $_SESSION["username"]=$username;
        header("Location:admin.php");
    }
    else{
        echo "Please enter the valid username and password.";
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Login</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <label for="uname">Username: </label>
            <input type="text" name="username" id="uname">
            <br>

            <label for="password">Password: </label>
            <input type="password" name="password" id="pwd">
            <br>

            <input type="submit" value="Login">
        </form>
    </center>

</body>
</html>