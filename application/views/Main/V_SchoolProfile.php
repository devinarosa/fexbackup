    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile | <?= $org[0]['fullname']?> </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url('assets')?>/css/style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">

    </head>
    <body>
        <section id="nav">
            <nav class="navbar navbar-expand navbar-dark">
                <div class="container-xl">
                    <a class="navbar-brand d-none d-sm-block" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                    <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard')?>">HMS</a>
                      <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <a  href="#" class="dropdown-toggle px-3 text-white pt-1" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $diri['name']?></a>
                            <div class="dropdown-menu" aria-labelledby="userMenu">
                                <a  href="<?= base_url('PostMessage')?>" class="btn dropdown-item" >Post Message</a>
                                <a href="<?= base_url('EditProfile')?>" class="btn dropdown-item">Edit Profile</a>
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
                    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#mainCarousel" data-slide-to="1"></li>
                          <li data-target="#mainCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php if (empty($foto)) {?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="First slide">
                            </div>
                          <?php }else if (!empty($foto)){ ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets')?>/upload/foto/<?= $foto[0]['filename']?>" alt="Slide No-<?= $foto[0]['order_num']?>">
                            </div>  
                          <?php foreach($foto as $k){?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets')?>/upload/foto/<?= $k['filename']?>" alt="Slide No-<?= $k['order_num']?>">
                            </div>  
                          <?php }} ?>
                          
                        </div>
                        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </section>
        <!-- <section id="mainImg">
            <div class="container-fluid">
                <div class="row">
                    <img src="<?= base_url('assets')?>/img/schoolPicture.jpg" alt="">
                </div>
            </div>
        </section> -->

        <section id="schoolProfile">
            <div class="container-xl my-5">
                <div class="row">
                    <div class="col-md-6 my-5 d-flex justify-content-center">
                        <img src="<?= base_url('assets'); ?>/img/roles/<?= $org[0]['logo']?>" alt="" width="300" height="300">
                    </div>
                    <div class="col-md-6 my-5 d-flex flex-column justify-content-center">
                        <div class="h1 mb-3"><?= $org[0]['fullname']?></div>
                        <div class="h5 mb-4"><?= $org[0]['alamat']?></div>
                        <p class="lead">
                            <?= $org[0]['deskripsi']?>
                        </p>
                        <h4><?= $org[0]['fitur']?></h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="video1">
            <div class="container-xl my-5 py-5">
                <div class="row d-flex justify-content-center">
                    <div class="video-container">
                        <iframe src="<?= $org[0]['url']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section id="fasilitas">
            <div class="container-xl d-flex justify-content-center my-5 pt-5">
                <div class="row">
                    <div class="h1">Fasilitas</div>
                </div>
            </div>
            <div class="container-xl">
            <div class="row my-5">
                    <div id="carouselFasilitas" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselFasilitas" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselFasilitas" data-slide-to="1"></li>
                          <li data-target="#carouselFasilitas" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php if (empty($fasilitas)) {?>
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('assets'); ?>/img/HMS LOGO.jpeg" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Picture 1</h5>
                                    <p>Give simple notes..</p>
                                </div>
                              </div>
                          <?php }else if (!empty($fasilitas)){ ?>
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('assets'); ?>/upload/fasilitas/<?= $fasilitas[0]['filename']?>" alt="Second slide">
                            <div class="carousel-caption">
                                <h5>Picture 1</h5>
                                <p><?= $fasilitas[0]['note']?></p>
                            </div>
                          </div>
                          <?php foreach($fasilitas as $j){?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('assets')?>/upload/fasilitas/<?= $j['filename']?>" alt="Slide No-<?= $j['order_num']?>">
                                <div class="carousel-caption">
                                    <h5>Picture <?= $j['order_num']?></h5>
                                    <p><?= $j['note']?></p>
                                </div>
                            </div>  
                          <?php }} ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselFasilitas" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselFasilitas" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="prestasi">
            <div class="container-xl px-4 my-5 mx-auto">
                <div class="row">
                    <div class="col-md-6 my-5 d-flex justify-content-center">
                        <img src="<?= base_url('assets'); ?>/img/roles/<?= $org[0]['logo']?>" alt="" width="300" height="300">
                    </div>
                    <div class="col-md-6 mb-5 my-4 d-flex flex-column justify-content-center">
                        <div class="h2 mb-4">Fitur Tambahan</div>
                        <p class="lead">
                            <?= $org[0]['fitur']?>
                        </p>
                        <!-- <ol>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        </ol> -->
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
        
        <!--contact button modal -->
        <section id="contactButton">
            <div class="contactUs d-flex flex-column align-items-center">
                <i class="fab fa-whatsapp-square fa-3x trigger"></i>
            </div>
        </section>
        <div class="contactCard schoolProfileHidden container bg-purple text-white">
            <div class="row title">
                Contact Us
                <p style="font-size:14px; font-weight:200;margin-top: 5px;">Tertarik? Silahkan Hubungi kami melalui channel berikut :</p>
            </div>
            <div class="row options">
                <div class="col-12 whatsapp container mt-2">
                    <div class="row a">
                        <a href="https://wa.me/<?= $org[0]['phone_number']?>">
                            <i class="fab fa-whatsapp fa-2x col-3"></i> 
                        </a>
                        <a style="color:black" href="https://wa.me/<?= $org[0]['phone_number']?>">
                            <p class="col-8">Whatsapp</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 email container mt-2">
                    <div class="row b">
                        <a href="mailto:<?= $org[0]['email']?>">
                            <i class="far fa-envelope fa-2x col-3"></i>
                        </a>
                        <a href="mailto:<?= $org[0]['email']?>">
                            <p class="col-8">Email</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 zoom container mt-2">
                    <div class="row c">
                    <i class="fas fa-video fa-2x col-3"></i>
                        <p class="col-8">Zoom</p>
                    </div>
                </div>   
            </div>
        </div>



        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="<?= base_url('assets');?>/js/schoolProfile.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script>
            
            const hiddenContacts = document.querySelector('.schoolProfileHidden');
            const contactsTrigger = document.querySelector('.contactUs i.trigger')
            
            var offset = -100;
            var seperation = 110;
            
            hiddenContacts.setAttribute('offset', offset)
            
            var footerDist = document.querySelector('#footer').offsetTop - window.innerHeight;

            window.onresize = () => {
                var footerDist = document.querySelector('#footer').offsetTop - window.innerHeight;
                console.log(footerDist);
            }
            document.onscroll = () => {
                
                let triggerDist = document.documentElement.scrollTop;
                // console.log(footerDist);
                // console.log(triggerDist);
                if(triggerDist > footerDist){
                    trigger.style.filter = "invert(1)";
                }else{
                    trigger.style.filter = "";
                }
            }

            contactsTrigger.onclick = () => {
                console.log('🐪');
                if(hiddenContacts.style.transform == ''){
                contactsTrigger.className = "fas fa-times fa-3x trigger";
                hiddenContacts.style.transform = `translate(0, ${hiddenContacts.getAttribute('offset')}px)`;
                hiddenContacts.style.opacity = '1';
                hiddenContacts.style.pointerEvents = 'all';
                }else{
                    contactsTrigger.className = "fab fa-whatsapp-square fa-3x trigger";
                    hiddenContacts.style.transform = ``;
                    hiddenContacts.style.opacity = '';
                    hiddenContacts.style.pointerEvents = '';
                }
            }

            setTimeout(
                    () => {
                        contactsTrigger.click();
                    }, 3000
            );
            
            
        </script>

    </body>
    </html>