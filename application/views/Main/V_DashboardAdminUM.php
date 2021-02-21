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
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="id_tenant" name="txtIdTenant" disabled style="border-radius: 20px;"> 
                              </div>
                          </div>
                          <div class="row my-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-1">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control pl-4" id="nama" name="txtNama" aria-describedby="emailHelp" placeholder="Masukan Nama" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-1">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control pl-4" id="email" name="txtEmail" aria-describedby="emailHelp" placeholder="Masukan Email" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-1">
                              <label for="id" class="pt-3">Kategori</label>
                            </div>
                            <div class="col-md-9 selectWrapper">
                                <div class="row pl-0 pl-md-2 kategori" style="font-size: 16px;">
                                    <!-- looping -->
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded text-center selectCategory border">
                                        <input type="hidden" name="txtKategori" id="kategori" value="Formal">Formal</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded text-center selectCategory border selected">
                                        <input type="hidden" name="txtKategori" id="kategori" value="Non-Formal">Non-Formal</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded text-center selectCategory border">
                                        <input type="hidden" name="txtKategori" id="kategori" value="Vendor">Vendor</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded text-center selectCategory border">
                                        <input type="hidden" name="txtKategori" id="kategori" value="Lainnya">Lainya</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-1"></div>
                            <div class="col-md-1">
                              <label for="id" class="pt-3">Sub-kategori</label>
                            </div>
                            <div class="col-md-9 selectWrapper subKategori">
                                <div class="row pl-0 pl-md-2 Formal d-none" style="font-size: 16px;">
                                    <!-- looping -->
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border selected">
                                        <input type="hidden" name="txtSubKategori" id="sub_kategori" value="Paud">Paud</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border">
                                        <input type="hidden" name="txtSubKategori" id="sub_kategori" value="TK">TK</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border">
                                        <input type="hidden" name="txtSubKategori" id="sub_kategori" value="SD">SD</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border">
                                        <input type="hidden" name="txtSubKategori" id="sub_kategori" value="SMP">SMP</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border">
                                        <input type="hidden" name="txtSubKategori" id="sub_kategori" value="SMA">SMA</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border">
                                        <input type="hidden" name="txtSubKategori" id="sub_kategori" value="Universitas">Universitas</div>
                                </div>

                                <div class="row pl-0 pl-md-2 Non-formal d-none" style="font-size: 16px;">
                                    <!-- looping -->
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border selected"><input type="hidden" name="txtSubKategori" id="sub_kategori" value="Art">Art</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border"><input type="hidden" name="txtSubKategori" id="sub_kategori" value="Beladiri">Beladiri</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border"><input type="hidden" name="txtSubKategori" id="sub_kategori" value="Music">Music</div>
                                </div>

                                <div class="row pl-0 pl-md-2 Vendor d-none" style="font-size: 16px;">
                                    <!-- looping -->
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border selected"><input type="hidden" name="txtSubKategori" id="sub_kategori" value="Makanan">Makanan</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border"><input type="hidden" name="txtSubKategori" id="sub_kategori" value="Minuman">Minuman</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border"><input type="hidden" name="txtSubKategori" id="sub_kategori" value="Vendor">vendor</div>
                                </div>

                                <div class="row pl-0 pl-md-2 Lainya d-none" style="font-size: 16px;">
                                    <!-- looping -->
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border selected"><input type="hidden" name="txtSubKategori" id="sub_kategori" value="Lainnya">lainya</div>
                                    <div class="col-md-2 mx-3 mx-md-2  my-2 p-2 rounded selectCategory text-center border selected"><input type="text" name="txtSubKategori" class="form-control" placeholder="Input Kategori" id="sub_kategori" value=""></div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-md-9"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" name="buat">Buat</button>
                            </div>
                        </div>
                      </form>

                      <div class="row my-5 pr-3 pr-sm-0">
                          <div class="col-md-1"></div>
                          <div class="col-md-10 table-responsive">
                              <h4>Tabel Data Vendor</h4>
                            <table class="table table-hover table-bordered" id="table">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>SMP Negeri 25 Semarang</td>
                                    <td>dimasokva@gmail.com</td>
                                    <td>SMP</td>
                                    <td>Semarang</td>
                                    <td class="text-success">Aktif</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>SMP Negeri 08 Semarang</td>
                                    <td>cahyoade@gmail.com</td>
                                    <td>SMP</td>
                                    <td>Semarang</td>
                                    <td class="text-success">Aktif</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>SMP Negeri 02 Semarang</td>
                                    <td>fahimanabila@gmail.com</td>
                                    <td>SMP</td>
                                    <td>Semarang</td>
                                    <td class="text-danger">Non-Aktif</td>
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
        
        const kategori = document.querySelector('.kategori');
        const subKategori = document.querySelector('.subKategori');

        subKategori.querySelector(`.${kategori.querySelector('.selected').innerText}`).classList.remove('d-none');

        kategori.querySelectorAll('.selectCategory').forEach(i => {
            i.onclick = e => {
                kategori.querySelector('.selected').classList.remove('selected');
                e.target.classList.add('selected');

                subKategori.childNodes.forEach(a => {
                    if(a.nodeType == 1){
                        a.classList.add('d-none');
                    }
                    
                })
                subKategori.querySelector(`.${kategori.querySelector('.selected').innerText}`).classList.remove('d-none');
            }    
        })

        subKategori.querySelectorAll('.selectCategory').forEach(i => {
            i.onclick = e => {
                e.target.classList.toggle('selected');
            }
        })
    </script>
</body>
</html>