                        <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Display Setting</p>
                            <div id="flash"></div>
                            <form style="font-size: 18px;" action="<?= base_url('submitDisplay')?>" enctype= multipart/form-data method="POST">
                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                      <label for="id">Livestream</label>
                                    </div>
                                    <div class="col-md-9">
                                      <input type="text" value="<?= $display[0]['link'] ?>" class="form-control pl-4" id="Livestream" name="txtLivestream1" style="border-radius: 20px;"> 
                                    </div>
                                </div>

                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                      <label for="id">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                      <textarea placeholder="Insert new category" type="text" class="form-control pl-4" id="Description" name="txtDescription5" rows="8" style="border-radius: 5px;"><?= $display[4]['link'] ?></textarea>
                                    </div>
                                </div>

                              <div class="row my-4 mx-md-5 mx-2">
                                  <div class="col-md-2">
                                      <label for="nama">Caraousel Dashboard</label>
                                  </div>
                                  <div class="col-md-3 mb-4 mb-sm-0">
                                      <div class="fotoPreview">
                                          <img src="<?= base_url('assets'); ?>/img/<?= $display[1]['filename'] ?>" alt="" class="preview w-100">
                                      </div>
                                      <div class="custom-file mt-3" style="font-size: 15px;">
                                          <input name="car2" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                          <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                      </div>
                                  </div>
                                  <div class="col-md-3 mb-4 mb-sm-0">
                                      <div class="fotoPreview">
                                          <img src="<?= base_url('assets'); ?>/img/<?= $display[2]['filename'] ?>" alt="" class="preview w-100">
                                      </div>
                                      <div class="custom-file mt-3" style="font-size: 15px;">
                                          <input name="car3" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                          <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                      </div>
                                  </div>
                                  <div class="col-md-3 mb-4 mb-sm-0">
                                      <div class="fotoPreview">
                                          <img src="<?= base_url('assets'); ?>/img/<?= $display[3]['filename'] ?>" alt="" class="preview w-100">
                                      </div>
                                      <div class="custom-file mt-3" style="font-size: 15px;">
                                          <input name="car4" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                          <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                      </div>
                                  </div>
                              </div>

                              <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" id=""> Update</button>
                                    </div>
                                </div>
                          </form>    
                        </div>
                    </div> 

                    <div class="row my-5 pb-5 pr-3 pr-sm-0 mx-md-5 mx-2">
                          <div class="col-md-11 table-responsive">
                              <h5 class="text-center text-md-left">Check Result</h5>
                            <table class="table table-hover table-bordered" id="table">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Pagename</th>
                                    <th class="text-center" scope="col">Value(s)</th>
                                    <th class="text-center" scope="col" class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody id="kat">
                                    <?php $no=1;foreach ($display as $z) { ?>
                                       <tr>
                                        <th class="text-center" scope="row"><?=$no;?></th>
                                        <td><?= $z['page']?></td>
                                        <td><i><?= $z['filename']?> <?= $z['link']?></i></td>
                                        <td class="text-center">
                                          <a target="_blank" href="<?= $z['page']; ?>">
                                            <button type="button" class="btn btn-success" style="border-radius: 20px;">Visit! </button>
                                          </a>
                                        </td>
                                      </tr>
                                    <?php $no++;} ?>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Pagename</th>
                                    <th class="text-center" scope="col">Value(s)</th>
                                    <th class="text-center" scope="col" class="text-center">Action</th>
                                  </tr>
                                </tfoot>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
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
        // filterdata table
        var table =$('#table').DataTable();

        $('#table tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input class="form-control" type="text" placeholder="Search ' + title + '" />');
        });

        table.columns().every(function() {
            var that = this;
            $('input', this.footer() ).on('keyup change', function() {
                if(that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    //inamge handler
    const previewIcon = document.querySelector('.preview');
    const inputIcon = document.querySelector('.inputImg');
    var newImage;

    inputIcon.onchange = e => {
        let previewTarget = e.target.parentElement.parentElement.querySelector('.preview');
        newImage = URL.createObjectURL(e.target.files[0]);
        previewTarget.src = newImage;
        previewTarget.onload = () => {
            URL.revokeObjectURL(newImage);
        }
    }

  </script>
</body>
</html>