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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family:'Times New Roman', Times, serif ;
  box-sizing: border-box;
}
nav.elementor-top-section {
	z-index: 9999;
}
h6 a {
    text-decoration: none;
    color: red;
}
body{
  background: black;
  color: white;
}
.header{
  width: 100%;
  height: 15vh;
  background-size: cover;
  background-position: center;
  padding: 10px 8%;
  position: sticky;
}
.navbar-brand{
  text-shadow: 0px 1px 0px #ccc,
               0px 2px 0px #ccc,
               0px 3px 0px #ccc,
               0px 4px 0px #ccc,
               0px 5px 0px #ccc,
               0px 6px 0px #ccc,
               0px 7px 0px #ccc;

}
.navbar {
  z-index: 1001  !important;  /* Add this line */
}
#navbar{
  width: 105%;
  z-index: 1000000  !important;
}
.navbar-dark .navbar-toggler-icon {
  bottom: 27px;
  right: 13px;
  font-size: 25px;
 
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

  #navbarSupportedContent  a{
  color: #fff;
  border-bottom: 2px solid transparent;
  font-size:18px;
  margin-left: 10px;
}
.user1{
  font-size: 20px;
}
#navbar{

position: sticky;
z-index: 1000000000  !important;
}
.navbar {
  position: relative;
}

.dropdown-content {
  position: absolute;
}
.dropdown {
          position: relative;
          display: inline-block;
          
      }

      .search-box {
          padding: 8px;
          width: 200px; /* Adjust the width as needed */
      }

      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
          z-index: 10000000000  !important; /* Increase z-index */
          max-height: 150px; /* Limit dropdown height */
          overflow-y: auto; /* Add scroll if needed */
      }
      .dropdown-content a {
            padding: 12px 16px;
            display: block;
            text-decoration: none;
            color: black;
        }

        .dropdown-content a:hover {
            border: white  ;
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

</head>
<body>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinetech";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?>
  <div class="header" >
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
      <a class="navbar-brand" href="home.php"><h1>Coco Chocolate Factory</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-2 my-sm-0" style="background-color: rgb(235, 233, 233);
  margin-left: 20px;color: rgb(12, 12, 51);border: none;" type="submit"><a href="index.php" style="color:black;text-decoration:done;margin-right:10px;">Logout</a></button>
    </form>
      <i class="fa-solid fa-user" style="    font-size: 30px; margin-left: 20px;" ></i>
     <a href="cart.php"><i  class="fa-solid fa-cart-shopping" style="    font-size: 30px; margin-left: 20px;"></i></a>
      
    </div>
    </nav>
  </div>
</body>
</html>