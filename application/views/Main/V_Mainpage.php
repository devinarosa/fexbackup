<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Future Education Expo</title>
  </head>
  <body>

    <section id="nav">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard')?>">HMS</a>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active d-sm-flex">
                        <a class="nav-link" href="<?= base_url('Login')?>">Login / Register</a>
                      </li>
                    </li>
                  </ul>
            </div>
        </nav>
    </section>

    <section id="mainCarousel">
        <div class="container-xl">
        <div class="row my-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/carousel 1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/carousel 2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/carousel 3.jpg" alt="Third slide">
                      </div>
                      <!-- <div class="carousel-item">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center justify-content-center">
                                    <img src="<?= base_url('assets')?>/img/fexText.png" class="w-75 h-auto">
                                </div>
                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                    <img src="<?= base_url('assets')?>/img/fex.gif" alt="" class="w-75 h-auto">
                                </div>
                            </div>
                        </div>
                      </div> -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </section>

    <section id="explore">
        <div class="container-xl mb-5">
            <div class="row d-flex justify-content-center px-3 triggerModal">
                <div class="col-md-3 m-0 p-0 explore">
                    <div class="kartu explore" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                        <div class="image_back">
                            <img src="<?= base_url('assets')?>/img/explore logo copy.png" alt="">
                        </div>
                        <div class="back pt-3 pt-md-0">
                            <h2><a href="<?= base_url('Explore')?>">Explore</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 m-0 p-0 Livestream my-2 my-md-0">
                    <div class="kartu Livestream">
                        <div class="image_back">
                            <img src="<?= base_url('assets')?>/img/Livestream logo copy.png" alt="">
                        </div>
                        <div class="back pt-3 pt-md-0">
                            <h2><a href="<?= base_url('Livestream')?>">Livestream</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 m-0 p-0 post">
                    <div class="kartu post" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
                        <div class="image_back">
                            <img src="<?= base_url('assets')?>/img/post logo copy.png" alt="">
                        </div>
                        <div class="back pt-3 pt-md-0">
                            <h2><a href="<?= base_url('PostMessage')?>">Post</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="register">
        <div class="container-fluid pb-5 pt-5">
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-sm-12">
                    <form action="#" method="post">
                        <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                            <input style="width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-0" name="email_username" id="email_username" placeholder="Looking for something ? ">
                            <i class="fas fa-search fa-1x submitButton" style="margin-left: -30px; margin-top: 10px;"></i>
                        </div>                    
                    </form> 
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="text-center"><img src="<?= base_url('assets')?>/img/formal.png" alt=""><h6 class="text-white text-center">Formal</h6></div>
                <div class="text-center"><img src="<?= base_url('assets')?>/img/non-formal.png" alt=""><h6 class="text-white text-center">Non-formal</h6></div> 
                <!-- manual width nya yg soon cause resolusi gambar nya beda (soon bakal di resize img-nya) -->
                <div class="text-center"><img src="<?= base_url('assets')?>/img/soon_1.png" width="115px" style="filter: invert();" alt=""><h6 class="text-white text-center">Soon</h6></div>    
                <div class="text-center"><img src="<?= base_url('assets')?>/img/soon_1.png" width="115px" style="filter: invert();" alt=""><h6 class="text-white text-center">Soon</h6></div>    
            </div>
        </div>
    </section>
    
    <section id="items" class="mb-5">
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold">Sub Category</div>
                <div class="more h5"><a href="<?= base_url('Explore')?>">more...</a></div>
            </div>
            <div class="horizontalScroll">

                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                
            </div>

        </div>
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold">Sub Category</div>
                <div class="more h5"><a href="<?= base_url('Explore')?>">more...</a></div>
            </div>
            <div class="horizontalScroll">

                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                
            </div>

        </div>
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold">Sub Category</div>
                <div class="more h5"><a href="<?= base_url('Explore')?>">more...</a></div>
            </div>
            <div class="horizontalScroll">

                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">SMK Negeri 7 Semarang</div>
                </div>
                
            </div>

        </div>

</section>

    <section id="info">
        <div class="container-xl">
            <div class="row m-auto">
                <p class="font-weight-bolder mx-auto h3">Get Ready</p>
            </div>
            <div class="row p-4 m-auto">
                <div class="col-md-4 my-5">
                    <img src="<?= base_url('assets')?>/img/card.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 my-5">
                    <img src="<?= base_url('assets')?>/img/card1.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 my-5">
                    <img src="<?= base_url('assets')?>/img/card2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="schoolProfile">
        <div class="container-xl my-5">
            <div class="row">
                <div class="col-md-6 my-5 d-flex justify-content-center">
                    <img src="<?= base_url('assets')?>/img/fex.gif" alt="" width="300" height="300">
                </div>
                <div class="col-md-6 my-5 d-flex flex-column justify-content-center">
                    <div class="h1 mb-3">Future Education Expo</div>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur magnam pariatur deserunt 
                        a dolores minus. Quasi, tempora. Saepe, eaque. Autem quo placeat cumque provident numquam exercitationem quidem 
                        fuga sit debitis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, reprehenderit. Quasi numquam
                         inventore, odit eos autem omnis iure est illum.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="schools">
        <div class="container-xl mt-3">
            <div class="row text-center pt-5">
                <div class="col-sm-12"><h3 class="font-weight-bolder">Schools</h3></div>
            </div>
            <div class="row pt-3">
                <img src="<?= base_url('assets')?>/img/schools.png" alt="" width="100%">
            </div>
        </div>
    </section>

    <section id="sponsor">
        <div class="container-xl mt-3">
            <div class="row text-center pt-5">
                <div class="col-sm-12"><h3 class="font-weight-bolder">Sponsors</h3></div>
            </div>
            <div class="row pt-3">
                <img src="<?= base_url('assets')?>/img/partner.png" alt="" width="100%">
            </div>
        </div>
    </section>


    <section id="footer">
        <div class="container-xl py-5 px-4">
            <div class="row">
                <div class="col-lg-6 margin">
                    <div class="h4">About Us</div>
                    <div class="h6">Halmahera Music School</div>
                    <div >A Music School located in Semarang City with Yamaha International Curriculum</div>
                    <div class="social-media margin">
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-firefox fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="back mb-5 lead"><a href="#nav">Back to Top <i class="fas fa-arrow-to-top pl-2"></i></a></div>
                    <p>© 2020 Halmahera Music School Semarang. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Modals -->
    <div class="modal fade registerModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content d-flex align-items-center justify-content-center px-4 text-center">
            <h5 class="mt-4">Register/Login to continue and get a lot of other benefits!</h5>
            <a href="<?= base_url('Login')?>" class="my-4"><button type="button"><h5>Register Now</h5></button></a>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets')?>/js/app.js"></script>
    <script src="<?= base_url('assets')?>/js/beforeLogin.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>