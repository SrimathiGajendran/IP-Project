<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coco Chocolate Factory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
    h6 a:hover {
    text-decoration: none;
    color: red;
}

        
       /* Add this style to your existing CSS */
.carousel-caption {
    animation: fadeIn 1.5s ease-in-out;
}
@keyframes slide-up {
    0% {
        transition: translateX;
    }
    100% {
      transition: translate;
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
/* Add this style to your existing CSS */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-30px);
    }
    60% {
        transform: translateY(-15px);
    }
}

.carousel-caption h1 {
    animation: zoom-in 1s ease-in-out, fadeIn 1.5s ease-in-out;
}


@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px) rotate(-5deg); }
    50% { transform: translateX(5px) rotate(5deg); }
    75% { transform: translateX(-5px) rotate(-5deg); }
    100% { transform: translateX(0); }
}

.fa-calendar-days, .fa-clock {
    animation: shake 1s infinite;
}

@keyframes tada {
    0% { transform: scale(1); }
    10%, 20% { transform: scale(0.9) rotate(-3deg); }
    30%, 50%, 70%, 90% { transform: scale(1.1) rotate(3deg); }
    40%, 60%, 80% { transform: scale(1.1) rotate(-3deg); }
    100% { transform: scale(1) rotate(0); }
}

.btn-danger {
    animation: tada 1.5s;
    animation-iteration-count: 1;
}

/* Add this style to override Bootstrap's default button styles */
.btn-danger:focus {
    box-shadow: none;
}


        .text-left {
    margin-left: 49px;
    text-align: left!important;
}
        .w-100 {
            width: 100%!important;
            height: 85vh;
        }
        .carousel-caption{
          animation: ;
          margin-bottom: 80px;
        }
        .carousel-caption h1 {
          color: #ffccfe;
    font-size: 3.5rem;
    font-weight: 500;
    margin-bottom: 30px;
}
.carousel-caption h2 {
  color:#00fff1;
  font-size: 1.5rem;
    font-weight: 500;
    margin-bottom: 30px;
}
.words{
  display: flex;
  flex-direction: row;
}
.carousel-caption p {
    margin-left: 10px;
    font-size: 1.5rem;
    font-weight: 500;
    margin-top:-5px;
    margin-bottom: 10px;
}
.main-content{
    padding-top: 40px;
}

.iq-main-header{
    margin-bottom: 20px;
}
.main-title a:hover , .main-title a:focus{
    color: #e50914 !important;
}
.iq-view-all:hover{
    color: #bf000a;
}
.favorites-slider .slick-list{
    overflow: visible;
    padding-bottom: 40px !important;
}

.favorites-slider li.slide-item{
    float: left;
    width: 25%;
}

li.slide-item{
    position: relative;
    padding: 0px 15px;
}

li.slide-item .block-images{
    position: relative;
    width: 100%;
    transition: all 0.45s ease 0s;
    overflow: hidden;
    backface-visibility: hidden;
    transform: translate3d(0,0,0);
    transition: all 0.6s ease 0s;
}
li.slide-item:hover .block-images{
    overflow: visible;
    border-left: 5px solid #e50914;
}

li.slide-item:hover .block-images .img-box{
    position: relative;
}
.favorites-slider .slick-list{
    overflow: visible;
}
li.slide-item:hover .block-images{
    z-index: 99;
    transform: scale3d(1.1,1.1,1) translate3d(0,0,0) perspective(500px);
    transform-origin: 50% 50%;
    transition: all 0.6s ease 0s;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.9);
}
.block-social-info{
    position: absolute;
    top: 0;
    left: auto;
    bottom: 0;
    right: 25px;
    z-index: 999;
    display: flex;
    align-items: center;
    opacity: 0;
}
.block-description{
    position: absolute;
    left: 25px;
    top: 0;
    bottom: 0;
    z-index: 999;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.block-description>h6{
    font-size: 1.5em;
}
.block-description .iq-title{
    font-size: 18px;
    color: #fff;
    text-transform: capitalize;
    font-weight: 600;
}
.music-play-lists li{
    position: relative;
    height: 30px;
    width: 30px;
    line-height: 35px;
    text-align: center;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    margin: 0 auto 7px;
    display: flex;
    align-items: center;
}
.music-play-lists span{
    position: relative;
    display: block;
    height: 20px;
    width: 20px;
    line-height: 26px;
    font-size: 12px;
    text-align: center;
    background: #fff;
    color: #e50914;
    border-radius: 50%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.45s ease 0s;
    cursor: pointer;
}
.music-play-lists .count-box{
    height: 15px !important;
    width: 15px !important;
    line-height: 15px !important;
    font-size: 8px !important;
    background: #e50914 !important;
    color: #fff !important;
    position: absolute;
    right: 0;
    top: 0;
    padding: 0;
    text-align: center !important;
}

.music-play-lists li:hover span{
    background: #e50914;
    color: #fff;
    transition: all 0.45s ease 0s;

}

.text-white{
    font-size: 14px;
}

li.slide-item .block-images::before{
    position: absolute;
    content: "";
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
    opacity: 0;
}

li.slide-item:hover .block-images::before{
    opacity: 1;
    z-index: 9;
}
li.slide-item:hover .block-description{
    animation: fadeIn 0.6s ease-in-out;
    opacity: 1;
}
li.slide-item:hover .block-social-info{
    animation: fadeIn 0.6s ease-in-out;
    opacity: 1;
}

.hover-buttons .btn{
    padding: 5px 15px;
    font-size: 12px;
}
li.slide-item.slick-current:hover .block-images{
    transform: scale3d(1.1,1.1,1) translate3d(6%,0,0) perspective(500px) ;
}
li.slide-item .block-images::after{
    position: absolute;
    content: "";
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(20,20,20,0.4) 50%, rgba(83,100,141,0) 100%);
    transition: all 0.6s ease 0s;
}
small, .text-small, span{
    font-size: 14px;
}

a:focus, a:hover{
    color: #e50914;
    outline: none;
}

li.slide-item{
    position: relative;
    padding: 0px 10px;
}

.iq-button.btn{
    padding: 7px 14px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}
.block-images .hover-buttons{
    margin-top: 5px;
}

.block-social-info .music-play-lists li {
    width: 40px;
    height: 40px;
}

.block-social-info .music-play-lists span{
    width: 30px;
    height: 30px;
}
.block-social-info .music-play-lists span i{
    font-size: 15px;
}

.overflow-hidden{
    overflow: hidden;
}
.share{
    position: relative;
}

.share-box{
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.75);
    display: none;
    position: absolute;
    width: 105px;
    top: 3px;
    right: 40px;
    left: auto;
    background-color: #191919;
    padding: 0 10px;
    border-radius: 0;
    text-align: center;
    z-index: 2;
    animation: side-in 0.5s forwards;
    margin-bottom: 10px;
    transition: all 0.45s ease 0s;
}

.share:hover .share-box{
    display: inline-block;
}
.share-box a{
    background: transparent !important;
    color: #d7d3f8 !important;
    margin-right: 15px;

}
.share-box i{
    font-size: 15px !important;
}
.share-box a:hover{
    color: #bf000a !important;
}
.favorites-slider .slick-arrow{
    display: flex;
    text-align: center;
    justify-content: center;
    flex-direction: column;
    width: 35px;
    height: 60px;
}

.favorites-slider .slick-arrow i{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 60px;
    text-align: center;
    opacity: 1;
    z-index: 9;
    top: 0;
    background: rgba(0, 0, 0, 0.5);
    margin: 0;
    line-height: 5px;
    box-shadow: 0 9px 19px #01041b0d;
    font-size: 0;
    transform: none;
    color: #fff;
    transition: all 0.4s ease-in-out 0s;
}
.favorites-slider .slick-arrow.slick-disabled{
    opacity: 0;
}
.favorites-slider .slick-prev{
    color: #fff;
    right: auto;
    left: 9px;
    z-index: 9;
    top: 90px;
}
.favorites-slider .slick-next{
    left: auto;
    color: #fff;
    right: 6px;
    z-index: 9;
    top: 90px;
}

.favorites-slider .slick-prev::before, .favorites-slider .slick-next::before{
    font-size: 0px;
}

.favorites-slider .slick-arrow i{
    font-size: 17px;
}


/* ****************** Responsiveness **************** */
@media (min-width : 1200px){
    li.slide-item.slick-active + li.slide-item.slick-active + li.slide-item.slick-active + li.slide-item.slick-active:hover .block-images{
        transform:  scale3d(1.1,1.1,1) translate3d(-6% , 0,0) perspective(500px);
    }  
}

@media (max-width : 1199px){
    li.slide-item.slick-active + li.slide-item.slick-active + li.slide-item.slick-active:hover .block-images{
        transform:  scale3d(1.1,1.1,1) translate3d(-6% , 0,0) perspective(500px);
    }
}

@media (max-width : 991px){
    li.slide-item .block-description .movie-time span, li.slide-item .block-description .ratting-start, .block-description .movie-content li{
        font-size: 10px;
    }
}
@media (max-width : 768px){
    li.slide-item .block-images::before{
        content: none;
    }
    li.slide-item.slick-current:hover .block-images, li.slide-item:hover .block-images, li.slide-item.slick-active + li.slide-item.slick-active + li.slide-item.slick-active + li.slide-item.slick-active:hover .block-images, li.slide-item.slick-active + li.slide-item.slick-active + li.slide-item.slick-active:hover .block-images{
        transform: none;
    } 
    .type{
        padding: 9px 10px;
        font-size: 13px;
    }
}

@media (max-width : 767px) {
    .main-title{
        font-size: 1em;
    }

    .slick-bg::before{
        background: linear-gradient(-360deg, rgba(0,0,0,1) 0% , rgba(20,20,20,1) 40% , rgba(83,100,141,0) 100%);

    }
    .favorites-slider .slick-arrow, .favorites-slider .slick-arrow:hover{
        background: none;
    }
    .favorites-slider .slick-prev{
        right: 37px;
    }

    .image-box img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
}
/*------------------*/
li.slide-item .block-description .parallax-ratting span{
    font-size: 14px;
}
.parallax-img img{
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
}
.parallax-window{
    height: 100%;
    padding: 100px 0;
    position: relative;
    background: url(images/parallax/Bg1.jpg) center center;
    background-size: cover;
    background-attachment: fixed ;
}
.parallax-window::after{
position: absolute;
content: "";
top: 0;
bottom: 0;
left: 0;
right: 0;
background: rgba(0, 0, 0, 0.8);
}
.parallaxt-details{
    z-index: 9;
    position: relative;
}
.parallax-heading{
    font-size: 52px;
}
.avatar{
  left: 50px;
}
/* *********** responsiveness ********** */
@media (max-width : 991px){
    li.slide-item .block-description .parallax-ratting span{
        font-size: 10px;
    }
}
@media (max-width : 767px){
    .parallax-window{
        padding: 60px 0;
    }
    .parallax-heading{
        font-size: 35px;
    }
}
    </style>
</head>

<body>
  <div>
<?php include('includes/nav.php'); ?>
      <div class="img position-relative" style="z-index:100 ">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="Images\slide\Cardamom White Chocolate.jpg" class="d-block w-100" alt="Wild Landscape" />
                      <div class="carousel-caption text-left">
                          <h1 style="color: black">Cardamom White Chocolate</h1>
                            <a href="shop.php"><button style="background-color:rgb(205, 92, 92);border: none;padding:10px;border-radius:5px;color:white;">Order Now</button></a>
                        </div>
                  </div>
                      <!-- Add other carousel items here, but without the 'active' class -->
                      <div class="carousel-item">
                          <img src="Images\slide\Dark Chocolate Truffles.jpg" class="d-block w-100" alt="Camera" />
                          <div class="carousel-caption text-left">
                          <h1 style="color: black">Dark Chocolate Truffles</h1>
                          <a href="shop.php"><button style="background-color:rgb(205, 92, 92);border: none;padding:10px;border-radius:5px;color:white;">Order Now</button></a>
                          </div>
                      </div>
                          <div class="carousel-item">
                          <img src="Images\slide\Ruby.jpg" class="d-block w-100" alt="Camera" />
                          <div class="carousel-caption text-left">
                          <h1 style="color: black">Ruby Chocolate</h1>
                          <br>
                          <a href="shop.php"><button style="background-color:rgb(205, 92, 92);border: none;padding:10px;border-radius:5px;color:white;">Order Now</button></a>
                          </div>
                          </div>
                          <div class="carousel-item">
                              <img src="Images\slide\with nuts.jpg" class="d-block w-100" alt="Camera" />
                              <div class="carousel-caption text-left">
                              <h1 style="color: black">Varieties with Nuts</h1>
                          <br>
                          <a href="shop.php"><button style="background-color:rgb(205, 92, 92);border: none;padding:10px;border-radius:5px;color:white;">Order Now</button></a>
                              </div>
                          </div>
                          <div class="carousel-item">
                      <img src="Images\slide\Giftbox.jpg" class="d-block w-100" alt="Wild Landscape" />
                      <div class="carousel-caption text-left">
                          <h1 style="color:black;">Gift Boxes</h1>
                          <br>
                          <a href="shop.php"><button style="background-color:rgb(205, 92, 92);border: none;padding:10px;border-radius:5px;color:white;">Order Now</button></a>
                      </div>
                          </div>
                          <div class="carousel-item">
                      <img src="Images\slide\Chocolate Heart Bonbons.jpg" class="d-block w-100" alt="Wild Landscape" />
                      <div class="carousel-caption text-left">
                          <h1 style="color: black">Chocolate Heart Bonbons</h1>
                          <a href="shop.php"><button style="background-color:rgb(205, 92, 92);border: none;padding:10px;border-radius:5px;color:white;">Order Now</button></a>
                          </div>
                          </div>
                              <!-- Add more carousel items as needed -->
                          </div>
                          <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
                      </div>
      </div>

      <div class="main-content">
            <!-- favorite section starts   -->

            <section id="iq-favorites">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                      <h4 class="main-title">Top Varieties of Chocolates For You</h4>
                    </div>
                    <div class="favorite-contens">
                      <ul class="favorites-slider list-inline row p-0 mb-0">
                        <!-- slide item 1 -->
                        <li class="slide-item">
                          <div class="block-images position-relative">
                            <div class="img-box">
                              <img src="Images\slide\Bubbles Chocolate Bar.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="block-description">
                              <h6 class="iq-title">
                                <a href="#">Bubbles Chocolate Bar</a>
                              </h6>
  

                            </div>
                            
                        </li>
                        <!-- slide item 2 -->
                        
                        <!-- slide item 3 -->
                          <li class="slide-item">
                            <div class="block-images position-relative">
                              <div class="img-box">
                                <img src="Images\slide\Champagne Chocolate Truffles.jpg" class="img-fluid" alt="" />
                              </div>
                              <div class="block-description">
                                <h6 class="iq-title">
                                  <a href="#">Champagne Chocolate Truffles</a>
                              </h6>
                              </div>
                              
                          </li>
                        <!-- slide item 4 -->
                        <li class="slide-item">
                          <div class="block-images position-relative">
                            <div class="img-box">
                              <img src="Images\slide\Chocolate Heart Bonbons.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="block-description">
                              <h6 class="iq-title">
                                <a href="#">Chocolate Heart Bonbons </a>
                              </h6>
                              
                            </div>
                            
                        </li>
                        <!-- slide item 5 -->
                        <li class="slide-item">
                          <div class="block-images position-relative">
                            <div class="img-box">
                              <img src="Images\slide\White Chocolate.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="block-description">
                              <h6 class="iq-title">
                                <a href="#" >White Chocolate</a>
                              </h6>
                              
                            </div>
                            
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>

      </div>

 </div>
            <?php include_once('includes/footer.php'); ?>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var carousel = new bootstrap.Carousel(document.getElementById('carouselExampleControls'), {
                        interval: 2000 // Initial interval of 20 seconds
                    });

                    setTimeout(function () {
                        carousel.pause(); // Pause carousel
                        carousel._config.interval = 5000; // Set interval to 5 seconds
                        carousel.cycle(); // Start carousel again with new interval
                    }, 2000); // Delay this change for 2 seconds after page load
                });
            </script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  

        </body>
        </html>
