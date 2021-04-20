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
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">
    <script type="text/javascript">
        var baseurl = "<?= base_url('')?>"
    </script>
    <title>Future Education Expo</title>
  </head>
  <body>

    <?php $this->load->view('_partials/navbar.php'); ?>

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
                            <img src="<?= base_url('assets/img/')?>livestream logo copy.png" alt="">
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
                <form action="<?= base_url('Search')?>" method="GET">
                    <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                        <input style="width: 90vw; max-width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-0" name="q" id="email_username" placeholder="Looking for something ? ">
                        <i class="fas fa-search fa-1x submitButton" style="margin-left: -30px; margin-top: 10px;"></i>
                    </div>                    
                </form>
            </div>
        </div>
    </section>

    <div class="container-xl py-5">
        <div class="row d-flex justify-content-center pilihanKategori">
            <?php foreach ($category as $k) { ?>
                <div class="text-center mx-2"><a onclick="showAll(<?= $k['id']?>)" class="text-decoration-none"><img src="<?= base_url('assets'); ?>/img/<?= $k['icon']?>" style="filter : invert(1)" width="115px" alt=""><h6 class="font-weight-bold text-center"><?= $k['name']?></h6></a></div>
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
                    
                    <div foto="<?= $b['filename']; ?>" linkToProfile="<?= base_url('Profile/3/'.$b['user_id'])?>" user_id="<?=$b['user_id']?>" logo="<?= $b['logo']?>" color_booth="<?php $ye = str_replace('filter: ', '', $b['css']); echo $ye; ?>" deskripsi="<?php $ex = explode(' ', $b['deskripsi']);$arr=array();for($i = 0; $i < 10; $i++){$arr[] = $ex[$i];} $imp = implode(' ', $arr); echo $imp; ?>" class="item d-flex justify-content-between flex-column align-items-center">
                        <img src="<?= base_url('assets'); ?>/img/booth.png" alt="<?= $b['fullname']?>" class="schoolCarouselIcon">
                        <div class="boothSmallName"><?= $b['fullname'] ?></div>
                    </div>
                
                <?php }else{}} ?>

                <?php foreach( $vendor as $a ) { $arr2 = explode(',', $a['id_subcategory']); if ( in_array($k['id'], $arr2) ) { ?>

                    <div foto="<?= $a['filename']; ?>" linkToProfile="<?= base_url('Profile/2/'.$a['user_id'])?>" user_id="<?=$a['user_id']?>" logo="<?= $a['logo']?>" color_booth="<?= str_replace('filter: ', '', $a['css']) ?>" deskripsi="<?= $a['deskripsi']?>" class="item d-flex justify-content-between flex-column align-items-center">
                        <img src="<?= base_url('assets'); ?>/img/booth.png" alt="<?= $a['fullname']?>" class="schoolCarouselIcon">
                        <div class="boothSmallName"><?= $a['fullname'] ?></div>
                    </div>
                
                <?php }else{}} ?>
            </div>
        </div> 
        <?php } ?>
    </section>

    <?php $this->load->view('_partials/footer.php'); ?>

    <!-- Modals -->
    <div class="modal fade schoolFullModal m-0 p-0" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <img src="<?= base_url('assets')?>/img/booth.png" alt="" class="img-fluid booth">
            <div class="tron d-flex flex-column"></div>
            <div class="logo"><img src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="" srcset="" class="booth-logo"></div>
            <div class="booth-name d-flex align-items-center font-weight-bold">Nama sekolah</div>
            <div class="gallery"> <img src="<?= base_url('assets')?>/img/HMS LOGO.jpeg" alt="" srcset="" class="booth-img"></div>
            <a class="direct"><div class="profile"></div></a>
            <a class="direct"><div class="contactUs"><img src="<?= base_url('assets')?>/img/Contact us.gif" alt="" class="booth-contactUs"></div></a>
          </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets');?>/js/loggedIn.js"></script>

  </body>
</html>