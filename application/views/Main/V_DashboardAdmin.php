                    <div class="row my-5">
                        <div class="col-md-4 my-3 my-md-0 d-flex justify-content-center">
                            <div class="card" style="border-radius: 25px; border-left: 25px solid #3A2A67; min-width: 300px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 d-flex align-items-center">
                                            <i class="fas fa-user fa-3x"></i>
                                        </div>
                                        <div class="col-8">
                                            <p style="font-size: 18px;">Registered User</p><p><?= $user ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-4 my-3 my-md-0 d-flex justify-content-center">
                            <div class="card" style="border-radius: 25px; border-left: 25px solid #3A2A67; min-width: 300px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 d-md-flex align-items-center">
                                            <i class="fas fa-school fa-3x"></i>
                                        </div>
                                        <div class="col-8">
                                            <p style="font-size: 18px;">Tenant/School</p><p><?= $tenant ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-md-4 my-3 my-md-0 d-flex justify-content-center">
                            <div class="card" style="border-radius: 25px; border-left: 25px solid #3A2A67; min-width: 300px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 d-flex align-items-center">
                                            <i class="fas fa-user fa-3x"></i>
                                        </div>
                                        <div class="col-8">
                                            <p style="font-size: 18px;">Vendor/Sponsor</p><p><?= $vendor ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-5 text-center ml-md-5 my-5 my-md-0">
                            <div class="row p-3 p-md-0">
                                <div class="col-md-12 py-2" style="background-color: #3A2A67; color: white; border-top-left-radius: 20px; border-top-right-radius: 20px;">Register Per Day (<?= date('F') ?>)</div>
                                <div class="col-md-12 py-3" style="border: 1px solid #C4C4C4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;"><canvas id="registerPerDay"></canvas></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5 text-center">
                            <div class="row p-3 p-md-0">
                                <div class="col-md-12 py-2" style="background-color: #3A2A67; color: white; border-top-left-radius: 20px; border-top-right-radius: 20px;">Category Vendor</div>
                                <div class="col-md-12 py-3" style="border: 1px solid #C4C4C4; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;"><canvas id="categoryVendor"></canvas></div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 p-3 p-md-0">
                        <div class="col-md-11 ml-md-5">
                            <div class="row">
                                <div class="col-md-12 py-2 text-center" style="background-color: #3A2A67; color: white; border-top-left-radius: 20px; border-top-right-radius: 20px;">User Log In</div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 pl-5"><canvas id="userLogIn"></canvas></div>
                                <div class="col-md-4 mt-5 pl-5" style="font-size: 20px;">
                                    <div class="row">
                                        <div class="col-md-12">Statistic</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-3">Today</div>
                                        <div class="col-9 text-center"><?= $getLoggedCounter[0]['counted']?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Target</div>
                                        <div class="col-9 text-center">1000</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-3">Percentage</div>
                                        <div class="col-9 text-center"><?= ($getLoggedCounter[0]['counted']/1000)*100 ?>%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="flash"></div>
                    <form action="<?= base_url('sendStream') ?>" method="POST">
                        <h4 class="text-center my-5">Update Livestream</h4>
                        <div class="row d-flex justify-content-center my-5">
                            <div class="col-sm-9">
                                <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                                    <input style="width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-1" placeholder="example : https://www.youtube.com/embed/oqnn_xhELG8" name="url_stream" id="url_stream">
                                </div>   
                            </div>
                            <div class="col-sm-2">
                                <div class="input-group-append d-flex justify-content-center">
                                    <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white" type="submit" id="button-addon2">Update</button>
                                </div>                 
                            </div>
                        </div>
                    </form>

                    <div class="row px-5 my-5 pb-5">
                        <div class="col-md-12 table-responsive m-0 p-0">
                        <h4 class="text-center my-3">Tabel Data User</h4>
                          <table class="table table-hover table-bordered" id="table">
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
                                <?php $no=1; foreach($all_user as $z) {?>
                                    <tr>
                                      <th scope="row"><?= $no;?></th>
                                      <td><?= $z['fullname']?></td>
                                      <td><?= $z['email']?></td>
                                      <td><?= $z['phone_number']?></td>
                                      <td><?= $z['date_birth']?></td>
                                      <td><?= $z['address']?></td>
                                    </tr>
                                <?php $no++;}?>
                              </tbody>
                            </table>
                        </div>
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
    <input type="hidden" id="arrayDay" value="<?= $graphic ?>">
    <input type="hidden" id="arrayCatName" value="<?= $n_cat ?>">
    <input type="hidden" id="arrayQtyName" value="<?= $q_cat ?>">
    <input type="hidden" id="arrayGltName" value="<?= $u_glt ?>">
    <input type="hidden" id="arrayGltQty" value="<?= $q_glt ?>">


    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(document).ready(function() {
            $('#flash').hide();
            <?php if($this->session->flashdata('msg')){ ?>
            $('#flash').html(`
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('msg'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`).show();
            <?php } ?>
        });

        var trying = $('#arrayDay').val()
        var catName = $('#arrayCatName').val()
        var qtyName = $('#arrayQtyName').val()
        var u_glt = $('#arrayGltName').val()
        var q_glt = $('#arrayGltQty').val()

        var arr_trying = trying.split(',')
        var arr_catName = catName.split(',')
        var arr_qtyName = qtyName.split(',')
        var arr_u_glt = u_glt.split(',')
        var arr_q_glt = q_glt.split(',')


        var registerPerDay = document.getElementById('registerPerDay').getContext('2d');
        var chart = new Chart(registerPerDay, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
            datasets: [{
                label: 'Register per Day',
                borderColor: 'rgb(0, 99, 132)',
                data: arr_trying
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
            labels: arr_catName,
            datasets: [{
                label: 'Register per Day',
                borderColor: 'white',
                data: arr_qtyName,
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
            labels: arr_u_glt,
            datasets: [{
                label: 'User Login',
                borderColor: 'white',
                data: arr_q_glt,
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