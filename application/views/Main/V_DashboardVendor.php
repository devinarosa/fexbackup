<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="d-flex flex-column">

    <section id="nav">
        <nav class="navbar navbar-expand navbar-dark bg-white">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block text-dark" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard')?>">HMS</a>
                  <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a  href="<?= base_url('Logout')?>" class="px-3 text-dark pt-1">Logout</a>
                    </li>
                  </ul>
            </div>
        </nav>
    </section>
    
    <div class="d-flex justify-content-center" id="wrapper">

    <!-- Sidebar -->
        <div class="border-right sidebar-wrapper-vendor" id="sidebar-wrapper">
            <div class="sidebar-heading text-white"><img src="<?= base_url('assets/img')?>/fex1.png" alt=""></div>
            <div class="list-group list-group-flush">
                <a href="<?= base_url('DashboardVendor')?>" class="list-group-item list-group-item-action" style="font-size: 18px;"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                <a href="<?= base_url('DashboardVendor2')?>" class="list-group-item list-group-item-action" style="font-size: 18px; background-color: #3a2a67; color: white;"><i class="fas fa-fw fa-user"></i> Ubah Profil</a>
            </div>
        </div>
    <!-- /#sidebar-wrapper -->

    <div class="container-xl">

        <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-4 mt-3" id="menu-toggle">Admin Menu</button>

        <section id="dashboard" class="flex-grow-1">
            <div class="container-xl my-5 p-3">
                <div class="row"><div class="h1 font-weight-bold px-4">SD Negeri Sang Utara 02</div></div>
                <div class="row mt-5">
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <div class="row mt-5"><img src="<?= base_url('assets/')?>img/schoolLogo.png" alt="" width="300"></div>
                        <!-- <div class="row mt-4"><div class="btn btn-lg btn-light">Ubah Profil</div></div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="container-xl">
                            <div class="row d-flex flex-column mt-5 bg-light rounded p-4">
                                <div class="h2 font-weight-bold">Total Pengunjung</div>
                                <p class="h3"><span class="display-1">3456</span> Orang</p>
                            </div>
                            <div class="row d-flex flex-column mt-5 bg-light rounded p-4">
                                <div class="h2 font-weight-bold">Pengunjung Tertarik</div>
                                <p class="h3"><span class="display-1">756</span> Orang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="notifications" class="flex-grow-1">
            <div class="container-xl my-5">
                <div class="row"><div class="h1 font-weight-bold px-4">Notifications</div></div>
    
    
                <div class="row mt-5">
                    <div class="container-xl rounded bg-light p-4">
                        <div class="row">
                            <div class="col-sm-2 d-flex flex-column align-items-center">
                                <i class="far fa-user fa-3x mb-2"></i>
                                <p>Username</p>
                            </div>
                            <div class="col-sm-10">
                                <div class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo incidunt non aliquid fugiat eius nam at odit, quis, saepe ex qui distinctio eaque iusto hic, quidem ut maiores explicabo illum.</div>
                            </div>
                        </div>
                        <div class="row px-lg-4 mt-3">
                            <div class="col-sm-6">
                                <div class="p">user@mail.com | +62 8904 3904 323</div>
                            </div>
                            <div class="col-sm-6 d-sm-flex justify-content-end mt-3 mt-sm-0">
                                <p>12:37 7/12/2020</p>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="row mt-5">
                    <div class="container-xl rounded bg-light p-4">
                        <div class="row">
                            <div class="col-sm-2 d-flex flex-column align-items-center">
                                <i class="far fa-user fa-3x mb-2"></i>
                                <p>Username</p>
                            </div>
                            <div class="col-sm-10">
                                <div class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo incidunt non aliquid fugiat eius nam at odit, quis, saepe ex qui distinctio eaque iusto hic, quidem ut maiores explicabo illum.</div>
                            </div>
                        </div>
                        <div class="row px-lg-4 mt-3">
                            <div class="col-sm-6">
                                <div class="p">user@mail.com | +62 8904 3904 323</div>
                            </div>
                            <div class="col-sm-6 d-sm-flex justify-content-end mt-3 mt-sm-0">
                                <p>12:37 7/12/2020</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                
                <div class="row mt-5">
                    <div class="container-xl rounded bg-light p-4">
                        <div class="row">
                            <div class="col-sm-2 d-flex flex-column align-items-center">
                                <i class="far fa-user fa-3x mb-2"></i>
                                <p>Username</p>
                            </div>
                            <div class="col-sm-10">
                                <div class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo incidunt non aliquid fugiat eius nam at odit, quis, saepe ex qui distinctio eaque iusto hic, quidem ut maiores explicabo illum.</div>
                            </div>
                        </div>
                        <div class="row px-lg-4 mt-3">
                            <div class="col-sm-6">
                                <div class="p">user@mail.com | +62 8904 3904 323</div>
                            </div>
                            <div class="col-sm-6 d-sm-flex justify-content-end mt-3 mt-sm-0">
                                <p>12:37 7/12/2020</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mt-5">
                    <div class="container-xl rounded bg-light p-4">
                        <div class="row">
                            <div class="col-sm-2 d-flex flex-column align-items-center">
                                <i class="far fa-user fa-3x mb-2"></i>
                                <p>Username</p>
                            </div>
                            <div class="col-sm-10">
                                <div class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo incidunt non aliquid fugiat eius nam at odit, quis, saepe ex qui distinctio eaque iusto hic, quidem ut maiores explicabo illum.</div>
                            </div>
                        </div>
                        <div class="row px-lg-4 mt-3">
                            <div class="col-sm-6">
                                <div class="p">user@mail.com | +62 8904 3904 323</div>
                            </div>
                            <div class="col-sm-6 d-sm-flex justify-content-end mt-3 mt-sm-0">
                                <p>12:37 7/12/2020</p>
                            </div>
                        </div>
                    </div>
                </div>

                               <!-- Pagination disini -->
                               <h5 class="my-4 text-right">< Pagination Here ></h5>
                <!-- end pagination -->

                <div class="row py-5">
                    <div class="col-md-12 table-responsive m-0 px-3">
                        <div class="h1 font-weight-bold">Table Data User</div>
                        <table class="table table-hover table-bordered mt-5">
                          <thead style="background-color: #3a2a67; color: white;">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Email</th>
                              <th scope="col">Telepon</th>
                              <th scope="col">Tanggal Lahir</th>
                              <th scope="col">Alamat</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Dimas Okva</td>
                              <td>dimasokva@gmail.com</td>
                              <td>088211234125</td>
                              <td>18 Oktober 2001</td>
                              <td>Jl. Tanah Mas A.12</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Cahyo Ade</td>
                              <td>cahyoade@gmail.com</td>
                              <td>085601560129</td>
                              <td>18 Oktober 2001</td>
                              <td>Jl. Tanah Merah B.12</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Fahima Nabila</td>
                              <td>fahimanabila@gmail.com</td>
                              <td>083102021321</td>
                              <td>18 Oktober 2001</td>
                              <td>Jl. Tanah Hijau C.12</td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- Pagination disini -->
                        <p class="mt-4">< Pagination Here ></p>
                        <!-- End Pagination -->
                    </div>
                </div>

            </div>
        </section>

    </div>

    
    </div>
    
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

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>
</html>