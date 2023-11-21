<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chocolate factory</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
  <link rel="icon" href="images/logo.png" type="image/icon type">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family:'Times New Roman', Times, serif ;
  box-sizing: border-box;
}
    .header{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgb(0,0,0,0.4)),url('images/bg.jpeg');
    background-size: cover;
    background-position: center;
    padding: 10px 8%;
    position: relative;
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
  @keyframes slideInLeft {
  0% {
    transform: translateX(-100%);
    
  }
  100% {
    transform: translateX(100%);
  }
}

  .header-content button {
    transition: background 0.5s ease;
    animation: 1.5s ease-out 0.5s 1 slideInLeft;
  }

  .header-content button:hover {
    background: linear-gradient(to right, #ff416c, #ff4b2b);
  }
  
.header-content{
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
  margin-top: 100px;
}
.header-content h1{
    font-size: 60px;
    font-weight: 400;
    line-height: 70px;
    width:1000px;
    color: rgb(235 116 221);
}
.header-content h3{
  font-size: 30px;
  font-weight: 200;
  line-height: 70px;
  width:1000px;
  color:#dedcdc;
}
.header-content p{
  font-size: 20px;
  line-height: 30px;
  width:1000px;
  color: rgb(235 116 221);
}
.header-content .btn{
  background-color: rgb(57, 115, 173);
  color: white;
  box-shadow:  white;

}
.darktext{
  color: black;
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
  <div class="header" >
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
      <a class="navbar-brand" href="#"><h1>Coco Chocolate Factory</h1></a>
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
    <div class="header-content">
        <h1>Celebrating the world's favorite treat.</h1>
        <h3>Life is sweeter with chocolate</h3>
        <p>Unlock the power of chocolate</p>
        <button class="btn button-flying" type="submit"><a href="login.php" style="color:white;text-decoration:none;">Order now<a></button>
    </div>
    </div>
  </div>
  <section>
  </section>
  <?php include_once('includes/footer.php');?>
  
  <script>
    $(document).ready(function() {
      $('.button-flying').click(function() {
        $(this).addClass('clicked');
      });
    });
  </script>
  
</body>
</html>
