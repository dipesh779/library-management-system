
<?php
require("config.php");



if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "select * from users where username='".$username."' and upassword='".$password."'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  

  if($row){
      //echo "Hello User";
      $_SESSION["username"]=$username;
      header("Location:html/user.php");
  }
  else{
      echo "Please enter the valid username and password.";
  }

}

if(isset($_POST["signup"])){
  $name = $_POST["name"];
  
    $suname = $_POST["suname"];
    $email = $_POST["email"];
    $supassword = $_POST["supassword"];

    $sql="INSERT INTO users (fullname,email,username,upassword) VALUES (?,?,?,?)";
    $stmt=$con->prepare($sql);
    $result=$stmt->execute([$name,$email, $suname ,$supassword ]);

    if($result){
      header("Location:index.php");
    }else{
      echo "error";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Library Management System</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" value="Login" class="btn solid" name="login"/>
            <h5 id="sign-up-btn" style="color:#4481eb; cursor:pointer;">Create new account</h5>
            
            <div class="social-media">
              
            </div>
          </form>
          <form action="#" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username"  name="suname"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email"  name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="supassword" />
            </div>
            <input type="submit" class="btn" value="Sign up" name="signup" />
            <h5 id="sign-in-btn" style="color:#4481eb; cursor:pointer;">Login here</h5>
            
            <div class="social-media">
              
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            
          </div>
          <img src="resources/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            
          </div>
          <img src="resources/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
