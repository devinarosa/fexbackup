<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Explore</title>
    <style>
        .trendingVendor{
            overflow: hidden;
            position: relative;
        }
        hr{
            border: 1px solid rgb(0, 0, 0);
        }
        .badge{
            background-color: rgb(212, 212, 212);
            color: black;
        }
        .schoolTrending .row{
            border-bottom: 1px solid rgb(228, 228, 228);
        }
        .schoolCarouselImg{
            filter: brightness(0.7);
            transition: all 0.3s ease-in-out;
        }
        .schoolCarouselImg:hover{
            filter: brightness(1);
            transform: scale(1.2);
        }

        .trendingVendorImage{
            width: 100%;
            height: 200px;
            height: auto;
            transition: all 0.3s ease-in-out;
            filter: brightness(.7);
        }

        .trendingVendor:hover .trendingVendorImage {
            filter: brightness(1);
            transform: scale(1.2);
        }

        .trendingVendor:hover .trendingVendorTitle{
            opacity: 1;
            transition: .3s ease-in-out;
        }

        .trendingVendorTitle{
            position: absolute;
            color: white;
            opacity: 0;
            transition: .3s ease-in-out;
        }

    </style>
  </head>
  <body>

    <section id="nav">
        <nav class="navbar navbar-expand navbar-dark">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard')?>">HMS</a>
                  <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item dropdown">
                        <a  href="#" class="dropdown-toggle px-3 text-white pt-1" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Username</a>
                        <div class="dropdown-menu" aria-labelledby="userMenu">
                            <a  href="<?= base_url('PostMessage')?>" class="btn dropdown-item" >Post Message</a>
                            <a href="<?= base_url('EditProfile')?>" class="btn dropdown-item">Edit profil</a>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button"><a href="<?= base_url('Logout')?>" class="text-decoration-none text-dark">Logout</a></button>
                        </div>
                    </li>
                  </ul>
            </div>
        </nav>
    </section>
    
    <section id="gambar-sekolah">
        <div class="container-xl">
        <div class="row my-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets/')?>img/carousel 1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block my-3">
                            <h1 class="schoolCarouselName font-weight-bold">Nama</h1>
                            <p class="schoolCarouselTagline h4">Opportunities For Lifelong Learning</p>
                            <p class="schoolCarouselAddress">Jl. Alamat Alamat no.x kelurahan, kecamatan, kota</p>
                            <div class="schoolCarouselBadge">
                                <div class="badge">Formal</div>
                                <div class="badge">SMA</div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets/')?>img/carousel 2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block my-3">
                            <h1 class="schoolCarouselName font-weight-bold">Nama</h1>
                            <p class="schoolCarouselTagline h4">Opportunities For Lifelong Learning</p>
                            <p class="schoolCarouselAddress">Jl. Alamat Alamat no.x kelurahan, kecamatan, kota</p>
                            <div class="schoolCarouselBadge">
                                <div class="badge">Formal</div>
                                <div class="badge">SMA</div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets/')?>img/carousel 3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block my-3">
                            <h1 class="schoolCarouselName font-weight-bold">Nama</h1>
                            <p class="schoolCarouselTagline h4">Opportunities For Lifelong Learning</p>
                            <p class="schoolCarouselAddress">Jl. Alamat Alamat no.x kelurahan, kecamatan, kota</p>
                            <div class="schoolCarouselBadge">
                                <div class="badge">Formal</div>
                                <div class="badge">SMA</div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets/')?>img/carousel 4.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block my-3">
                            <h1 class="schoolCarouselName font-weight-bold">Nama</h1>
                            <p class="schoolCarouselTagline h4">Opportunities For Lifelong Learning</p>
                            <p class="schoolCarouselAddress">Jl. Alamat Alamat no.x kelurahan, kecamatan, kota</p>
                            <div class="schoolCarouselBadge">
                                <div class="badge">Formal</div>
                                <div class="badge">SMA</div>
                            </div>
                        </div>
                      </div>
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


    <section id="search">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12">
                    <form action="" method="post">
                        <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                            <input style="width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-1" name="email_username" id="email_username" placeholder="Looking for something ? ">
                            <i class="fas fa-search fa-1x" style="margin-left: -30px; margin-top: 10px;"></i>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section id="trending">
        <div class="container-xl h my-5">
            <div class="row">
                <div class="title h3 font-weight-bold col-2 mr-5 mr-md-0">Trending</div>
                <div class="col"><hr></div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="schoolTrending container-fluid">
                        <div class="row py-4">
                            <div class="col-3 p-4"><img src="<?= base_url('assets/')?>img/sekolah 1.png" alt="" class="img-fluid"></div>
                            <div class="col-9 d-flex flex-column justify-content-center">
                                <div class="schoolTrendingName font-weight-bold h3">Nama</div>
                                <div class="schoolTrendingTagline font-weight-bold h5">Preparing Children For Success In Life.
                                </div>
                                <div class="schoolTrendingAddress">Jl. Alamat Alamat no.x kelurahan, kecamatan, kota</div>
                                <div class="schoolTrendingBadge mt-3">
                                    <div class="badge">Formal</div>
                                    <div class="badge">SMA</div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-3 p-4"><img src="<?= base_url('assets/')?>img/sekolah 2.png" alt="" class="img-fluid"></div>
                            <div class="col-9 d-flex flex-column justify-content-center">
                                <div class="schoolTrendingName font-weight-bold h3">Nama</div>
                                <div class="schoolTrendingTagline font-weight-bold h5">Preparing Children For Success In Life.
                                </div>
                                <div class="schoolTrendingAddress">Jl. Alamat Alamat no.x kelurahan, kecamatan, kota</div>
                                <div class="schoolTrendingBadge mt-3">
                                    <div class="badge">Formal</div>
                                    <div class="badge">SMA</div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-3 p-4"><img src="<?= base_url('assets/')?>img/sekolah 3.png" alt="" class="img-fluid"></div>
                            <div class="col-9 d-flex flex-column justify-content-center">
                                <div class="schoolTrendingName font-weight-bold h3">Nama</div>
                                <div class="schoolTrendingTagline font-weight-bold h5">Preparing Children For Success In Life.
                                </div>
                                <div class="schoolTrendingAddress">Jl. Alamat Alamat no.x kelurahan, kecamatan, kota</div>
                                <div class="schoolTrendingBadge mt-3">
                                    <div class="badge">Formal</div>
                                    <div class="badge">SMA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-0 my-5">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="title h4 font-weight-bold pl-3">
                                Mungkin anda tertarik
                            </div>
                        </div>
                        <div class="row mb-3 trendingVendor d-flex justify-content-center align-items-center px-3">
                            <img src="<?= base_url('assets/')?>img/carousel 2.jpg" alt="" class="img-fluid trendingVendorImage">
                            <div class="trendingVendorTitle h3">Vendor 1</div>
                        </div>
                        <div class="row mb-3 trendingVendor d-flex justify-content-center align-items-center px-3">
                            <img src="<?= base_url('assets/')?>img/carousel 2.jpg" alt="" class="img-fluid trendingVendorImage">
                            <div class="trendingVendorTitle h3">Vendor 1</div>
                        </div>
                        <div class="row mb-3 trendingVendor d-flex justify-content-center align-items-center px-3">
                            <img src="<?= base_url('assets/')?>img/carousel 2.jpg" alt="" class="img-fluid trendingVendorImage">
                            <div class="trendingVendorTitle h3">Vendor 1</div>
                        </div>
                        <div class="row mb-3 trendingVendor d-flex justify-content-center align-items-center px-3">
                            <img src="<?= base_url('assets/')?>img/carousel 2.jpg" alt="" class="img-fluid trendingVendorImage">
                            <div class="trendingVendorTitle h3">Vendor 1</div>
                        </div>
                        <div class="row mb-3 trendingVendor d-flex justify-content-center align-items-center px-3">
                            <img src="<?= base_url('assets/')?>img/carousel 2.jpg" alt="" class="img-fluid trendingVendorImage">
                            <div class="trendingVendorTitle h3">Vendor 1</div>
                        </div>
                    </div>
                </div>
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
                        <i class="fab fa-instagram fa-2x"></i>
                        <i class="fab fa-twitter fa-2x"></i>
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <i class="fab fa-youtube fa-2x"></i>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>