                        <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Ekspor Impor</p>
                        </div>
                    </div>                      

                    <div class="row my-3 mb-5 ml-2 pr-sm-0 mr-2">
                          <div class="col-md-12 table-responsive">
                              <h5>Available List</h5>
                            <table class="table table-hover table-bordered" id="table">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Data pengunjung selama 1 bulan terakhir</td>
                                    <td>Monthly</td>
                                    <td class="text-center">
                                        <a href="#" class="fas fa-fw fa-download"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Data semua user</td>
                                    <td>All</td>
                                    <td class="text-center">
                                        <a href="#" class="fas fa-fw fa-download"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Data semua vendor</td>
                                    <td>All</td>
                                    <td class="text-center">
                                        <a href="#" class="fas fa-fw fa-download"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td>Data semua tenant</td>
                                    <td>All</td>
                                    <td class="text-center">
                                        <a href="#" class="fas fa-fw fa-download"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">5</th>
                                    <td>Data semua admin</td>
                                    <td>All</td>
                                    <td class="text-center">
                                        <a href="#" class="fas fa-fw fa-download"></a>
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
    </script>
</body>
</html>