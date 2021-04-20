    <section id="dashboard" class="flex-grow-1">
            <div class="container-xl my-5 p-3">
                <div class="row"><div class="h1 font-weight-bold px-4"><?= $org[0]['fullname']?></div></div>
                <div class="row mt-5">
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <div class="row mt-5"><img src="<?= base_url('assets/')?>img/roles/<?= $org[0]['logo']?>" alt="" width="300"></div>
                        <!-- <div class="row mt-4"><div class="btn btn-lg btn-light">Ubah Profil</div></div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="container-xl">
                            <div class="row d-flex flex-column mt-5 bg-light rounded p-4">
                                <div class="h2 font-weight-bold">Total Pengunjung</div>
                                <p class="h3"><span class="display-1">0</span> Orang</p>
                            </div>
                            <div class="row d-flex flex-column mt-5 bg-light rounded p-4">
                                <div class="h2 font-weight-bold">Pengunjung Tertarik</div>
                                <p class="h3"><span class="display-1">0</span> Orang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="notifications" class="flex-grow-1">
            <div class="container-xl my-5">
                <div class="row"><div class="h1 font-weight-bold px-4">Notifications</div></div>
                
               <?php if (!empty($post)) { ?>  
                    <?php foreach($post as $k){ ?>
        
                    <div class="row mt-5">
                        <div class="container-xl rounded bg-light p-4">
                            <div class="row">
                                <div class="col-sm-2 d-flex flex-column align-items-center">
                                    <i class="far fa-user fa-3x mb-2"></i>
                                    <p><?= $k['username']?></p>
                                </div>
                                <div class="col-sm-10">
                                    <div class="lead"><?= $k['msg']?></div>
                                    <div class="lead"><img src="<?= base_url('assets/upload/post/'.$k['filename'])?>"></div>
                                </div>
                            </div>
                            <div class="row px-lg-4 mt-3">
                                <div class="col-sm-6">
                                    <div class="p"><a href="mailto:<?= $k['email']?>"><?= $k['email']?></a> | <a href="https://wa.me/<?= $k['phone_number']?>"><?= $k['phone_number']?></a> </div>
                                </div>
                                <div class="col-sm-6 d-sm-flex justify-content-end mt-3 mt-sm-0">
                                    <p><?= $k['creation_date']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                <?php }else{ ?>
                    <div class="row mt-5">
                        <div class="container-xl rounded bg-light p-4">
                            <div class="row">
                                <div class="col-sm-2 d-flex flex-column align-items-center">
                                    <i class="far fa-user fa-3x mb-2"></i>
                                    <p>Username</p>
                                </div>
                                <div class="col-sm-10">
                                    <div class="lead">You had no notification yet...</div>
                                </div>
                            </div>
                            <div class="row px-lg-4 mt-3">
                                <div class="col-sm-6">
                                    <div class="p">Email | Phone Number</div>
                                </div>
                                <div class="col-sm-6 d-sm-flex justify-content-end mt-3 mt-sm-0">
                                    <p><?= date('Y-m-d H:i:s')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>


                <div class="row py-5">
                    <div class="col-md-12 table-responsive m-0 px-3">
                        <div class="h1 font-weight-bold">Table Data User</div>
                        <table class="table table-hover table-bordered mt-5" id="table">
                          <thead style="background-color: #3a2a67; color: white;">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Fullname</th>
                              <th scope="col">Username</th>
                              <th scope="col">Email</th>
                              <th scope="col">Telepon</th>
                              <th scope="col">Tanggal Lahir</th>
                              <th scope="col">Alamat</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no=1; foreach($post as $k) {?>
                                <tr>
                                    <td> <?=$no;?> </td>
                                    <td> <?=$k['fullname']?> </td>
                                    <td> <?=$k['username']?> </td>
                                    <td> <?=$k['email']?> </td>
                                    <td> <?=$k['phone_number']?> </td>
                                    <td> <?=$k['date_birth']?></td>
                                    <td> <?=$k['address']?></td>
                            <?php } ?>
                            
                          </tbody>
                        </table>
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