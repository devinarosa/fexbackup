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