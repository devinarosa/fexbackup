<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Search</title>
  </head>
  <body>

  <?php $this->load->view('_partials/navbar.php'); ?>

    <section id="hero">
        <div class="container-xl">
            <div class="row">
                <img src="<?=base_url('assets/img/')?>search.png" alt="" width="100%">
            </div>
        </div>
    </section>

    <section id="search">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12">
                    <form action="<?= base_url('Search')?>" method="GET">
                        <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                            <input style="width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border" name="q" id="email_username" placeholder="Looking for something ? " value="<?= ($q) ? $q : ''; ?>">
                            <i class="fas fa-search fa-1x submitButton" style="margin-left: -30px; margin-top: 10px;" onclick="document.querySelector('form').submit()"></i>
                        </div>                    
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="schools">
        <div class="container-xl pb-5">
            <div class="row text-center pb-5">
                <!-- when search result button isset atau dipencet maka display none div dibawah ini dan kebalikanya dengan di bawahnya lagi -->
                <!-- show 12 item per row 3 item (desktop), 6 item per row 3 (mobile) -->
                <div class="col-sm-12"><h3 class="font-weight-bolder text-left pl-4">Search Result :</h3></div>
            </div>

            <div class="row">
            <?php foreach($keywordTenant as $k) : ?>
                <div class="col-sm-6 container-fluid p-4">
                    <a href="<?= base_url('Profile/3/'.$k['user_id'])?>">
                    <div class="row"><img src="<?=base_url('assets/')?>upload/foto/<?= $k['filename']; ?>" alt="" class="w-100" style="height: 370px; object-fit: cover"></div>
                    <div class="row bg-light">
                        <div class="col-2 p-3 my-2"><img src="<?=base_url('assets/')?>img/roles/<?= $k['logo']; ?>" alt="" srcset="" class="img-fluid"></div>
                        <div class="col-10 pl-3 my-3 rounded-bottom">
                            <div class="h4"><?= $k['fullname']; ?></div>
                            <p><?= $k['alamat']; ?></p>
                        </div>
                    </div>
                    </a>
                </div>
            <?php endforeach; ?>
            

            <?php foreach($keywordVendor as $k) : ?>
                <div class="col-sm-6 container-fluid p-4">
                    <a href="<?= base_url('Profile/2/'.$k['user_id'])?>">
                    <div class="row"><img src="<?=base_url('assets/')?>upload/foto/<?= $k['filename']; ?>" alt="" class="w-100" style="height: 370px; object-fit: cover"></div>
                    <div class="row bg-light">
                        <div class="col-2 p-3 my-2"><img src="<?=base_url('assets/')?>img/roles/<?= $k['logo']; ?>" alt="" srcset="" class="img-fluid"></div>
                        <div class="col-10 pl-3 my-3 rounded-bottom">
                            <div class="h4"><?= $k['fullname']; ?></div>
                            <p><?= $k['alamat']; ?></p>
                        </div>
                    </div>
                    </a>
                </div>
            <?php endforeach; ?>
            </div>
            

        </div>
    </section>

    <?php $this->load->view('_partials/footer.php'); ?>

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