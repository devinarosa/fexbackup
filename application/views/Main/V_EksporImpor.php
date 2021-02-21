                        <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Menu Management</p>
                        </div>
                    </div>                      

                    <div class="row my-3 mb-5 ml-2 pr-sm-0 mr-2">
                          <div class="col-md-12 table-responsive">
                              <h5>Category List</h5>
                            <table class="table table-hover table-bordered" id="table">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Sub - Kategori</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col" class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Formal</td>
                                    <td>
                                      <p class="btn bg-purple text-white">Paud</p>
                                      <p class="btn bg-purple text-white">TK</p>
                                      <p class="btn bg-purple text-white">SD</p>
                                      <p class="btn bg-purple text-white">SMP</p>
                                      <p class="btn bg-purple text-white">SMA</p>
                                      <p class="btn bg-purple text-white">Universitas</p>
                                    </td>
                                    <td class="text-center"><img src="<?= base_url('assets/'); ?>img/formal.png" width="75px" alt="" style="filter : invert(1)"></td>
                                    <td class="text-center">
                                        <a href="" class="fas fa-fw fa-edit"></a>
                                        <a href="" class="fas fa-fw fa-trash"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Non-Formal</td>
                                    <td>
                                      <p class="btn bg-purple text-white">Art</p>
                                      <p class="btn bg-purple text-white">Beladiri</p>
                                      <p class="btn bg-purple text-white">Music</p>
                                    </td>
                                    <td class="text-center"><img src="<?= base_url('assets/'); ?>img/non formal.png" width="75px" alt="" style="filter : invert(1)"></td>
                                    <td class="text-center">
                                        <a href="" class="fas fa-fw fa-edit"></a>
                                        <a href="" class="fas fa-fw fa-trash"></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Others</td>
                                    <td>
                                      <p class="btn bg-purple text-white">Makanan</p>
                                      <p class="btn bg-purple text-white">Minuman</p>
                                      <p class="btn bg-purple text-white">vendor</p>
                                    </td>
                                    <td class="text-center"><img src="<?= base_url('assets/'); ?>img/fashion icon.png" width="75px" alt="" style="filter : invert(1)"></td>
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