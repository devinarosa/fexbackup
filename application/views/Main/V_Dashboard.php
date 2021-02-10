<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/loggedIn.css">
    <script src="<?= base_url('assets');?>/js/loggedIn.js"></script>

    <style>
        .modal-dialog{
            max-width: 80vw;
        }
        .modal-content{
            position:relative;
        }
        .logo{
            position: absolute;
            top: 4.2%;
            left: 25%;
            width: 15%;
            height: 21.2%;
        }
        .booth-name{
            position: absolute;
            top: 4.2%;
            left: 41%;
            width: 51%;
            height: 21.2%;
            font-size: 2vw;
        }
        .gallery {
            position: absolute;
            top: 39.7%;
            left: 44.92%;
            width: 20.53%;
            height: 19%;
            transform: rotate3d(1,0,0,5deg);
        }

        .profile {
            position: absolute;
            top: 47.6%;
            left: 19.9%;
            width: 11%;
            height: 41%;
            cursor: pointer;
        }
        .booth-logo{
            height: 100%;
            width: auto;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/style.css">
    <title>Future Education Expo</title>
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
                            <a  href="<?= base_url('PostMessage') ?>" class="btn dropdown-item" >Post Message</a>
                            <a href="<?= base_url('EditProfile') ?>" class="btn dropdown-item">Edit profil</a>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button"><a href="<?= base_url('Logout') ?>" class="text-decoration-none text-dark">Logout</a></button>
                        </div>
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
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="Third slide">
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

    <section id="explore">
        <div class="container-xl mb-5">
            <div class="row d-flex justify-content-center px-3">
                <div class="col-md-3 m-0 p-0 explore">
                    <div class="kartu explore" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                        <div class="image_back">
                            <img src="<?= base_url('assets/img/')?>explore logo copy.png" alt="">
                        </div>
                        <div class="back pt-3 pt-md-0">
                            <h2><a href="<?= base_url('Explore')?>">Explore</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 m-0 p-0 Livestream my-2 my-md-0">
                    <div class="kartu Livestream">
                        <div class="image_back">
                            <img src="<?= base_url('assets/img/')?>Livestream logo copy.png" alt="">
                        </div>
                        <div class="back pt-3 pt-md-0">
                            <h2><a href="<?= base_url('Livestream')?>">Livestream</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 m-0 p-0 post\">
                    <div class="kartu post" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
                        <div class="image_back">
                            <img src="<?= base_url('assets/img/')?>post logo copy.png" alt="">
                        </div>
                        <div class="back pt-3 pt-md-0">
                            <h2><a href="<?= base_url('PostMessage')?>">Post</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="search" class="bg-purple">
        <div class="container-fluid py-5">
            <div class="row d-flex justify-content-center">
                <form action="/login/login" method="post">
                    <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                        <input style="width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-0" name="email_username" id="email_username" placeholder="Looking for something ? ">
                        <i class="fas fa-search fa-1x submitButton" style="margin-left: -30px; margin-top: 10px;"></i>
                    </div>                    
                </form>
            </div>
        </div>
    </section>

    <div class="container-xl py-5" style="filter : invert(1)">
        <div class="row d-flex justify-content-center">
            <div class="text-center mx-2"><a href="" class="text-decoration-none"><img src="<?= base_url('assets'); ?>/img/formal.png" width="115px" alt=""><h6 class="text-white text-center">Formal</h6></a></div>
            <div class="text-center mx-2"><a href="" class="text-decoration-none"><img src="<?= base_url('assets'); ?>/img/non formal.png" width="115px" alt=""><h6 class="text-white text-center">Non-formal</h6></a></div> 
            <div class="text-center mx-2"><a href="" class="text-decoration-none"><img src="<?= base_url('assets'); ?>/img/fashion icon.png" width="115px" alt=""><h6 class="text-white text-center">Non-formal</h6></a></div>           
        </div>
    </div>

    <section id="items" class="mb-5">
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold">Sub Category</div>
                <div class="controls d-flex align-items-center">
                    <div class="arrow d-none d-md-block mr-5">
                        <i class="fas fa-caret-left fa-3x mr-4"></i>
                        <i class="fas fa-caret-right fa-3x"></i>
                    </div>
                    <div class="more h5"><a href="<?= base_url('Explore'); ?>">more...</a></div>
                </div>
            </div>
                      
            <div class="horizontalScroll">
                <!-- loop schools -->
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                
            </div>
        </div> 
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold">Sub Category</div>
                <div class="controls d-flex align-items-center">
                    <div class="arrow d-none d-md-block mr-5">
                        <i class="fas fa-caret-left fa-3x mr-4"></i>
                        <i class="fas fa-caret-right fa-3x"></i>
                    </div>
                    <div class="more h5"><a href="<?= site_url('Explor'); ?>">more...</a></div>
                </div>
            </div>
                      
            <div class="horizontalScroll">
                <!-- loop schools -->
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                
            </div>
        </div> 
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold">Sub Category</div>
                <div class="controls d-flex align-items-center">
                    <div class="arrow d-none d-md-block mr-5">
                        <i class="fas fa-caret-left fa-3x mr-4"></i>
                        <i class="fas fa-caret-right fa-3x"></i>
                    </div>
                    <div class="more h5"><a href="<?= site_url('Explore'); ?>">more...</a></div>
                </div>
            </div>
                      
            <div class="horizontalScroll">
                <!-- loop schools -->
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
                </div>
                <div class="item d-flex justify-content-between flex-column align-items-center">
                    <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                    <div class="boothSmallName">Halmahera Music Semarang</div>
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
    <div class="modal fade schoolFullModal m-0 p-0" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="img-fluid booth">
            <div class="tron d-flex flex-column"></div>
            <div class="logo"><img src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="" srcset="" class="booth-logo"></div>
            <div class="booth-name d-flex align-items-center font-weight-bold">Nama sekolah</div>
            <div class="gallery"> <img src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="" srcset="" class="booth-img"></div>
            <a href="<?= base_url('Profile')?>"><div class="profile"></div></a>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        // change booth color
        var counter = 0;
        setInterval(e => {
            counter += 1;
            document.querySelector('.booth').style.filter = `hue-rotate(${counter}deg)`;
        }, 10);

        document.querySelectorAll(".item").forEach(i => {
            i.onclick = e => {
                const schoolModal = document.querySelector('.schoolFullModal');

                // change name
                schoolModal.querySelector('.booth-name').innerText = e.target.parentElement.querySelector('.boothSmallName').innerText;
                // change pic
                // schoolModal.querySelector('.booth-img').setAttribute('src', `./img/carousel ${Math.ceil(Math.random()*4)}.jpg`);
                schoolModal.querySelector('.booth-img').setAttribute('src', `<?= base_url('assets'); ?>/img/HMS LOGO.jpeg`);
                // change logo
                // schoolModal.querySelector('.booth-logo').setAttribute('src', `./img/sekolah ${Math.ceil(Math.random()*6)}.png`);
                schoolModal.querySelector('.booth-logo').setAttribute('src', `<?= base_url('assets'); ?>/img/sekolah 6.png`);
                // change href
                //schoolModal.querySelector('a').setAttribute('href', `${Math.ceil(Math.random()*6)}.html`);

                $(".schoolFullModal").modal("toggle");
            }
        })
        
    
        // ADD CLOSE BUTTON
        var added = false;
        var body = document.querySelector('body');
        const config = { attributes: true, childlist : true, subtree : true};

        const observer = new MutationObserver((a, b) => {
            if(!added){
            added = true;
            const backdrop = document.querySelector('.schoolFullModal');

            let close = document.createElement('i');
            close.className = "far fa-times fa-2x text-white mr-3 mr-sm-0";
            close.style.position = "absolute";
            close.style.top = "2%";
            close.style.right = "2%";
            close.style.cursor = "pointer";

            close.onclick =  e => {
                $(".schoolFullModal").modal("toggle");
            };

            backdrop.appendChild(close);
            }
        });

        observer.observe(body, config);
    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="<?= base_url('assets');?>/js/loggedIn.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>