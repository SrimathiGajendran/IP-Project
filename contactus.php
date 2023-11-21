<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chocolate Factory</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <link rel="icon" href="images/logo.png" type="image/icon type">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    .body {
      background-color: #050417;
      margin: 0;
      padding: 0;
    }
    
    .header1 {
      width: 100%;
      height: 45vh;
      background-image: linear-gradient(rgba(0,0,0,0.4),rgb(0,0,0,0.7)),url('Images/favorite/f5.jpg');
      background-size: cover;
      background-position: center;
      padding: 10px 8%;
      position: relative;
    }

    .header-content button {
      transition: background 0.5s ease;
    }

    .header-content button:hover {
      background: linear-gradient(to right, #ff416c, #ff4b2b);
    }

    .header-content h1 {
      animation: 1.5s ease-out 0s 1 slideInLeft;
      margin-top: 80px;
      margin-left: 440px;
      font-size: 50px;
      font-weight: 500;
      width: 1000px;
      color: #2ea586;
    }

    @keyframes slideInLeft {
      0% {
        transform: translateX(-100%);
      }
      100% {
        transform: translateX(0);
        transform: rotate();
      }
    }

    @keyframes slideInUp {
      0% {
        transform: translateY(-100%);
      }
      100% {
        transform: translateY(0);
      }
    }

    .main {
      display: flex;
      flex-direction: row;
      margin-top: 80px;
      margin-left: 30px;
      line-height: 2.5;
    }
    
    .main .left {
      flex: 50%;
    }

    .homesideimg {
      margin-top: 20px; 
      width: 500px;
      border-radius: 30px;
      margin-right: 74px;
      right: 50px;
    }

    .main .div1,
    .main .div2,
    .main .div3 {
      width: 365px;
      height: 190px;
      background-color: #3e3e3e;
      margin-right: 50px;
      margin-left: 25px;
      border-radius: 10px;
      border: 2px solid grey;  
    }

    .icon {
      margin-left: 170px;
      font-size: 32px;
      margin-top: 60px;
    }

    .main h1 {
      font-size: 25px;
      color: pink;
      margin-bottom: 2px;
    }

    .div1 h1{

margin-left: 150px;
}
.div2 h1{

margin-left: 165px;
}
.div3 h1{
margin-left: 138px;
}
.div1 p{
margin-left: 105px;
font-size: 20px;
}
.div2 p{
margin-left: 123px;
font-size: 20px;
}
.div3 p{
margin-left: 30px;
font-size: 20px;
}

    @media (max-width: 768px) {
      .main {
        flex-direction: column;
        min-height: 600px;
        align-items: center;
      }
      .div1 ,
    .div2 ,
    .div3  {
      margin-top:20px;
    }
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
  <?php include_once('includes/nav.php'); ?>
  <div class="header1">
    <div class="header-content">
      <h1>Contact Us</h1>
    </div>
  </div>
  <div class="main" style="height:35vh;margin-top:50px;">
    <div class="div1">
      <i class="fa-solid fa-envelope icon" style="color: #34b292;"></i>
      <h1>Email</h1>
      <p>cocofactory@gmail.com</p>
    </div>
    <div class="div2">
      <i class="fa-solid fa-phone icon" style="color: #34b292;"></i>
      <h1>Call</h1>
      <p>+91 93**9**473</p>
    </div>
    <div class="div3">
      <i class="fa-solid fa-location-dot icon" style="color: #34b292;"></i>
      <h1>Location</h1>
      <p>3, Maduravoyal,Chennai - 600107.</p>
    </div>
  </div>
  <?php include_once('includes/footer.php');?>
</body>
</html>
