    <div class="container-xl">

        <section id="nav">
            <nav class="navbar navbar-expand navbar-dark bg-white">
                <div class="container-xl">
                    <a class="navbar-brand d-none d-sm-block text-dark" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                    <a class="navbar-brand d-block d-sm-none text-dark" href="<?= base_url('Dashboard')?>">HMS</a>
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class="nav-item dropdown">
                        <a class="dropdown-toggle text-muted px-3 waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/'); ?>img/sekolah 1.png" alt="user" class="img-circle" width="50"></a>
                        <div class="dropdown-menu" aria-labelledby="userMenu" style="transform: translate(-50%, 0)">
                            <a  href="<?= base_url('VendorEditProfile')?>" class="btn dropdown-item" >Edit Profile</a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item" type="button"><a href="index.html" class="text-decoration-none text-dark">Logout</a></button>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-2 ml-md-4 mt-3" id="menu-toggle">Admin Menu</button>

        <section id="dashboard" class="flex-grow-1">
            <div class="container-xl my-5 m-md-3">
                <div class="row"><div class="h1 font-weight-bold px-2">Edit Profil</div></div>

                <form action="" style="font-size: 20px;">
                    <div class="row my-4">
                        <div class="col-md-2"><label for="nama">Nama</label></div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" style="border-radius: 20px;">
                        </div>
                        <div class="col-md-3 mt-2 mt-md-0"><label for="id">ID 123456</label></div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="deskripsi">Deskripsi</label></div>
                        <div class="col-md-9">
                            <pre><textarea name="deskripsi" id="deskripsi" rows="5" style="width: 100%; border-radius: 15px;"></textarea></pre>
                        </div>
                    </div>
                    
                    <!-- hidden input buat ngirim data warna -->
                    <div class="row">
                        <input type="hidden" class="form-control input_warna" id="warna" placeholder="warna">
                    </div>

                    <div class="row">
                        <div class="col-md-2 my-4 my-md-0">
                            <label for="logo">Logo</label>
                        </div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">
                                <div class="col-4 col-md-2 rounded logoPreview">
                                    <img src="<?= base_url('assets'); ?>/img/HMS LOGO.jpeg" class="preview" alt="">
                                </div>
                    
                                <div class="col-md-6 my-2 my-md-0">
                                    <div class="custom-file" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input inputLogo" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-5">
                                <label for="warna_booth" class="pl-3">Warna Booth</label>
                                <div class="row pl-0 pl-md-4" style="font-size: 16px;">
                                    <div class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton checked"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
    
                                </div>
                            </div>
                            <div class="col-md-6 boothPreview">
                                <img src="<?= base_url('assets'); ?>/img/booth.png" class="img-fluid p-4 preview" alt="">
                                <div class="logo"><img src="<?= base_url('assets'); ?>/img/HMS LOGO.jpeg" alt="" srcset="" class="booth-logo"></div>
                                <div class="booth-name d-flex align-items-center font-weight-bold">Halmahera Music School</div>
                                <div class="gallery"> <img src="<?= base_url('assets'); ?>/img/tambahGambar.png" alt="" srcset="" class="booth-img"></div>
                                <div class="booth-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, odit!</div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="email">Email</label></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control pl-4" id="email" placeholder="Masukan Email" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="no_telp">No Telepon</label></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control pl-4" id="no_telp" placeholder="Masukan Nomor Telepon" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="alamat">Alamat</label></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control pl-4" id="alamat" placeholder="Masukan Alamat" style="border-radius: 20px;">
                        </div>
                    </div>



                    <div class="row my-3">
                        <div class="col-md-2"><label for="url_video">URL Video</label></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control pl-4" id="url_video" placeholder="Masukan Embed URL Video" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="fitur_tambahan">Fitur Tambahan</label></div>
                        <div class="col-md-9">
                            <pre><textarea name="fitur_tambahan" id="fitur_tambahan" rows="5" style="width: 100%; border-radius: 15px;"></textarea></pre>
                        </div>
                    </div>

                    <div class="row my-4 foto">
                        <div class="col-md-2"><label for="foto">Foto</label></div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">

                                <div class="col-md-4 mb-4 mb-sm-0">
                                    <div class="rounded border fotoPreview">
                                        <i class="far fa-times removeImage"></i>
                                        <img src="<?= base_url('assets'); ?>/img/tambahGambar.png" alt="" class="preview">
                                    </div>
                                    <div class="custom-file mt-3" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-4 mb-sm-0">
                                    <div class="rounded border fotoPreview">
                                        <i class="far fa-times removeImage"></i>
                                        <img src="<?= base_url('assets'); ?>/img/tambahGambar.png" alt="" class="preview">
                                    </div>
                                    <div class="custom-file mt-3" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-4 mb-sm-0">
                                    <div class="rounded border fotoPreview">
                                        <i class="far fa-times removeImage"></i>
                                        <img src="<?= base_url('assets'); ?>/img/tambahGambar.png" alt="" class="preview">
                                    </div>
                                    <div class="custom-file mt-3" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row my-5 fasilitas">
                        <div class="col-md-2"><label for="fasilitas">Fasilitas</label></div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">

                                <div class="col-md-4 mb-4 p">
                                    <div class="rounded border plus">
                                        <i class="far fa-plus fa-4x"></i>
                                    </div>
                                    <div class="custom-file mt-3 hidden" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                    </div>
                                    <input type="text" class="form-control pl-3 mt-3 hidden" id="nama_fasilitas" placeholder="Nama Fasilitas" style="border-radius: 20px;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row my-5 py-5">
                        <div class="col-md-9"></div>
                        <div class="col-md-2">
                            <button type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" name="buat">Edit</button>
                        </div>
                    </div>
                </form>

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
    <script src="<?= base_url('assets'); ?>/js/dashboardVendor2.js"></script>

</body>
</html>