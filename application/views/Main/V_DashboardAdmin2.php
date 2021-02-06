<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

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

    <div class="d-flex justify-content-center"  id="wrapper">

            <!-- Sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-white"><img src="<?= base_url('assets/img')?>/fex1.png" alt=""></div>
                    <div class="list-group list-group-flush">
                        <a href="<?= base_url('DashboardAdmin')?>" class="list-group-item list-group-item-action" style="font-size: 18px; background-color: #3a2a67; color: white"><i class="fas fa-home"></i> Dashboard</a>
                        <a href="<?= base_url('DashboardAdmin2')?>" class="list-group-item list-group-item-action" style="font-size: 18px;"><i class="fas fa-user"></i> User Management</a>
                    </div>
                </div>
            <!-- /#sidebar-wrapper -->

                <div class="container-xl">

                    <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-md-4 mt-3" id="menu-toggle">Admin Menu</button>
                    
                    <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Pendaftaran Tenant</p>
                        </div>
                    </div>

                      <form style="font-size: 18px;">
                          <div class="row">
                            <div class="col-md-1"></div>
                              <div class="col-md-1">
                                <label for="id" class="d-none d-sm-block">ID</label>
                                <label for="id" class="d-block d-sm-none">ID Tenant</label>
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="id" disabled style="border-radius: 20px;"> 
                              </div>
                          </div>
                          <div class="row my-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-1">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control pl-4" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama" style="border-radius: 20px;">
                                <small id="emailHelp" class="form-text text-muted pl-4">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-1">
                              <label for="id">Kategori</label>
                            </div>
                            <div class="col-md-9 selectWrapper">
                                <select class="form-control pl-4 selectNoArrow" style="border-radius: 20px;">
                                    <option>Kategori</option>
                                    <option>Default select 1</option>
                                    <option>Default select 2</option>
                                    <option>Default select 3</option>
                                    <option>Default select 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-1">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control pl-4" id="alamat" placeholder="Masukan Alamat" style="border-radius: 20px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" name="buat">Buat</button>

                            </div>
                        </div>
                      </form>

                      <div class="row my-5 pr-3 pr-sm-0">
                          <div class="col-md-1"></div>
                          <div class="col-md-10 table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Dimas Okva</td>
                                    <td>Nigga</td>
                                    <td>Semarang</td>
                                    <td>High Introvert</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Cahyo Ade</td>
                                    <td>Java</td>
                                    <td>Semarang</td>
                                    <td>Low Introvert</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Fahima Nabila</td>
                                    <td>Java</td>
                                    <td>Semarang</td>
                                    <td>High Extrovert</td>
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

        var registerPerDay = document.getElementById('registerPerDay').getContext('2d');
        var chart = new Chart(registerPerDay, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            datasets: [{
                label: 'Register per Day',
                borderColor: 'rgb(0, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45, 55, 53, 33]
            }]
        },

            // Configuration options go here
            options: {}
        });

        var categoryVendor = document.getElementById('categoryVendor').getContext('2d');
        var chart = new Chart(categoryVendor, {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: {
            labels: ['SD', 'SMP', 'SMA', 'Other'],
            datasets: [{
                label: 'Register per Day',
                borderColor: 'white',
                data: [30, 35, 50, 15],
                backgroundColor : [
                    'rgb(100, 220, 245)',
                    'rgb(80, 120 200)',
                    'rgb(150, 80, 200)',
                    'rgb(200, 80, 190)'
                ]
            }]
        },

            // Configuration options go here
            options: {}
        });

        var userLogIn = document.getElementById('userLogIn').getContext('2d');
        var chart = new Chart(userLogIn, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ['Dimas', 'Cahyo', 'Hasna', 'Fahima'],
            datasets: [{
                label: 'User Login',
                borderColor: 'white',
                data: [30, 25, 20, 15],
                backgroundColor : [
                    'rgb(100, 220, 245)',
                    'rgb(150, 80, 200)',
                    'rgb(200, 80, 190)'
                ]
            }]
        },

            // Configuration options go here
            options: {}
        });
    </script>
</body>
</html>