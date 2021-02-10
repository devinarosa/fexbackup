<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>
<body class="d-flex flex-column">

    <section id="nav">
        <nav class="navbar navbar-expand navbar-dark bg-white">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block text-dark" href="<?= site_url('Dashboard'); ?>">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="<?= site_url('Dashboard'); ?>">HMS</a>
                  <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a  href="#" class="px-3 text-dark pt-1">logout</a>
                    </li>
                  </ul>
            </div>
        </nav>
    </section>

    <div class="d-flex justify-content-center"  id="wrapper">

            <!-- Sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-white"><img src="<?= base_url('assets'); ?>/img/fex1.png" alt=""></div>
                    <div class="list-group list-group-flush">
                        <a href="<?= site_url('DashboardAdmin'); ?>" class="list-group-item list-group-item-action" style="font-size: 18px; background-color: #3a2a67; color: white;"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                        <a href="<?= site_url('DashboardAdmin2'); ?>" class="list-group-item list-group-item-action" style="font-size: 18px; background-color: #3a2a67; color: white;"><i class="fas fa-fw fa-user"></i> User Management</a>
                        <a href="<?= site_url('DashboardAdmin3'); ?>" class="list-group-item list-group-item-action" style="font-size: 18px;"><i class="fas fa-fw fa-edit"></i> Menu Management</a>
                    </div>
                </div>
            <!-- /#sidebar-wrapper -->

                <div class="container-xl">

                    <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-md-4 mt-3" id="menu-toggle">Admin Menu</button>
                    
                    <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Menu Management</p>
                        </div>
                    </div>                      

                      <div class="row my-3 ml-2 pr-sm-0">
                          <div class="col-md-11 table-responsive">
                              <h5>Category List</h5>
                            <table class="table table-hover table-bordered">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col" class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Formal</td>
                                    <td>icon formal copy.jpg</td>
                                    <td class="text-center">
                                        <a href="" class="fas fa-fw fa-edit"></a>
                                        <a href="" class="fas fa-fw fa-trash"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Non-Formal</td>
                                    <td>icon formal copy.jpg</td>
                                    <td class="text-center">
                                        <a href="" class="fas fa-fw fa-edit"></a>
                                        <a href="" class="fas fa-fw fa-trash"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Others</td>
                                    <td>icon formal copy.jpg</td>
                                    <td class="text-center">
                                        <a href="" class="fas fa-fw fa-edit"></a>
                                        <a href="" class="fas fa-fw fa-trash"></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                      </div>

                      <div class="row my-3 ml-2 pr-sm-0">
                        <div class="col-md-11 table-responsive">
                            <h5>Sub-Category List</h5>
                          <table class="table table-hover table-bordered">
                              <thead style="background-color: #3a2a67; color: white;">
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Sub Kategori</th>
                                  <th scope="col" class="text-center">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>SD</td>
                                  <td class="text-center">
                                      <a href="" class="fas fa-fw fa-edit"></a>
                                      <a href="" class="fas fa-fw fa-trash"></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>SMP</td>
                                  <td class="text-center">
                                      <a href="" class="fas fa-fw fa-edit"></a>
                                      <a href="" class="fas fa-fw fa-trash"></a>
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>SMA</td>
                                  <td class="text-center">
                                      <a href="" class="fas fa-fw fa-edit"></a>
                                      <a href="" class="fas fa-fw fa-trash"></a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>

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