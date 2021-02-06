<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="d-flex flex-column">

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

    <section id="postMessage" class="flex-grow-1">
        <div class="container-xl my-5 px-4 px-md-5">
            <div class="row my-5">
                <div class="col d-flex flex-column">
                    <div class="h1 font-weight-bold">Post A Message</div>
                    <p class="lead">We will forward your message to all of the schools and vendors in this event. And soon you’ll be contacted by one of them.</p>
                </div>
                <div class="col d-none d-md-block"></div>
            </div>
            <div class="row border rounded">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-sm-1 my-3 ml-2 ml-sm-0 d-sm-flex justify-content-center">
                            <i class="far fa-user fa-3x"></i>
                        </div>
                        <div class="col-sm-11 mt-3">
                            <div class="form-group">
                                <textarea class="form-control border-0 post-text-area" id="exampleFormControlTextarea1" rows="3" placeholder="Apa yang anda cari ..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4 d-flex align-items-center">
                        <div class="col-sm-7">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile02">
                                  <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose Image ... </label>
                                </div>
                                <div class="input-group-append ml-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Category</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="Lainya">Lainya...</option>
                                    </select>
                                </div>
                              </div>
                        </div>
                        <div class="col-sm-5 d-flex justify-content-end mt-4 mt-sm-0">
                            <button type="button" class="btn mr-3 d-flex align-items-center">
                                <i class="fa fa-paper-plane fa-2x mr-3"></i>
                                <span class="post-btn">Send</span>
                                </button>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </section>

    <section id="yourPost">
        <div class="container-xl my-5 px-4 px-md-5">
            <div class="row my-5 px-3"><div class="h1 font-weight-bold">Your Post</div></div>


            <div class="row mb-5">
                <div class="col-sm-2 mb-4">
                    <i class="far fa-user fa-3x"></i>
                </div>
                <div class="col-sm-10 border rounded">
                    <div class="container-xl px-4 py-4">
                        <div class="row">
                            <div class="col-10 mr-3">
                            <div class="h3">Category : SD</div>
                            <div class="small">08/09 13:45</div>
                            <p class="mt-3 post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa totam quo repellat atque iste ratione aliquam exercitationem recusandae consequuntur libero.</p>
                            </div>
                            <div class="col-1 d-flex justify-content-end">
                                <div class="dropleft">
                                    <i class="fas fa-ellipsis-v btn" id="edit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    <div class="dropdown-menu" aria-labelledby="edit">
                                        <button class="dropdown-item edit-post" type="button">Edit Post</button>
                                        <button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalCenter">Delete Post</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header d-flex justify-content-center">
                                      <div class="modal-title text-center f-15 bold" id="exampleModalLongTitle">Hapus Post?</div>
                                    </div>
                                    <div class="modal-footer p-0 d-flex justify-content-around">
                                      <button type="button" class="btn" data-dismiss="modal">Kembali</button>
                                      <button type="button" class="btn" data-dismiss="modal">Ya</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col"><img src="<?= base_url('assets/img')?>/schoolLogo.png" alt="" class="<?= base_url('assets/img')?>-fluid"></div>
                            <div class="col"><img src="<?= base_url('assets/img')?>/schoolLogo.png" alt="" class="<?= base_url('assets/img')?>-fluid"></div>
                            <div class="col"><img src="<?= base_url('assets/img')?>/schoolLogo.png" alt="" class="<?= base_url('assets/img')?>-fluid"></div>
                        </div>
                        <div class="row"></div>
                    </div>
                </div>
            </div>


            <div class="row mb-5">
                <div class="col-sm-2 mb-4">
                    <i class="far fa-user fa-3x"></i>
                </div>
                <div class="col-sm-10 border rounded">
                    <div class="container-xl px-4 py-4">
                        <div class="row">
                            <div class="col-10 mr-3">
                            <div class="h3">Category : SD</div>
                            <div class="small">08/09 13:45</div>
                            <p class="mt-3 post-text">Culpa totam quo repellat atque iste ratione aliquam exercitationem recusandae consequuntur libero.</p>
                            </div>
                            <div class="col-1 d-flex justify-content-end">
                                <div class="dropleft">
                                    <i class="fas fa-ellipsis-v btn" id="edit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    <div class="dropdown-menu" aria-labelledby="edit">
                                        <button class="dropdown-item edit-post" type="button">Edit Post</button>
                                        <button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalCenter">Delete Post</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header d-flex justify-content-center">
                                      <div class="modal-title text-center f-15 bold" id="exampleModalLongTitle">Hapus Post?</div>
                                    </div>
                                    <div class="modal-footer p-0 d-flex justify-content-around">
                                      <button type="button" class="btn" data-dismiss="modal">Kembali</button>
                                      <button type="button" class="btn" data-dismiss="modal">Ya</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col"><img src="<?= base_url('assets/img')?>/schoolLogo.png" alt="" class="<?= base_url('assets/img')?>-fluid"></div>
                            <div class="col"><img src="<?= base_url('assets/img')?>/schoolLogo.png" alt="" class="<?= base_url('assets/img')?>-fluid"></div>
                            <div class="col"><img src="<?= base_url('assets/img')?>/schoolLogo.png" alt="" class="<?= base_url('assets/img')?>-fluid"></div>
                        </div>
                        <div class="row"></div>
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

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets')?>/js/app.js"></script>
</body>
</html>