
                <div class="container-xl">
                    <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-4 mt-3" id="menu-toggle">Admin Menu</button>

                    <div class="row my-5">
                        <div class="col-md-4 my-3 my-md-0 d-flex justify-content-center">
                            <div class="card" style="border-radius: 25px; border-left: 25px solid #3A2A67; min-width: 300px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 d-flex align-items-center">
                                            <i class="fas fa-user fa-3x"></i>
                                        </div>
                                        <div class="col-8">
                                            <p style="font-size: 18px;">Total User</p><p>1 000 000</p>
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
                                            <p style="font-size: 18px;">Tenant/School</p><p>200 000</p>
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
                                            <p style="font-size: 18px;">User Active</p><p>500 000</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-5 text-center ml-md-5 my-5 my-md-0">
                            <div class="row p-3 p-md-0">
                                <div class="col-md-12 py-2" style="background-color: #3A2A67; color: white; border-top-left-radius: 20px; border-top-right-radius: 20px;">Register Per Day</div>
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
                                        <div class="col-md-12">Who Log In Today ?</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Today</div>
                                        <div class="col-8">500 000</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">Yesterday</div>
                                        <div class="col-8">500 000</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">Target</div>
                                        <div class="col-8">500 000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="#" method="post">
                        <div class="row d-flex justify-content-center my-5">
                            <div class="col-sm-9">
                                <div class="form-group d-flex justify-content-center pr-3 pr-sm-0">
                                    <input style="width: 1000px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control border-1" name="url_stream" id="url_stream" placeholder="Give me URL ? ">
                                </div>   
                            </div>
                            <div class="col-sm-2">
                                <div class="input-group-append d-flex justify-content-center">
                                    <a href=""><button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white" type="submit" name="" id="button-addon2">Set Livestream URL</button></a>
                                </div>                 
                            </div>
                        </div>
                    </form>

                    <div class="row px-5 mb-5">
                        <div class="col-md-12 table-responsive m-0 p-0">
                        <h4 class="text-center my-3">Tabel Data User</h4>
                          <table class="table table-hover table-bordered">
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
                            <p class="mt-4 text-center">< Pagination Here ></p>
                            <!-- End Pagination -->
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