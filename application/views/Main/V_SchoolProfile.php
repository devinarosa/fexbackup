<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php echo school name</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        section#contactButton{
            position: fixed;
            right: 3%;
            bottom: 6%;
            height: 70px;
            width: 70px;

        }
        .hidden {
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    
    <section id="nav">
        <nav class="navbar navbar-expand navbar-dark">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block" href="index.html">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="index.html">HMS</a>
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
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="Third slide">
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
                    <img src="<?= base_url('assets'); ?>/img/fex.gif" alt="" width="300" height="300">
                </div>
                <div class="col-md-6 my-5 d-flex flex-column justify-content-center">
                    <div class="h1 mb-3">HMS Music School</div>
                    <div class="h5 mb-4">Jl. Atmodirono Raya No.12, Semarang Tengah, Semarang</div>
                    <p class="lead">
                        Sekolah Musik Yamaha Internasional yang berdiri di Semarang dan memiliki Sistem Pengajaran Musik Yamaha yang diakui DUNIA.
                    </p>
                    <h4>"Our Quality is Our Priotity"</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="video1">
        <div class="container-xl my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/PV0n5bSNRC4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="extrakulikuler">
        <div class="container-xl px-4 my-5 mx-auto">
            <div class="row">
                <div class="col-md-6 mb-5 d-flex flex-column justify-content-center">
                    <div class="h3 mb-4">Kegiatan dan Ekstrakulikuler</div>
                        <ol>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        </ol>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?= base_url('assets')?>/img/schoolLogo.png" alt="" width="300" height="300">
                </div>
            </div>
        </div>
    </section> -->

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
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url('assets'); ?>/img/HMS LOGO.jpeg" alt="First slide">
                        <div class="carousel-caption">
                            <h5>Piano</h5>
                            <p>Kursus untuk usia 6 tahun hingga dewasa, dengan metode pendekatan dengan pelatihan pendengaran, lalu secara bertahap membaca not balok.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets'); ?>/img/HMS LOGO.jpeg" alt="Second slide">
                        <div class="carousel-caption">
                            <h5>Guitar</h5>
                            <p>Jika anda ingin memainkan lagu favorit yang anda dengar di radio, bergabunglah bersama kami! Kursus ini untuk usia 6 tahun hingga dewasa.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url('assets'); ?>/img/HMS LOGO.jpeg" alt="Third slide">
                        <div class="carousel-caption">
                            <h5>Drums</h5>
                            <p>Anda akan belajar rudiments drum yang dibutuhkan untuk membuat anda mahir memainkan drum. Kelas ini untuk usia 6 tahun hingga dewasa.</p>
                        </div>
                      </div>
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
                    <img src="<?= base_url('assets'); ?>/img/schoolLogo.png" alt="" width="300" height="300">
                </div>
                <div class="col-md-6 mb-5 my-4 d-flex flex-column justify-content-center">
                    <div class="h2 mb-4">Fitur Tambahan</div>
                    <ol>
                        <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    </ol>
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

    <section id="contactButton">
        <div class="contactUs d-flex flex-column align-items-center">
            <i class="far fa-comment-dots fa-3x trigger"></i>
            <i class="fab fa-whatsapp fa-3x hidden"></i>
            <i class="far fa-envelope fa-3x hidden"></i>
        </div>
    </section>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="<?= base_url('assets');?>/js/schoolProfile.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        
        const contacts = document.querySelectorAll('.contactUs i.hidden');
        const trigger = document.querySelector('.contactUs i.trigger')
        var offset = -110;
        var seperation = 110;
        
        contacts.forEach(i => {
            i.setAttribute('offset', `${offset}`);
            offset -= seperation;
        });

        trigger.onclick = () => {
            if(contacts[0].style.transform == ''){
            contacts.forEach(i => {
                i.style.transform = `translate(0px, ${i.getAttribute('offset')}px)`;
                i.style.opacity = '1';
            })
            }else{
                contacts.forEach(i => {
                i.style.transform = ``;
                i.style.opacity = '';
            })
            }
        }
        
    </script>

</body>
</html>