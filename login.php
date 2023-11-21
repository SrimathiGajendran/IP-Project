<?php
include("includes/dbconnection.php");

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if(isset($_POST['register'])){
    $firstName = sanitizeInput($_POST['first_name']);
    $lastName = sanitizeInput($_POST['last_name']);
    $email = sanitizeInput($_POST['email']);
    $password = password_hash($_POST['password1'], PASSWORD_DEFAULT); // Hashing the password
    $query = "INSERT INTO users (first_name, last_name, email, password1) VALUES ('$firstName','$lastName','$email','$password')";
    $run = mysqli_query($con, $query);

    if($run){
        echo "<script>alert('Registration successful');
        window.location.href='login.php'</script>";
    } else {
        echo "<script>alert('Error in registration');</script>";
    }
}
if(isset($_POST['login'])){
  if(isset($_POST['login_email']) && isset($_POST['login_password'])){
      $loginEmail = sanitizeInput($_POST['login_email']);
      $loginPassword = $_POST['login_password'];
      $query = "SELECT * FROM users WHERE email ='$loginEmail'";
      $run = mysqli_query($con, $query);

      if(mysqli_num_rows($run) > 0){
          $user = mysqli_fetch_assoc($run);
          if(password_verify($loginPassword, $user['password1'])){
              session_start();
              $_SESSION['user_id'] = $user['id'];
              if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on'){
                  $token = bin2hex(random_bytes(16));
                  setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60));
                  $updateTokenQuery = "UPDATE users SET remember_token='$token' WHERE id=".$user['id'];
                  mysqli_query($con, $updateTokenQuery);
              }
              echo "
              <script>
              
              window.location.href='home.php'</script>";
              exit();
          } else {
              echo "
            <script>alert('Invalid password');</script>";
          }
      } else {
          echo "<script>alert('Invalid login credentials');</script>";
      }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chocolate Factory</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
  <link rel="icon" href="images/logo.png" type="image/icon type">
  <link rel="stylesheet" href="assets/css/login.css">
 
    <style>
    .header{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.7),rgb(0,0,0,0.4)),url('images/loginbg.jpeg');
        background-size: cover;
        background-position: center;
        padding: 10px 8%;
        position: relative;
    }
    @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
    *{
  margin: 0;
  padding: 0;
  font-family:'Times New Roman', Times, serif ;
  box-sizing: border-box;
}
body{
  background: black;
  color: white;
  z-index: 1000;
}
  .navbar-brand h1{
  text-shadow: 0px 1px 0px #ccc,
               0px 2px 0px #ccc,
               0px 3px 0px #ccc,
               0px 4px 0px #ccc,
               0px 5px 0px #ccc,
               0px 6px 0px #ccc,
               0px 7px 0px #ccc;

}
  
#navbar{
  width: 100%;
  z-index: 100;
}
.navbar-dark .navbar-toggler-icon {
  bottom: 27px;
  right: 13px;
  font-size: 25px;
 
}

#navbarSupportedContent  a{
  color: #fff;
  border-bottom: 2px solid transparent;
  font-size: 21px;
  margin-left: 20px;
}
#navbarSupportedContent a:hover{
  border-bottom: 2px solid white;
  transition: 0.5s;
}

@media (min-width: 1000px) and (max-width: 1250px) {
  .form-inline {
    display: none;
  }
}
@media (min-width: 100px) and (max-width: 1000px) {
  .form-inline {
    display: none;
  }
}

#navbarSupportedContent .btn{
  background-color: rgb(235, 233, 233);
  margin-left: 20px;
  color: rgb(12, 12, 51);
  border: none;
}
    #btn::after{
      border: none;
    }
    .button-box {
        margin-top: -10px;
        height: 50px;
        border: none;
        display: flex;
        }
        .toggle-btn:focus {
    outline: none;
    border: none;
}


        .toggle-btn {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            font-size: 18px;
        }
       .input-group-register {
          left: 53px;
          top: 100px;
      }

        .form-box {
            margin-top: 0px;
            padding: 30px;
        }
    </style>
    <?php
if(isset($_GET['sign'])){
  echo "<style>
    #login{left:-400px}
    #register{left:50px}
    #btn{left:110px}
  </style>";
}
?>
<script>
function validateInput(inputElement) {
    var isValid = inputElement.checkValidity();
    if (isValid) {
        inputElement.style.borderColor = "#2ea586"; // Green color for valid input
    } else {
        inputElement.style.borderColor = "red"; // Red color for invalid input
    }
}
</script>
</head>
<body>
<div class="header" >
<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
      <a class="navbar-brand" href="index.php"><h1>Coco Chocolate Factory</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      
      <form class="my-2 my-lg-0" action="login.php" method="get">
        <input class="btn btn-outline-success text-dark my-2 my-sm-0" type="submit" value="Login">
        <input class="btn btn-outline-success text-dark my-2 my-sm-0" type="submit" value="Signup" name="sign">
      </form>
    </div>
    </nav>
    <div class="form-box">
                <div class='button-box'>
                    <div id='btn' style="background:rgb(37 16 47);border:none"></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Login</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>


                <form id='login' class='input-group-login' method="POST">
                    <input type='text' class='input-field'placeholder='Email Id' required name="login_email" >
                    <input type='password'  class='input-field'placeholder='Enter Password' name="login_password" required>
                    <input type="checkbox"  class="check-box" name="remember_me"><span style="bottom:76px;">Remember Password</span>
                    <button type='submit'class='submit-btn' style="background:rgb(37 16 47) " name="login">Login</button>
              </form>

         <form id='register' class='input-group-register' method="POST">
         <input type='text' class='input-field' placeholder='First Name' class="form-control" name="first_name" required oninput="validateInput(this)">
        <input type='text' class='input-field' placeholder='Last Name ' class="form-control" required name="last_name" oninput="validateInput(this)">
        <input type='email' class='input-field' placeholder='Email Id' class="form-control" required name="email" oninput="validateInput(this)">
        <input type='password' class='input-field' placeholder='Enter Password' class="form-control" required name="password1" oninput="validateInput(this)">
        <input type='password' class='input-field' placeholder='Confirm Password' class="form-control" required oninput="validateInput(this)">
        <button type='submit'class='submit-btn' style="background:rgb(37 16 47)" style="
    margin-left: 113px; "name="register">Register</button>
             </form>
            </div>
    </div>

        
    <script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <?php include_once('includes/footer.php');?>
</body>
</html>
