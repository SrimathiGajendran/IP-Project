<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coco Chocolate Factory</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <link rel="icon" href="images/logo.png" type="image/icon type">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
  <style>
    body {
      background-color: #050417;
      margin: 0;
      padding: 0;
    }

    .header1 {
      width: 100%;
      height: 45vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgb(0, 0, 0, 0.7)), url('Images/favorite/f5.jpg');
      background-size: cover;
      background-position: center;
      padding: 10px 8%;
      position: relative;
      z-index: 1;
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
      margin-left: 10%;
      font-size: 50px;
      font-weight: 500;
      width: 80%;
      color: #2ea586;
    }

    @keyframes slideInLeft {
      0% {
        transform: translateX(-100%);
      }
      100% {
        transform: translateX(0);
      }
    }

    .main {
      display: flex;
      flex-direction: column; /* Reversed for responsiveness */
      margin-top: 40px;
      margin-left: 3%;
      line-height: 2.5;
      margin-right: 3%;
      overflow: hidden;
    }

    .main .left {
      flex: 1;
      margin-bottom: 20px;
    }

    .main .right {
      flex: 1;
      margin-bottom: 20px;
    }

    .homesideimg img {
      width: 70%;
      max-width: 100%;
      border-radius: 30px;
      margin-top: 20px;
    }

    @media (min-width: 768px) {
      .main {
        flex-direction: row;
      }
      .main .left, .main .right {
        flex: 1;
        margin-right: 20px;
        margin-bottom: 0; /* Adjusted for larger screens */
      }
    }
  </style>

  <?php
    if (isset($_GET['sign'])) {
      echo "<style>
        #login{left:-400px}
        #register{left:50px}
        #btn{left:110px}
      </style>";
    }
  ?>
</head>
<body>
  <div style="z-index: 1000;">
    <?php include_once('includes/nav.php'); ?>
  </div>
  <div>
    <div class="header1">
      <div class="header-content">
        <h1>About Us</h1>
      </div>
    </div>
    <div class="main">
      <div class="left">
        <h1 style="color:rgb(205, 92, 92); overflow: hidden;">Coco Chocolate Factory </h1>
        <p><hr>Welcome to Coco Choco Factory! We are a passionate team of chocolatiers dedicated to crafting exceptional chocolates that elevate your indulgence. Founded in 2019 by Srimathi, our journey began with a commitment to quality, creativity, and sustainability. Each piece of chocolate is a testament to our meticulous craftsmanship, blending tradition with innovation. At Coco Chocolate Factory, we not only offer exquisite flavors but also embrace responsible sourcing, supporting cocoa farmers and minimizing our environmental impact. Join us on a delightful chocolate journey and savor the magic in every moment. Indulge. Enjoy. Experience Coco Chocolate Factory.





</p>
      </div>
      <div class="right">
        <div class="homesideimg">
          <img src="Images/beans.jpeg" alt="Side Image">
        </div>
      </div>
    </div>
    <?php include_once('includes/footer.php'); ?>
  </div>
</body>
</html>
