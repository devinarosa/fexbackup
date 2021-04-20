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
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">

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

    <?php $this->load->view('_partials/navbar.php'); ?>
    
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
                            <?php $user_id = $info3[0]['user_id'];$p=0; if($info3[0]['vendor_acc_flag'] == 'Y'){$p=2;}else if($info3[0]['tenant_acc_flag'] == 'Y'){$p=3;}?>
                                    <div class="carousel-item active">

                                        <?php if (isset($pict3[0]['filename']) && $pict3[0]['filename'] !== ''){?>
                                        <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                            <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/upload/foto/<?= $pict3[0]['filename']?>" alt="Third slide">
                                        </a>
                                        <?php }else{ ?>
                                        <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                            <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/upload/foto/HMS LOGO.jpeg" alt="Third slide">
                                        </a>
                                        <?php } ?>

                                        <div class="carousel-caption d-none d-md-block my-3">
                                            <h1 class="schoolCarouselName font-weight-bold"><?= strtoupper($info3[0]['fullname']) ?></h1>
                                            <p class="schoolCarouselTagline h4"><?= $info3[0]['fullname']?></p>
                                            <p class="schoolCarouselAddress"><?= $info3[0]['email']?> - <?= $info3[0]['phone_number']?></p>
                                            <div class="schoolCarouselBadge">
                                                <div class="badge">Selected as</div>
                                                <div class="badge">#Top3</div>
                                            </div>
                                        </div>
                                    </div>

                            <?php $user_id = $info3[1]['user_id'];$p=0; if($info3[1]['vendor_acc_flag'] == 'Y'){$p=2;}else if($info3[1]['tenant_acc_flag'] == 'Y'){$p=3;}?>
                                    <div class="carousel-item">

                                        <?php if (isset($pict3[1]['filename']) && $pict3[1]['filename'] !== ''){?>
                                        <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                            <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/upload/foto/<?= $pict3[1]['filename']?>" alt="Third slide">
                                        </a>
                                        <?php }else{ ?>
                                        <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                            <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/upload/foto/HMS LOGO.jpeg" alt="Third slide">
                                        </a>
                                        <?php } ?>

                                        <div class="carousel-caption d-none d-md-block my-3">
                                            <h1 class="schoolCarouselName font-weight-bold"><?= strtoupper($info3[1]['fullname']) ?></h1>
                                            <p class="schoolCarouselTagline h4"><?= $info3[1]['fullname']?></p>
                                            <p class="schoolCarouselAddress"><?= $info3[1]['email']?> - <?= $info3[1]['phone_number']?></p>
                                            <div class="schoolCarouselBadge">
                                                <div class="badge">Selected as</div>
                                                <div class="badge">#Top3</div>
                                            </div>
                                        </div>
                                    </div>

                            <?php $user_id = $info3[2]['user_id'];$p=0; if($info3[2]['vendor_acc_flag'] == 'Y'){$p=2;}else if($info3[2]['tenant_acc_flag'] == 'Y'){$p=3;}?>
                                    <div class="carousel-item">
                                        <?php if (isset($pict3[2]['filename']) && $pict3[2]['filename'] !== ''){?>
                                        <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                            <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/upload/foto/<?= $pict3[2]['filename']?>" alt="Third slide">
                                        </a>
                                        <?php }else{ ?>
                                        <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                            <img class="d-block w-100 schoolCarouselImg" src="<?= base_url('assets')?>/upload/foto/HMS LOGO.jpeg" alt="Third slide">
                                        </a>
                                        <?php } ?>

                                        <div class="carousel-caption d-none d-md-block my-3">
                                            <h1 class="schoolCarouselName font-weight-bold"><?= strtoupper($info3[2]['fullname']) ?></h1>
                                            <p class="schoolCarouselTagline h4"><?= $info3[2]['fullname']?></p>
                                            <p class="schoolCarouselAddress"><?= $info3[2]['email']?> - <?= $info3[2]['phone_number']?></p>
                                            <div class="schoolCarouselBadge">
                                                <div class="badge">Selected as</div>
                                                <div class="badge">#Top3</div>
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
                    <form action="<?= base_url('Search')?>" method="GET">
                        <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                            <input style="width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-0" name="q" id="email_username" placeholder="Looking for something ? ">
                            <i class="fas fa-search fa-1x submitButton" style="margin-left: -30px; margin-top: 10px;"></i>
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
                        <?php for ($i=0; $i < 10; $i++) { 

                            if( isset($pict10[$i]['filename']) && $pict10[$i]['filename'] !== '' ){ ?>
                                <?php $user_id = $info10[$i]['user_id'];$p=0; if($info10[$i]['vendor_acc_flag'] == 'Y'){$p=2;}else if($info10[$i]['tenant_acc_flag'] == 'Y'){$p=3;}?>
                                    <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                        <div class="row py-4">
                                            <div class="col-3 p-4"><img src="<?= base_url('assets')?>/upload/foto/<?= $pict10[$i]['filename']?>" alt="" class="img-fluid"></div>
                                            <div class="col-9 d-flex flex-column justify-content-center">
                                                <div class="schoolTrendingName font-weight-bold h3"><?= strtoupper($info10[$i]['fullname']) ?></div>
                                                <div class="schoolTrendingTagline font-weight-bold h5"><?= $info10[$i]['fullname'] ?>
                                                </div>
                                                <div class="schoolTrendingAddress"><?= $info10[$i]['email']?> - <?= $info10[$i]['phone_number']?></div>
                                                <div class="schoolTrendingBadge mt-3">
                                                    <div class="badge">Selected as</div>
                                                    <div class="badge">#Top10</div>
                                                </div>
                                            </div>
                                        </div>  
                                    </a>
                            <?php }else{} ?>
                            
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3 p-0 my-5">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="title h4 font-weight-bold pl-3">
                                Mungkin anda tertarik
                            </div>
                        </div>
                        <?php for ($i=0; $i < 15; $i++) { 

                            if( isset($pict15[$i]['filename']) && $pict15[$i]['filename'] !== '' ){ ?>
                            <?php $user_id = $info15[$i]['user_id'];$p=0; if($info15[$i]['vendor_acc_flag'] == 'Y'){$p=2;}else if($info15[$i]['tenant_acc_flag'] == 'Y'){$p=3;}?>

                                <a href="<?= base_url('Profile/'.$p.'/'.$user_id)?>" target="_blank">
                                    <div class="row mb-3 trendingVendor d-flex justify-content-center align-items-center px-3">
                                        <img src="<?= base_url('assets')?>/upload/foto/<?= $pict15[$i]['filename']?>" alt="" class="img-fluid trendingVendorImage">
                                        <div class="trendingVendorTitle h3"><?= strtoupper($info15[$i]['fullname']) ?></div>
                                    </div>
                                </a>

                            <?php }else{} ?>
                            
                        <?php } ?>
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