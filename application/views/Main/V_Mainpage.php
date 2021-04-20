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
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">
    <!-- Google Sign In -->
    <meta name="google-signin-client_id" content="260833943697-bi14lrk0pkeb040uqark5kajtedkj9k1.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script>
        function onSuccess(user) {
            const profile = user.getBasicProfile();
            const id = profile.getId();
            const name = profile.getName();
            const avatar = profile.getImageUrl();
            const email = profile.getEmail();

            const form = document.createElement('form');
            form.setAttribute('method', 'POST');
            form.setAttribute('action', 'GoogleAuth');
            form.innerHTML += `<input type="hidden" name="id" value="${id}">`;
            form.innerHTML += `<input type="hidden" name="name" value="${name}">`;
            form.innerHTML += `<input type="hidden" name="avatar" value="${avatar}">`;
            form.innerHTML += `<input type="hidden" name="email" value="${email}">`;

            document.body.appendChild(form);
            form.submit();
        }

        function onError(error) {
            console.error(`Google Sign In Failed: ${error.error}`);
        }

        function initAuth() {
            gapi.load('auth2', function() {
                const auth2 = gapi.auth2.init({
                    client_id: '260833943697-bi14lrk0pkeb040uqark5kajtedkj9k1.apps.googleusercontent.com',
                    cookiepolicy: 'single_host_origin',
                    scope: 'profile email',
                });
                const element = document.querySelector('#g-signin');
                auth2.attachClickHandler(element, {}, onSuccess, onError);
            });
        }

        window.addEventListener('DOMContentLoaded', () => initAuth());
    </script>

    <title>Future Education Expo</title>

  </head>
  <body>

    <section id="nav">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block" href="<?= base_url('')?>">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="<?= base_url('')?>">HMS</a>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active d-sm-flex">
                        <a class="nav-link" href="<?= base_url('Login')?>">Login / Register</a>
                      </li>
                    </li>
                  </ul>
            </div>
        </nav>
    </section>
    
    <section id="karouselUtama">
        <div class="">
        <div class="row my-5">
                <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#mainCarousel" data-slide-to="1"></li>
                      <li data-target="#mainCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/<?php if (isset($slideshow[1]['filename']) && $slideshow[1]['filename'] !== ''){echo $slideshow[1]['filename'];}else{echo 'HMS LOGO.jpeg';}?>" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/<?php if (isset($slideshow[2]['filename']) && $slideshow[2]['filename'] !== ''){echo $slideshow[2]['filename'];}else{echo 'HMS LOGO.jpeg';}?>" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/img/<?php if (isset($slideshow[3]['filename']) && $slideshow[3]['filename'] !== ''){echo $slideshow[3]['filename'];}else{echo 'HMS LOGO.jpeg';}?>" alt="Third slide">
                      </div>
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
                            <img src="<?= base_url('assets')?>/img/livestream logo copy.png" alt="">
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

    <section id="search" class="bg-purple">
        <div class="container-fluid py-5">
            <div class="row d-flex justify-content-center">
                <form action="" method="post">
                    <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                        <input style="width: 90vw; max-width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-0" name="email_username" id="email_username" placeholder="Looking for something ? ">
                        <i class="fas fa-search fa-1x submitButton" style="margin-left: -30px; margin-top: 10px;"></i>
                    </div>                    
                </form>
            </div>
        </div>
    </section>

    <div class="container-xl py-5">
        <div class="row d-flex justify-content-center pilihanKategori">
            <?php foreach ($category as $k) { ?>
                <div class="text-center mx-2 "><a onclick="showAll(<?= $k['id']?>)" class="text-decoration-none"><img src="<?= base_url('assets'); ?>/img/<?= $k['icon']?>" style="filter : invert(1)" width="115px" alt=""><h6 class="font-weight-bold text-center"><?= $k['name']?></h6></a></div>
            <?php } ?>           
        </div>
    </div>

    <section id="items" class="mb-5 change">
        <?php foreach ($subs as $k) {?>
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold"><?= $k['name']?></div>
                <div class="controls d-flex align-items-center">
                    <div class="arrow d-none d-md-block mr-5">
                        <i class="fas fa-caret-left fa-3x mr-4"></i>
                        <i class="fas fa-caret-right fa-3x"></i>
                    </div>
                    <div class="more h5"><a href="<?= base_url('Explore'); ?>">more...</a></div>
                </div>
            </div>
            <div class="horizontalScroll">

                <?php foreach( $tenant as $b ) { $arr1 = explode(',', $b['id_subcategory']); if ( in_array($k['id'], $arr1) ) { ?>
                      
                <!-- loop schools -->

                    <div foto="" linkToProfile="#" user_id="<?=$b['user_id']?>" logo="<?= $b['logo']?>" class="item d-flex justify-content-between flex-column align-items-center">
                        <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                        <div class="boothSmallName"><?= $b['fullname'] ?></div>
                    </div>
                
                <?php }else{}} ?>

                <?php foreach( $vendor as $a ) { $arr2 = explode(',', $a['id_subcategory']); if ( in_array($k['id'], $arr2) ) { ?>
                      
                <!-- loop schools -->

                    <div foto="" linkToProfile="#" user_id="<?=$a['user_id']?>" logo="<?= $a['logo']?>" class="item d-flex justify-content-between flex-column align-items-center">
                        <img src="<?= base_url('assets'); ?>/img/booth.png" alt="" class="schoolCarouselIcon">
                        <div class="boothSmallName"><?= $a['fullname'] ?></div>
                    </div>
                
                <?php }else{}} ?>
            </div>
        </div> 
        <?php } ?>
    </section>

    <section id="info">
        <div class="container-xl">
            <div class="row m-auto">
                <p class="font-weight-bolder mx-auto h3">Get Ready</p>
            </div>
            <div class="row p-4 m-auto">
                <div class="col-md-4 my-5">
                    <img src="<?= base_url('assets'); ?>/img/card.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 my-5">
                    <img src="<?= base_url('assets'); ?>/img/card1.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 my-5">
                    <img src="<?= base_url('assets'); ?>/img/card2.png" alt="" class="img-fluid">
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
                        <?php if(isset($slideshow[4]['link']) && $slideshow[4]['link'] !== '')
                            {
                                echo $slideshow[4]['link'];
                                
                            }else{ 
                                echo "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur magnam pariatur deserunt a dolores minus. Quasi, tempora. Saepe, eaque. Autem quo placeat cumque provident numquam exercitationem quidem fuga sit debitis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, reprehenderit. Quasi numquam inventore, odit eos autem omnis iure est illum.";
                                }?>
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
                <?php foreach ($tenant as $s){?>
                <div class="col-md-1">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/img/roles/<?= $s['logo']?>" alt="" width="100%">
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="sponsor" style="margin-bottom: 10vmax">
        <div class="container-xl mt-3">
            <div class="row text-center pt-5">
                <div class="col-sm-12"><h3 class="font-weight-bolder">Sponsors</h3></div>
            </div>
            <div class="row pt-3">
                <?php foreach ($vendor as $s){?>
                <div class="col-md-1">
                    <img class="rounded-circle" src="<?= base_url('assets'); ?>/img/roles/<?= $s['logo']?>" alt="" width="100%">
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/footer.php'); ?>


    <!-- Modals -->
    <div class="modal fade registerModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content d-flex align-items-center justify-content-center px-4 text-center">
            <section id="hero">
                <div class="container-xl my-sm-5">
                    <div class="row">
                        <div class="col-md-6 d-none d-md-flex flex-column align-items-center pt-4">
                            <img src="<?= base_url('assets')?>/img/fexText.png" alt="" class="img-fluid px-5 pt-5">
                            <img src="<?= base_url('assets')?>/img/fex.gif" alt="" class="img-fluid p-5">
                        </div>
                        <div class="col-md-6 mt-sm-5 d-flex flex-column align-items-center justify-content-center">
                            <h2 class="my-5 py-sm-3 text-center font-weight-bold">Log In</h2>
                            <form action="<?= base_url('Auth')?>" class="py-5" style="width:85%" method="post">
                                <div class="form-group d-flex justify-content-center">
                                    <input style="width:100%; max-width: 400px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control" name="txtUsernameFex" id="email_username" placeholder="Username / Email">
                                </div>      
                                <div class="form-group d-flex justify-content-center pb-sm-4">
                                    <input style="width:100%; max-width: 400px; border-radius: 20px; padding-left: 20px; margin-left: -10px;" type="password" class="form-control" name="txtPasswordFex" id="password" placeholder="Password">
                                    <i class="far fa-eye" style="margin-left: -30px; margin-top: 10px; cursor: pointer;" id="togglePassword"></i>
                                </div>                
                                    <div class="pt-5 d-flex flex-column align-items-center">
                                        <button style="max-width: 300px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white" type="submit" name="submit" id="button-addon2"><i class="fas fa-sign-in-alt mx-1"></i> Log In</button>
                                        <button style="max-width: 300px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white mt-2 " type="submit" name="submit" id="g-signin"><i class="fab fa-fw fa-google mx-1"></i> Google</button>
                                    </div>
                                    <p class="justify-content-center mt-4 d-none d-sm-flex">Doesn’t have an account? Sign Up<a href="<?= base_url('Register')?>" class="pl-1 text-decoration-none">here</a></p>                    
                                    <p class="justify-content-center mt-4 d-flex d-sm-none">Doesn’t have an account? <a href="<?= base_url('Register')?>" class="pl-1 text-decoration-none">here</a></p>                    
                                    <p class="d-flex justify-content-center mb-5">Forget Password ? <a href="<?= base_url('ResetPassword')?>" class="pl-1 text-decoration-none">here</a></p>                    
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </section>
          </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
    var baseurl = '<?= base_url("")?>';
    </script>
    <script src="<?= base_url('assets')?>/js/mainPage.js"></script>


  </body>
</html>